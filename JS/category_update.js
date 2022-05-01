$(document).ready(function () {
$(".sub_cat_update").click(function (e) {
    e.preventDefault();
    let form = $(this).parent();
   let data= new FormData(form[0]);
    $.ajax({
    type:"POST",
    url:"PHP/category_update.php",
    data:data,
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
    },
    complete:function () {
        $.ajax({
            type:"POST",
            url:"PHP/category_table.php",
            success:function (data) {
                setTimeout(() => {
                    $("#tbl_cat").html(data);
                }, 100);
            }
        });
    }
    });
})
});