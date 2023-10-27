/* 
    This alerts only intended for DataTable
*/

const styleSwal = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-primary fw-bolder',
        cancelButton: 'btn btn-flex btn-light btn-active-danger fw-bolder'
    },
    buttonsStyling: false
});

// disable 
$(document).on('click', '.swal-disable', function(event) {
    var form =  $(this).closest("form");
    var name = $(this).closest('td').find("input[id='swal_name_val']").val();

    console.log(name);

    event.preventDefault();

    styleSwal.fire({
        title: "Nonakif",
        html: "Apakah kamu ingin menonaktifkan <span class='text-primary'><b>"+name+"</b></span>?",
        icon: "question",
        showCloseButton: true,
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak',
    })
    .then((res) => {
        if (res.isConfirmed) {
            form.submit();
        }
    });
});

// enable
$(document).on('click', '.swal-enable', function(event) {
    var form =  $(this).closest("form");
    var name = $(this).closest('td').find("input[id='swal_name_val']").val();

    console.log(name);

    event.preventDefault();

    styleSwal.fire({
        title: "Aktif",
        html: "Apakah kamu ingin mengaktifkan <span class='text-primary'><b>"+name+"</b></span>?",
        icon: "question",
        showCloseButton: true,
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak',
    })
    .then((res) => {
        if (res.isConfirmed) {
            form.submit();
        }
    });
});

// delete
$(document).on('click', '.swal-delete', function(event) {
    var form =  $(this).closest("form");
    var name = $(this).closest('td').find("input[id='swal_name_val']").val();

    console.log(name);

    event.preventDefault();

    styleSwal.fire({
        title: "Hapus",
        html: "Apakah kamu yakin ingin menghapus <span class='text-danger'><b>"+name+"</b></span>?",
        icon: "warning",
        showCloseButton: true,
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak',
    })
    .then((res) => {
        if (res.isConfirmed) {
            form.submit();
        }
    });
});