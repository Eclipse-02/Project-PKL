// init default state
$('#kota_code').select2({
    placeholder: 'Pilih Provinsi Terlebih Dahulu'
});
$('#kec_code').select2({
    placeholder: 'Pilih Kota Terlebih Dahulu'
});
$('#kel_code').select2({
    placeholder: 'Pilih Kecamatan Terlebih Dahulu'
});
$('#zip_code').select2({
    placeholder: 'Pilih Kecamatan Terlebih Dahulu'
});

$('#prov_code').change(function() {
    var prov_code = $(this).val();
    $('#kota_code').attr('disabled', false); //enabling input
    $('#kec_code').attr("disabled", true);
    $('#kel_code').attr("disabled", true);
    $('#zip_code').attr("disabled", true);

    // clearing options
    $('#kota_code').empty();
    $('#kec_code').empty();
    $('#kel_code').empty();
    $('#zip_code').empty();

    $('#kota_code').append('<option></option>');
    $('#kec_code').append('<option></option>');
    $('#kel_code').append('<option></option>');
    $('#zip_code').append('<option></option>');

    // set disabled value empty
    $('#kota_code').select2({
        placeholder: 'Pilih Kota'
    });
    $('#kec_code').select2({
        placeholder: 'Pilih Kota Terlebih Dahulu'
    });
    $('#kel_code').select2({
        placeholder: 'Pilih Kecamatan Terlebih Dahulu'
    });
    $('#zip_code').select2({
        placeholder: 'Pilih Kecamatan Terlebih Dahulu'
    });
    fetch(`http://127.0.0.1:8000/api/v1/kotas?code=` + prov_code)
        .then(response => response.json())
        .then(
            kota => kota.forEach(element => {
                $("#kota_code")
                .append("<option value='" + element.kota_code + "'>" + element.kota + "</option>");
            })
        );
});

$('#kota_code').change(function() {
    var kota_code = $(this).val();
    $('#kec_code').attr('disabled', false); //enabling input
    $('#kel_code').attr("disabled", true);
    $('#zip_code').attr("disabled", true);

    // clearing options
    $('#kec_code').empty();
    $('#kel_code').empty();
    $('#zip_code').empty();

    $('#kec_code').append('<option></option>');
    $('#kel_code').append('<option></option>');
    $('#zip_code').append('<option></option>');

    // set disabled value empty
    $('#kec_code').select2({
        placeholder: 'Pilih Kecamatan'
    });
    $('#kel_code').select2({
        placeholder: 'Pilih Kecamatan Terlebih Dahulu'
    });
    $('#zip_code').select2({
        placeholder: 'Pilih Kecamatan Terlebih Dahulu'
    });
    fetch(`http://127.0.0.1:8000/api/v1/kecamatans?code=` + kota_code)
        .then(response => response.json())
        .then(
            kecamatan => kecamatan.forEach(element => {
                $("#kec_code")
                .append("<option value='" + element.kec_code + "'>" + element.kecamatan + "</option>");
            })
        );
});

$('#kec_code').change(function() {
    var kec_code = $(this).val();
    $('#kel_code').attr('disabled', false); //enabling input
    $('#zip_code').attr('disabled', false); //enabling input

    // clearing options
    $('#kel_code').empty();
    $('#zip_code').empty();

    $('#kel_code').append('<option></option>');
    $('#zip_code').append('<option></option>');

    // set disabled value empty
    $('#kel_code').select2({
        placeholder: 'Pilih Kelurahan'
    });
    $('#zip_code').select2({
        placeholder: 'Pilih Kode Pos'
    });
    fetch(`http://127.0.0.1:8000/api/v1/kelurahans?code=` + kec_code)
        .then(response => response.json())
        .then(
            kelurahan => kelurahan.forEach(element => {
                $("#kel_code")
                .append("<option value='" + element.kel_code + "'>" + element.kelurahan + "</option>");
            })
        );

    fetch(`http://127.0.0.1:8000/api/v1/zips?code=` + kec_code)
        .then(response => response.json())
        .then(
            zip => zip.forEach(element => {
                $("#zip_code")
                .append("<option value='" + element.zip_code + "'>" + element.zip_desc + "</option>");
            })
        );
});

// for edit page
function callLocations(prov_code = '', kota_code = '', kec_code = '', kel_code = '', zip_code = '') {
    console.log(prov_code);
    fetch(`http://127.0.0.1:8000/api/v1/kotas?code=` + prov_code)
    .then(response => response.json())
    .then(kota => kota.forEach(element => {
            if (element.kota_code == kota_code) {
                $("#kota_code")
                .append("<option value='" + element.kota_code + "' selected>" + element.kota +"</option>");
            } else {
                $("#kota_code")
                .append("<option value='" + element.kota_code + "'>" + element.kota +"</option>");
            }
        })
    );

    fetch(`http://127.0.0.1:8000/api/v1/kecamatans?code=` + kota_code)
    .then(response => response.json())
    .then(kec => kec.forEach(element => {
            if (element.kec_code == kec_code) {
                $("#kec_code")
                .append("<option value='" + element.kec_code + "' selected>" + element.kecamatan + "</option>");
            } else {
                $("#kec_code")
                .append("<option value='" + element.kec_code + "'>" + element.kecamatan + "</option>");
            }
        })
    );

    fetch(`http://127.0.0.1:8000/api/v1/kelurahans?code=` + kec_code)
    .then(response => response.json())
    .then(
        kel => kel.forEach(element => {
            if (element.kel_code == kel_code) {
                $("#kel_code")
                .append("<option value='" + element.kel_code + "' selected>" + element.kelurahan + "</option>");
            } else {
                $("#kel_code")
                .append("<option value='" + element.kel_code + "'>" + element.kelurahan + "</option>");
            }
        })
    );

    fetch(`http://127.0.0.1:8000/api/v1/zips?code=` + kec_code)
    .then(response => response.json())
    .then(
        zip => zip.forEach(element => {
            if (element.kec_code == kec_code) {
                if (element.zip_code == zip_code) {
                    $("#zip_code")
                    .append("<option value='" + element.zip_code + "' selected>" + element.zip_desc + "</option>");
                } else {
                    $("#zip_code")
                    .append("<option value='" + element.zip_code + "'>" + element.zip_desc + "</option>");
                }
            }
        })
    );
}