$(function() {
    $('#commonTable').DataTable();
    $('#commonTable2').DataTable();
});

$(function() { // Custom input type=file
    $('input#foto').on('change', function(){  // for first upload
        $('#file-chosen').text(this.files[0].name);
        if(this.files[0].size > 2048000) {   
            Swal.fire({ //trigger Swal to announce user
                title: "Oops..!",
                text: "File kamu melebihi batas 2MB.",
                type: 'error',
                icon: 'warning',
                width: 450,
                confirmButtonText: "Okay",
                allowOutsideClick: false
            });
            $('#file-chosen').text('No file chosen');
        };
    });
})
function editFile() { // Custom input type=file // for edit
    $('input#editfoto').on('change', function(){  
        $('#file-edit').text(this.files[0].name);
        if(this.files[0].size > 2048000) {   
            Swal.fire({ //trigger Swal to announce user
                title: "Oops..!",
                text: "File kamu melebihi batas 2MB.",
                type: 'error',
                icon: 'warning',
                width: 450,
                confirmButtonText: "Okay",
                allowOutsideClick: false
            });
            $('#file-edit').text('No file chosen');
        };
    });
}

// CKEditor init
$(function(){
    CKEDITOR.config.enterMode = 2 ; // replace <p> with <br>
    CKEDITOR.config.ShiftEnterMode = 1; // adding <p> tag
    CKEDITOR.replace('descCK');
    CKEDITOR.replaceAll('descCK'); 
})

// Edit data by AJAX
$(document).on('click', '.btn-edit', function(){
    var base_url = window.location.origin+window.location.pathname; 
    var id  = $(this).data('id');

    $.ajax({ // AJAX request
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: base_url+'/edit',
        type: 'POST',
        data: {
            id: id,
            csrf: $('meta[name="csrf-token"]').attr('content')
        },
        beforeSend: function(){
            $('#edit-body').append('<div class="text-center text-dark"><h1><i class="fas fa-spin fa-spinner ml-2"></i></h1></div>')
        },
        success: function(response){ 
            $('#edit-body').html(response); // Add response in Modal body
            $('#editRow').modal('show');    // Display Modal
            $('[data-toggle="tooltip"]').tooltip(); // init tooltip
            CKEDITOR.replaceAll('descCK');  // init CKEditor didalam modal

            editFile();
        }
    });
    $('#editRow').on('hidden.bs.modal', function (e) {
        $('#edit-body').html('');
    })
});
