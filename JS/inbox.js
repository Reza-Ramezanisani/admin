setInterval(() => {
    let inbox = document.getElementsByClassName('inbox').item(0);
    Chat().then(success=> inbox.innerHTML=success).catch(err=>inbox.innerHTML=err);
}, 1000);
function Chat() {
    return new Promise(function (res,rej) {
        let xhr = new XMLHttpRequest();
        xhr.open("GET",'inbox_msg.php');
        xhr.onload = function () {
            if(xhr.status ===200 && xhr.readyState ===4){
                res(xhr.response);
            }else{
                rej(xhr.statusText);

            }
        }
        xhr.send();
    });
}