<html>
<head>
    <title>LOGIN</title>

    <style>
        .form{
                       
            margin-top: 10%;
            margin-left:40%;
            padding: 20px;
            width: 20%;
            height: 30%;
            border: 3px solid red;
            background-color: yellow;
        }

    </style>

    <script>
        
        fetch("deneme.json").then(
            response=>{
                return response.json()
            }
        ).then(
            responseJson=>{
                console.log(responseJson);
                document.getElementById("name").value=responseJson.username;
                if(document.getElementById("name").value==null){
                     alert(document.getElementById("name").value);
                 } 
            }
        )
        

      
    </script>

</head>
<body>
    <div class="form"> 
        <div>
        <label>AD:</label>
        <input type="text" id="name" name="name"><br><br> 
        </div>
         
    
    <div>
</body>
</html>

