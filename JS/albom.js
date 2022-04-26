function image(){
    let imgs=document.querySelectorAll(".slide_header > div");
    let rand=Math.floor(Math.random()*4);
    let img_rand=imgs[rand];
    imgs.forEach((img)=>{
        img.style.display="none";
    });
    img_rand.style.display="block";
    console.log(imgs,rand,img_rand);

}
setInterval(image,2000);
image();

