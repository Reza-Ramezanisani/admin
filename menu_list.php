<?php  session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://localhost/order/admin/JS/aJAX_menu.js"></script>
    
    <?php include  "link.php"?>
    <style>
        table td,th{
            border-radius: 0;
        }
        th{
            text-align: center;
        }
        td{
            text-align: left;
        }
        tr{
            overflow:auto;
            height:20px;
        }
        @media screen and (max-width:600px){
            .main{
                max-width: 100%;
                margin-left:0;
                margin-right:0
            }
            .main h2{
                font-size: 20px;
            }
          
            .side div.side_content.act{
                width: 130px;
            }
            #tbl .table-responsive-md .table{
                width: 100%;
            }
        

        }
        
    </style>
</head>
<?php if(isset($_SESSION['id'])){?>
<body onload="load()">
        <div class="preloader">
            <div class="spinner"></div>
        
        </div>
        <?php include "nav.php";?>
        <?php include "nav-top.php";?>
         <?php include 'profile.php';?>

        <br>
        <div class="main  row"  >
            <div class="path">
                    <div class="container" style="position: relative;">
                        <h4 style="font-weight: 10;">Product List</h4>
                        <h5>Search table</h5>
                        <div class="input_table" style="margin-bottom: 10px;width: 50%;">
                            <input type="text" dir="rtl" placeholder="???????? ???????? ????????" onkeyup="search_table(this)"/>
                            <span class="span_search_table"></span>
                        </div>
                        <div style="display: none;" class="alert alert-success ">
                        </div>
                        <div id='tbl'>
                            
                        <?php include './PHP/table_menu.php';  ?>
                        </div>
                    </div>
                </div>
        </div>
       




       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <?php include  "linkJS.php"?>
    <script>
        function search_table(x) {
    let val_input  =  x.value.toUpperCase().trim();
    let trs = document.querySelectorAll("#tbl .table tbody tr");
    for (let i = 0; i < trs.length; i++) {
        let tds= trs[i].getElementsByTagName("td");
        let ind = 0;
        for (let o = 0; o < tds.length; o++) {
           let td= tds[o].innerText.toUpperCase();
           
            if(td.indexOf(val_input) === -1){
                ind++;
            }
            // ?????? ??????  7 ?????????? ?????????????? ???????? ??????
            if(ind===9){
                trs[i].style.display="none";
            }else{
                trs[i].style.display="";
            }
            
            
        }
        
    }
}
    </script>

</body>
<?php  
        }else{
            header("Location:login.php");
        }
?>
</html>