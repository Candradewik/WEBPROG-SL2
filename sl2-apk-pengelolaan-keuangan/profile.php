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
            padding-top: 5rem;
            padding-bottom: 3rem;
            background-color: #cad1ff;
        }
        table{
            display: flex;
            justify-content: space-evenly;
        }
        td{
            padding: 15px;
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
                <a href="./home.php" style="color: black; text-decoration: none;">Home</a>
            </div>
            <div class="nav-item">
                <a href="./profile.php" style="color: black;">Profile</a>
            </div>
            <div class="nav-item">
                <a href="./logout.php" style="color: black; text-decoration: none;">Logout</a>
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="welcoming">
            <center><b style="font-size: 20px;">Profil Pribadi</b></center><br><br>
            <?php
                session_start();
                include("config.php");
                // fetch all data
                $id = $_SESSION['usernameLogin'];
                $str_query = "select*from user where username = '".$id."'";
                $query = mysqli_query($connection, $str_query);
                $row = mysqli_fetch_array($query);
                // store data
                $nama_depan = $row['nama_depan'];
                $nama_tengah = $row['nama_tengah'];
                $nama_belakang = $row['nama_belakang'];
                $tempat_lahir = $row['tempat_lahir'];
                $tgl_lahir = $row['tgl_lahir'];
                $nik = $row['nik'];
                $warga_negara = $row['warga_negara'];
                $email = $row['email'];
                $no_hp = $row['no_hp'];
                $alamat = $row['alamat'];
                $kode_pos = $row['kode_pos'];
            ?>
            <table>
                <tr>
                    <td>Nama Depan</td>
                    <td style="padding-left: 0px;"><?php echo "<b>$nama_depan</b>";?></td>
                    <td style="padding-left: 50px; padding-right: 0px;">Nama Tengah</td>
                    <td><?php echo "<b>$nama_tengah</b>";?></td>
                    <td style="padding-left: 50px;">Nama Belakang</td>
                    <td style="padding-left: 0px;"><?php echo "<b>$nama_belakang</b>";?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td style="padding-left: 0px;"><?php echo "<b>$tempat_lahir</b>";?></td>
                    <td style="padding-left: 50px;">Tgl Lahir</td>
                    <td><?php echo "<b>$tgl_lahir</b>";?></td>
                    <td style="padding-left: 50px;">NIK</td>
                    <td style="padding-left: 0px;"><?php echo "<b>$nik</b>";?></td>
                </tr>
                <tr>
                    <td>Warga Negara</td>
                    <td style="padding-left: 0px;"><?php echo "<b>$warga_negara</b>";?></td>
                    <td style="padding-left: 50px;">Email</td>
                    <td><?php echo "<b>$email</b>";?></td>
                    <td style="padding-left: 50px;">No HP</td>
                    <td style="padding-left: 0px;"><?php echo "<b>$no_hp</b>";?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td style="padding-left: 0px;"><?php echo "<b>$alamat</b>";?></td>
                    <td style="padding-left: 50px;">Kode Pos</td>
                    <td><?php echo "<b>$kode_pos</b>";?></td>
                </tr>
                <tr>
                    <td>
                        <?php
                            echo "<a href='editProfile.php'><h4>Edit Profile</h4></a>";
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
