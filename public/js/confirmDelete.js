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
    $('.prinsip-delete').on('click',function () {
        var postId = $(this).data('id');        
        Swal.fire({
            title: "Delete Confirmation",
            text: "Will you delete this prinsip with ID: "+postId+"?",
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
                window.location.href = "about/prinsip/delete/" + postId;
                Swal.fire({
                    text: "One prinsip has been deleted.",
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    });
    $('.spesial-delete').on('click',function () {
        var postId = $(this).data('id');        
        Swal.fire({
            title: "Delete Confirmation",
            text: "Will you delete this spesialisasi with ID: "+postId+"?",
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
                window.location.href = "about/spes/delete/" + postId;
                Swal.fire({
                    text: "One spesialisasi has been deleted.",
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    });
    $('.approach-delete').on('click',function () {
        var postId = $(this).data('id');        
        Swal.fire({
            title: "Delete Confirmation",
            text: "Will you delete this approach with ID: "+postId+"?",
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
                window.location.href = "about/approach/delete/" + postId;
                Swal.fire({
                    text: "One approach has been deleted.",
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    });
    $('.method-delete').on('click',function () {
        var postId = $(this).data('id');        
        Swal.fire({
            title: "Delete Confirmation",
            text: "Will you delete this method with ID: "+postId+"?",
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
                window.location.href = "approach/method/delete/" + postId;
                Swal.fire({
                    text: "One method has been deleted.",
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    });
    $('.lead-delete').on('click',function () {
        var postId = $(this).data('id');        
        Swal.fire({
            title: "Delete Confirmation",
            text: "Will you delete this lead with ID: "+postId+"?",
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
                window.location.href = "lead/delete/" + postId;
                Swal.fire({
                    text: "One lead has been deleted.",
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    });
    $('.assist-delete').on('click',function () {
        var postId = $(this).data('id');        
        Swal.fire({
            title: "Delete Confirmation",
            text: "Will you delete this assistant with ID: "+postId+"?",
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
                window.location.href = "assist/delete/" + postId;
                Swal.fire({
                    text: "One assistant has been deleted.",
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    });
    $('.research-delete').on('click',function () {
        var postId = $(this).data('id');        
        Swal.fire({
            title: "Delete Confirmation",
            text: "Will you delete this researcher with ID: "+postId+"?",
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
                window.location.href = "penelitian/delete/" + postId;
                Swal.fire({
                    text: "One researcher has been deleted.",
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    });
    $('.study-delete').on('click',function () {
        var postId = $(this).data('id');        
        Swal.fire({
            title: "Delete Confirmation",
            text: "Will you delete this study with ID: "+postId+"?",
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
                window.location.href = "pendidikan/delete/" + postId;
                Swal.fire({
                    text: "One study has been deleted.",
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    });
    $('.public-delete').on('click',function () {
        var postId = $(this).data('id');        
        Swal.fire({
            title: "Delete Confirmation",
            text: "Will you delete this publication with ID: "+postId+"?",
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
                window.location.href = "publikasi/delete/" + postId;
                Swal.fire({
                    text: "One publication has been deleted.",
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    });
    $('.partner-delete').on('click',function () {
        var postId = $(this).data('id');        
        Swal.fire({
            title: "Delete Confirmation",
            text: "Will you delete this partner with ID: "+postId+"?",
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
                window.location.href = "partners/delete/" + postId;
                Swal.fire({
                    text: "One partner has been deleted.",
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    });
    $('.message-delete').on('click',function () {
        var postId = $(this).data('id');
        var name = $(this).data('name');
        Swal.fire({
            title: "Delete Confirmation",
            text: "Will you delete this message from "+name+"?",
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
                window.location.href = "messages/delete/" + postId;
                Swal.fire({
                    text: "One message has been deleted.",
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    });
    $('.pubreq-delete').on('click',function () {
        var postId = $(this).data('id');
        var email = $(this).data('email');
        Swal.fire({
            title: "Delete Confirmation",
            text: "Will you delete this request from "+email+"?",
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
                window.location.href = "publication-request/delete/" + postId;
                Swal.fire({
                    text: "One request has been deleted.",
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    });
});
