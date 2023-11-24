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
        <form name="form" action="login.php" method="POST"> 
            <label>USERNAME:</label>
            <input type="text" id="user" name="user">
                <br></br>
            <label>PASSWORD:</label>
            <input type="password" id="password" name="password">
                <br></br>
            <input type="submit" id="btn" value="login" name="submit" >
        </form>
    </div>
    
</body>
</html>