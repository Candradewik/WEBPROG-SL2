<!-- <?php
    include("config.php");
    $str_query = "select*from user";
    $query = mysqli_query($connection, $str_query);
    $fetch = mysqli_fetch_array($query);
    print_r($fetch);
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body{
            background-color: #e5edeb;
            font-family: Arial;
        }
        .button-container{
            margin-left: 30%;
            margin-right: 30%;
            display: flex;
            justify-content: space-evenly;
        }
        #button-login{
            background-color: #99d6ed; 
            border: none;
            height: 50px;
            width: 120px;
            font-size: 20px;
        }
        #button-login:hover{
            background-color: #cccccc; 
            border: none;
            height: 50px;
            width: 120px;
            font-size:20px;
        }
        #button-register{
            background-color: #adf59f; 
            border: none;
            height: 50px;
            width: 120px;
            font-size: 20px;
        }
        #button-register:hover{
            background-color: #cccccc; 
            border: none;
            height: 50px;
            width: 120px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <center>
        <p>Aplikasi Pengelolaan Keuangan</p>
        <p style="font-size:30px;">Selamat Datang di Aplikasi Pengelola Keuangan</p>
        <div class="button-container">
            <a href="login.php"><button id="button-login">Login</button></a>
            <a href="register.php"><button id="button-register">Register</button></a>
        </div>
    </center>
</body>
</html>