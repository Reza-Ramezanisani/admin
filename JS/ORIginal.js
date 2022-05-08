(function(){
  var links_side=document.querySelectorAll(".side_btn i");
  // var sider=document.getElementsByClassName("side")[0];
  // side bar
  var nav=document.getElementsByClassName("side_content")[0];
  links_side.forEach((i)=>{
      i.addEventListener("click",side);
  });
  function side() {
      nav.classList.toggle("act");
      document.body.classList.toggle("act");
  }
})()


// text effect

const close=document.getElementById("c");
const modal=document.getElementById("m");
function Open_modal() {
    modal.style.display="block";
    console.log(modal.style.display,close);
}
function Close_modal() {
  
    modal.style.display="none";
    
}
window.onclick=(evnet)=>{
    if(evnet.target===modal){
        modal.style.display="none";
    }
}
//preloader
function load() {
    let preloader=document.getElementsByClassName("preloader")[0];
    preloader.classList.add("loaded");
}
// slide_bar
var popup=document.getElementsByClassName("popup")[0];
var popup_1=document.getElementsByClassName("modal_tiny_popup")[0];
// window.onclick=(event)=>{
//   if(!event.target.matches("popup")){
//     console.log("ter");
//     if(popup.classList.contains("act")){
//       popup.classList.remove("act");
//       console.log("good");
//     }
//   }
  
// }
function slide_bar() {
  popup.classList.toggle("act");
  
}

function open_user() {
  popup_1.classList.toggle("act");
  console.log("yes");
  
}

// preview image berfore upload
function preview(x){
    if(x.files.length>0){
      let img=document.getElementById("photo");
      let src=URL.createObjectURL(x.files[0]);
      img.src=src;
      img.style.display="block";
    }
    
    
}
// range price
function rang(x){
    let demo =document.getElementById("demo_range");
    demo.innerHTML="قیمت : هزار تومن  "+x.value * 4;
}




