$(document).ready(function () {
    $('#del').click(function () {
        let r=$("#form_pro").find('.form-group input');
        console.log(r.length);
        for (let i = 0; i < r.length; i++) {
             r[i].value="";
        }
    });
    $('#form_pro').submit(function(e){
        e.preventDefault();
        let form = new FormData($('#form_pro')[0]);
        $.ajax({
            type:'post',
            url:'PHP/update_pro.php',
            processData:false,
            contentType:false,
            data:form,
            success:function (data) {
                $('.text').html(data);
            },
            error:function (data) {
                $('.text').html(data);
            },
            // complete:function (){
            //    location.reload(true);
            // }

        });
        
    });
    
});