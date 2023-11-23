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

// dtl delete
$(document).on('click', '.swal-dtl-delete', function(event) {
    var id = $(this).val();
    var token =  $("meta[name='csrf-token']").attr("content");
    var name = $(this).closest('form').find("input[name='dtl_desc[]']").val();

    event.preventDefault();

    styleSwal.fire({
        title: "Hapus",
        html: "Apakah kamu yakin ingin menghapus <span class='text-danger'><b>"+name+"</b></span>? Aksi ini permanen.",
        icon: "warning",
        showCloseButton: true,
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak',
    })
    .then((res) => {
        if (res.isConfirmed) {
            //fetch to delete data
            $.ajax({

                url: `http://127.0.0.1:8000/packages/packagedetails/${id}`,
                type: "DELETE",
                cache: false,
                data: {
                    "_token": token
                },
                success:function(){ 

                    //show success message
                    Swal.fire({
                        type: 'success',
                        icon: 'success',
                        title: `Data Berhasil di Hapus!`,
                        showConfirmButton: false,
                        timer: 3000
                    });

                    //remove post on table
                    $(`#dtl_${id}`).remove();
                }
            });
        }
    });
});