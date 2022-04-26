// $(document).ready(function () {
//     $("#sub").click(function (e) {
//         e.preventDefault();
//         let form=new FormData($('#form')[0]);
//         $.ajax({
//             type:'POST',
//             url:"PHP/loginServer.php",
//             data:form,
//             processData:false,
//             contentType:false,
//             success:function(data){
//                 $(".k").html(data);
//             },
//             error:function (data) {
//                 $(".k").html(data);
//             },
           
//         });
//     });
// });