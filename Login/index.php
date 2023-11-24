<?php

include("dbconnection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div id="form">
        <h1>Login Form</h1>
        <form name="form" action="login.php" onsubmit="return isvalid()" method="POST"> 
            <label>USERNAME:</label>
            <input type="text" id="user" name="user">
                <br></br>
            <label>PASSWORD:</label>
            <input type="password" id="password" name="password">
                <br></br>
            <input type="submit" id="btn" value="login" name="submit" >
        </form>
    </div>
    
    <script>
        function isvalid(){
            var user = document.form.user.value;
            var password = document.form.password.value;

            if(user.length=="" && password.length==""){
                alert("username and password feilds are empty");
                return false
            }

            else{
                if(user.length==""){
                alert("username feild is empty");
                return false
                }

                if(password.length==""){
                alert("password feild is empty");
                return false
                }
            }
        }
    </script>

</body>
</html>