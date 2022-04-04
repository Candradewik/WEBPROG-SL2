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
        #button-save{
            background-color: #adf59f; 
            /* border: none; */
            height: 25px;
            width: 120px;
            border-radius: 3px;
        }
        #button-save:hover{
            background-color: #cccccc; 
            /* border: none; */
            height: 25px;
            width: 120px;
            border-radius: 3px;
        }
    </style>
</head>
<body>
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
        <center><b style="font-size: 20px;">Edit Profil Pribadi</b></center><br><br>
            <form action="prosesEdit.php" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>Nama Depan</td>
                        <td style="padding-left: 0px;"><input type="text" name="nama-depan" value="<?php echo $nama_depan;?>" style="border: none;"/></td>
                        <td style="padding-left: 50px; padding-right: 0px;">Nama Tengah</td>
                        <td><input type="text" name="nama-tengah" value="<?php echo $nama_tengah;?>" style="border: none;"/></td>
                        <td style="padding-left: 50px;">Nama Belakang</td>
                        <td style="padding-left: 0px;"><input type="text" name="nama-belakang" value="<?php echo $nama_belakang;?>" style="border: none;" /></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td style="padding-left: 0px;"><input type="text" name="tempat-lahir" value="<?php echo $tempat_lahir;?>" style="border: none;" /></td>
                        <td style="padding-left: 50px;">Tgl Lahir</td>
                        <td><input type="date" name="tgl-lahir" value="<?php echo $tgl_lahir;?>" style="border: none;" \/></td>
                        <td style="padding-left: 50px;">NIK</td>
                        <td style="padding-left: 0px;"><input type="text" name="nik" value="<?php echo $nik;?>" style="border: none;" /></td>
                    </tr>
                    <tr>
                        <td>Warga Negara</td>
                        <td style="padding-left: 0px;"><input type="text" name="warga-negara" value="<?php echo $warga_negara;?>" style="border: none;" /></td>
                        <td style="padding-left: 50px;">Email</td>
                        <td><input type="email" name="email" value="<?php echo $email;?>" style="border: none;" /></td>
                        <td style="padding-left: 50px;">No HP</td>
                        <td style="padding-left: 0px;"><input type="tel" minlength="10" maxlength="12" name="no-hp" value="<?php echo $no_hp;?>" style="border: none;" /></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td style="padding-left: 0px;"><textarea cols="20" rows="3" name="alamat" style="border: none;" ><?php echo $alamat;?></textarea></td>
                        <td style="padding-left: 50px;">Kode Pos</td>
                        <td><input type="text" name="kode-pos" value="<?php echo $kode_pos;?>" style="border: none;" /></td>
                    </tr>
                    <tr>
                        <!-- <td><a href="welcome.php" class="button-kembali" id="button-kembali">Kembali</a></td> -->
                        <div class="button-container">
                            <!-- <td><a href="welcome.php" class="button-kembali" id="button-kembali">Kembali</a></td> -->
                            <td><input type="submit" name="button-save" id="button-save" value="Simpan"/></td>
                        </div>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>
