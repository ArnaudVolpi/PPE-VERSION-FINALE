<?php require_once 'include/navbar.php';

?>
<div class="container">
<div class="card">
    <div class="card-body" id="containerTable">
       <?php
        require_once 'table.php';
        ?>
    </div>
</div>
</div> 

<script>





















    /*
$(function () {
    var frm = $('#addAction');
    frm.submit(function (ev) {
        submitForm(frm,ev);
    });/*
    var frm2 = $('#EditDeleteAction');
    frm2.submit(function (ev) {
      submitForm(frm2,ev);
    });*/
/*
    function submitForm(frm,ev){
        $.ajax({
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: frm.serialize(),
            success: function (data) {
                alert('ok');
   
            }
        });
        ev.preventDefault();
    }

});*/


//-------AJAX Ajout -------//
   /* var formAdd=$('#addAction');
    formAdd.submit(function(event){
    event.preventDefault();
    $.ajax({
        type: formAdd.attr('method'),
                url: formAdd.attr('action'),
                cache: false,
                data: formAdd.serialize(),    
                success: function (data) {
                    if(data!="success"){
                        $.notify({
                        // options
                        icon: 'fa fa-2x fa-exclamation-triangle',
                        message: "Erreur lors de l'insertion!"
                        }, {
                            // settings
                            type: 'danger',
                            placement: {
                            from: "top",
                            align: "center"
                            },
                            animate: {
                            enter: 'animated fadeInDown',
                            exit: 'animated fadeOutUp'
                            },
                            offset: 68,
                        });
                    }else{

                    $.notify({
                    // options
                    icon: 'fa fa-2x fa-check',
                    message: 'Club ajouté.'
                    }, {
                        // settings
                        type: 'success',
                        placement: {
                        from: "top",
                        align: "center"
                        },
                        animate: {
                        enter: 'animated fadeInDown',
                        exit: 'animated fadeOutUp'
                        },
                        offset: 68,
                    });
                    }  
                }            
    });   
});*/

//-------AJAX Ajout -------//
//-------AJAX Edit Delete -------//
/*var formEditDel=$('#EditDeleteAction');
formEditDel.submit(function(event){
    event.preventDefault();


    $.ajax({
        type: formEditDel.attr('method'),
                url: formEditDel.attr('action'),
                cache: false,
                data: formEditDe.serialize(),    
                success: function (data) {
                    if(data!="success"){
                    }else{
                        alert("")
                    }  
                }            
    });   
});
*/
//-------AJAX Edit Delete -------//


//});
  
</script>
<?php require_once 'include/footer.php'; ?>