<?php
    session_start();
    include("config.php");

    $id = $_SESSION['usernameLogin'];
    $str_query = "select*from user where username = '".$id."'";
    $query = mysqli_query($connection, $str_query);
    $data = mysqli_fetch_array($query);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            box-sizing: border-box;
        }
        body{
            font-family: Arial;
        }
        nav{
            display: flex;
            justify-content: space-between;
            background-color: #fbfdac;
            padding: 1rem;
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
        }
        /* a{
            color: black;
            text-decoration: none;
        } */
        .nav-right{
            display: flex;
        }
        .nav-item{
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }
        .content{
            text-align: center;
            padding-top: 19rem;
            padding-bottom: 19rem;
            background-color: #cad1ff;
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav-left">
           <p>Aplikasi Pengelolaan Keuangan</p>
        </div>
        <div class="nav-right">
            <div class="nav-item">
                <a href="./home.php" style="color: black;">Home</a>
            </div>
            <div class="nav-item">
                <a href="./profile.php" style="color: black; text-decoration: none;">Profile</a>
            </div>
            <div class="nav-item">
                <a href="./logout.php" style="color: black; text-decoration: none;">Logout</a>
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="welcoming">
            <!-- <?php
                session_start();
                $nama_gabung = $_SESSION["nama_depanRegis"]." ".$_SESSION["nama_tengahRegis"]." ".$_SESSION["nama_belakangRegis"];
                echo "Halo"." "."<b>$nama_gabung</b>".", "."Selamat datang di Aplikasi Pengelolaan Keuangan";
            ?> -->
            <p>Halo <b><?php echo $data['nama_depan']." ".$data['nama_tengah']." ".$data['nama_belakang'] ?></b>, Selamat Datang di Aplikasi Pengelolaan Keuangan</p>
            
        </div>
    </div>
</body>
</html>
