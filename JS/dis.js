$(document).ready(function () {
    $("#b").click(function() {
        let check = this.checked;
      if(check===true){
          $("#DISCOUNT").fadeIn(1000);
      }else{
        $("#DISCOUNT").fadeOut(1000);

      }
    })
});