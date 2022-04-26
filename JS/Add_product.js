$(document).ready(function () {
    $("#sub_product").click(function(e) {
        e.preventDefault();
        let form=new FormData($("#form")[0]);
        $.ajax({
            type:"POST",
            url:"PHP/procress_add_products.php",
            data:form,
            processData: false,
            contentType: false,
            cache: false,
            success:function(data){
                $("#alert").fadeIn(1000).fadeTo(100,0.7).html(data).animate({
                    'top':0,
                    'width':'50%',
                    'left':'50%',
                });
                

            },
            error:function(data){
                $("#alert").fadeIn(1000).fadeTo(100,0.7).html(data);
            }
        });
    })
    
})


