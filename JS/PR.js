function load() {
    
        let i=1;
        if(i===1){
            i=0;
            let [html,css,sass,php,mysql,ajax,res,npm,jqery,js]=document.getElementsByClassName("b");
            let [whtml,wcss,wsass,wphp,wmysql,wajax,wres,wnpm,wjqery,wjs]=[1,1,1,1,1,1,1,1,1,1];
           let idHtml= setInterval(() => {
            if(whtml===90){
                clearInterval(idHtml);
                i=1;
            }else{
                whtml++;
                html.style.width=whtml+"%";
            }
        }, 10);
           let idJs= setInterval(() => {
            if(wjs===80){
                clearInterval(idJs);
                i=1;
            }else{
                wjs++;
                js.style.width=wjs+"%";
            }
        }, 10);
           let idPhp= setInterval(() => {
            if(wphp===20){
                clearInterval(idPhp);
                i=1;
            }else{
                wphp++;
                php.style.width=wphp+"%";
            }
        }, 10);
           let idcss= setInterval(() => {
            if(wcss===90){
                clearInterval(idcss);
                i=1;
            }else{
                wcss++;
                css.style.width=wcss+"%";
            }
        }, 10);
           let idsass= setInterval(() => {
            if(wsass===90){
                clearInterval(idsass);
                i=1;
            }else{
                wsass++;
                sass.style.width=wsass+"%";
            }
        }, 10);
           let idajax= setInterval(() => {
            if(wcss===90){
                clearInterval(idajax);
                i=1;
            }else{
                wajax++;
                ajax.style.width=wajax+"%";
            }
        }, 10);
           
           let idmy= setInterval(() => {
            if(wmysql===90){
                clearInterval(idmy);
                i=1;
            }else{
                wmysql++;
                mysql.style.width=wmysql+"%";
            }
        }, 10);
           let idres= setInterval(() => {
            if(wres===90){
                clearInterval(idres);
                i=1;
            }else{
                wres++;
                res.style.width=wres+"%";
            }
        }, 10);
           let idnpm= setInterval(() => {
            if(wnpm===90){
                clearInterval(idnpm);
                i=1;
            }else{
                wnpm++;
                npm.style.width=wnpm+"%";
            }
        }, 10);
           let idjqery= setInterval(() => {
            if(wjqery===90){
                clearInterval(idjqery);
                i=1;
            }else{
                wjqery++;
                jqery.style.width=wjqery+"%";
            }
        }, 10);
    }

    }
   

