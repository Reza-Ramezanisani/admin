$(document).ready(function () {
   $('.del').click(function (event) {
      let a=$(this).parent();
      event.preventDefault();
      let form = new FormData(a[0]);
      $.ajax({
         type:"POST",
         url:"PHP/del_menu_list.php",
         data:form,
         cashe:false,
         contentType:false,
         processData:false,
         success:function (data) {
            $(".alert").slideDown(400).append("<div></div>").css({
               'top':0,
               'width':'50%',
               'margin':'0 auto',
               'position':'fixed'
            }).html(data).slideUp(4000);
         },
         error:function (data) {
            $(".alert").before("<div></div>").html(data);
         },
         complete:function () {
               
            $.ajax({
                type: 'POST',
                url: './PHP/table_menu.php',
                success: function(response) {
                    setTimeout(function() {
                        $('#tbl')
                        .html(response);
                    }, 100);
                },
               
            });
         }


      });
     
      
   });
   
});
// setInterval(()=>{
//     let xhr=new XMLHttpRequest();
//     xhr.open("GET","./PHP/table_menu.php");
//     xhr.send();
//     let elem=document.getElementById("tbl");
//     xhr.onload=function () {
//         if(xhr.status===200 && xhr.readyState===4){
//             elem.innerHTML=xhr.response;
//         }else{
//             elem.innerHTML=xhr.status;
//         }
//     }
// },6000);