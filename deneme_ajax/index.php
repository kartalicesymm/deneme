<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-color:grey;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
         $.ajax({
        url : 'deneme.php' ,
        type: 'GET',
        data : 'form_data',
        success: function(response){ 
        console.log(response.deneme);
        },
        error: function(e){ 
        console.log(e);
        }
    });
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="../img/s.png" type="image/x-icon" />
    <title>Document</title>
</head>
<body>
    <form action="" name="form_data">
        <input type="text" name="deneme">
        <input type="submit" value="gonder">
    </form>
    
</body>
</html>
