$(document).ready(() => {
    $('#myTable').DataTable({
        "lengthChange": false,
    });

    // action ketika menghapus data
    $('#table tbody').on('click', '.btnHapus', function(e) {
        e.preventDefault();
        const href = $(this).attr('href');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })
    });

    // action ketika reset password
    $('#table tbody').on('click', '.btnReset', function(e) {
        e.preventDefault();
        const href = $(this).attr('href');

        Swal.fire({
            title: 'Reset password ?',
            text: "Default password : siapbanget",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, reset it!'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })
    });

    // Alert 
    const message = $('.flash-data').data('tempdata');
    const error   = $('.flash-data-error').data('tempdata');
    const info    = $('.flash-data-info').data('tempdata');
    const confirm = $('.flash-data-confirm').data('tempdata');
    if (error) {
        Swal.fire({
            title: 'Oops...',
            text: error,
            icon: 'error'
        });
    }
    else if(message) {
        Swal.fire({
            title: 'Success',
            text: message,
            icon: 'success'
        });
    }else if(info) {
        Swal.fire({
            title: 'Info',
            text: info,
            icon: 'info'
        });
    }else if(confirm) {
        Swal.fire({
            title: 'Success',
            text: confirm,
            icon: 'success',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            confirmButtonText: '<a href="localhost/project_siap/admin/suratkeluar/getTemplate" style="text-decoration: none; color:white;" target="_blank">Download Template</a>'
        })
    }else {
        console.log('Pindah halaman');
    }

});