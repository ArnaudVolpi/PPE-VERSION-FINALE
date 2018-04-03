
function submitForm2(frm,ev,action){
    var frm2=$("#"+frm.id);
        $.ajax({
            type: frm2.attr('method'),
            url: frm2.attr('action')+"?action="+action,
            data: frm2.serialize(),
            success: function (data) {

                setInterval();
                var reponse=data.split("-");
                if(reponse[0]!="success"){
                
                        $.notify({
                        // options
                        icon: 'fa fa-2x fa-exclamation-triangle',
                        message: reponse[1],
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
                    message: reponse[1],
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
    
        ev.preventDefault();
    }

function setInterval(){

//$('#containerTable').load('form/table.php');
location.reload();
}; 


