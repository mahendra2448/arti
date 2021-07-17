$(function(){
    $('.header-delete').on('click',function () {
        var postId = $(this).data('id');        
        Swal.fire({
            title: "Delete Confirmation",
            text: "Will you delete this header with ID: "+postId+"?",
            type: "error",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonClass: 'btn-sm btn-danger waves-effect waves-light',
            cancelButtonText: "No",
            confirmButtonText: "Yes, delete",
            closeOnConfirm: true,
            closeOnCancel: true,
            allowOutsideClick: false
        }).then((result) => {
            if (result.value) {
                window.location.href = "homepage/delete/" + postId;
                Swal.fire({
                    text: "One header has been deleted.",
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    });
    $('.expthumb-delete').on('click',function () {
        var postId = $(this).data('id');        
        Swal.fire({
            title: "Delete Confirmation",
            text: "Will you delete this thumbnail with ID: "+postId+"?",
            type: "error",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonClass: 'btn-sm btn-danger waves-effect waves-light',
            cancelButtonText: "No",
            confirmButtonText: "Yes, delete",
            closeOnConfirm: true,
            closeOnCancel: true,
            allowOutsideClick: false
        }).then((result) => {
            if (result.value) {
                window.location.href = "experiences/delete/" + postId;
                Swal.fire({
                    text: "One thumbnail has been deleted.",
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    });
    $('.testi-delete').on('click',function () {
        var postId = $(this).data('id');        
        Swal.fire({
            title: "Delete Confirmation",
            text: "Will you delete this testimoni with ID: "+postId+"?",
            type: "error",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonClass: 'btn-sm btn-danger waves-effect waves-light',
            cancelButtonText: "No",
            confirmButtonText: "Yes, delete",
            closeOnConfirm: true,
            closeOnCancel: true,
            allowOutsideClick: false
        }).then((result) => {
            if (result.value) {
                window.location.href = "testimonials/delete/" + postId;
                Swal.fire({
                    text: "One testimonial has been deleted.",
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    });
});
