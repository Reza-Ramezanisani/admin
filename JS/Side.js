$(document).ready(function () {
    
    $("#menu_side").click(function (e) {
        e.preventDefault();
        $("#menus").slideToggle(200);
    });
    $(window).click(function (e) {
       console.log($(".popup").attr("class"));
       console.log(e.target.className);
       if(e.target.className!=="fas fa-align-right"){
        if(e.target.className!=="modal_tiny_popup"){
            if($(".popup").attr("class")==="popup act"){
    
               $(".popup").removeClass("act");
              
            }

        }
            
        

        
       }
      
      
    })
   
    
    
    
});
