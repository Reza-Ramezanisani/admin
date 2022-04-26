<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#sub").click(function(e){
                e.preventDefault();
                alert("hi");
              
                $.ajax({
                type:"GET",
                timeout:100,
                url:"PHP/table_admin.php",
                success:function(data){
                    (".tbl").append(data);
                }

            });
            })
    });
    </script>
</head>
<body>
    <h2>تمرین در اینجا انجام می شود</h2>
    <button id="sub">click</button>
    <div class="tbl"></div>
    
</body>
</html>
    
   


    
