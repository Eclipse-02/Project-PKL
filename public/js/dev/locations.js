// disabling all input except prov
$('#kota_code').attr("style", "pointer-events: none; background-color: lightgray;");
$('#kec_code').attr("style", "pointer-events: none; background-color: lightgray;");
$('#kel_code').attr("style", "pointer-events: none; background-color: lightgray;");

$('#prov_code').change(function() {
    var prov_code = $(this).val();
    $('#kota_code').attr('style', ''); //enabling input
    $('#kec_code').attr("style", "pointer-events: none; background-color: lightgray;");
    $('#kel_code').attr("style", "pointer-events: none; background-color: lightgray;");

    // clearing options
    $('#kota_code').empty();
    $('#kec_code').empty();
    $('#kel_code').empty();

    // set selected value empty
    $('#kota_code').append("<option value='' class='text-center'>-- Pilih Kota --</option>");
    $('#kec_code').append("<option value='' class='text-center'>-- Pilih Kecamatan --</option>");
    $('#kel_code').append("<option value='' class='text-center'>-- Pilih Kelurahan --</option>");
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
    $('#kec_code').attr('style', ''); //enabling input
    $('#kel_code').attr("style", "pointer-events: none; background-color: lightgray;");

    // clearing options
    $('#kec_code').empty();
    $('#kel_code').empty();

    // set selected value empty
    $('#kec_code').append("<option value='' class='text-center'>-- Pilih Kecamatan --</option>");
    $('#kel_code').append("<option value='' class='text-center'>-- Pilih Kelurahan --</option>");
    fetch(`http://127.0.0.1:8000/api/v1/kecamatans?code=` + kota_code)
        .then(response => response.json())
        .then(
            kec => kec.forEach(element => {
                $("#kec_code")
                .append("<option value='" + element.kec_code + "'>" + element.kecamatan + "</option>");
            })
        );
});

$('#kec_code').change(function() {
    var kec_code = $(this).val();
    $('#kel_code').attr('style', ''); //enabling input

    // clearing options
    $('#kel_code').empty();

    // set selected value empty
    $('#kel_code').append("<option value='' class='text-center'>-- Pilih Kelurahan --</option>");
    fetch(`http://127.0.0.1:8000/api/v1/kelurahans?code=` + kec_code)
        .then(response => response.json())
        .then(
            kel => kel.forEach(element => {
                $("#kel_code")
                .append("<option value='" + element.kel_code + "'>" + element.kelurahan + "</option>");
            })
        );
});

// for edit page
function callLocations(kota_code, kec_code, kel_code) {
    $('#kota_code').attr("style", "");
    $('#kec_code').attr("style", "");
    $('#kel_code').attr("style", "");

    let prov_code = $('#prov_code').val();

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
}