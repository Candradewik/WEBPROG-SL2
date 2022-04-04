<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body{
            background-color: #c2f0f7;
            font-family: Arial;
        }
        .button-container{
            margin-left: 45%;
            margin-right: 25%;
            display: flex;
            justify-content: space-evenly;
        }
        #button-kembali{
            background-color: #fdd7ac; 
            /* border: none; */
            height: 25px;
            width: 120px;
            border-radius: 3px;
        }
        #button-kembali:hover{
            background-color: #cccccc; 
            /* border: none; */
            height: 25px;
            width: 120px;
            border-radius: 3px;
        }
        #button-register{
            background-color: #adf59f; 
            /* border: none; */
            height: 25px;
            width: 120px;
            border-radius: 3px;
        }
        #button-register:hover{
            background-color: #cccccc; 
            /* border: none; */
            height: 25px;
            width: 120px;
            border-radius: 3px;
        }
        .form-container{
            display: flex;
            justify-content: space-evenly;
        }
        /* input, textarea{
            border: none;
        } */
        td{
            padding: 15px;
        }
    </style>
</head>
<body>
    <center>
        <p style="font-size:25px;">Register</p>
    </center>
    <div class="form-container">
        <form action="prosesRegis.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama Depan</td>
                    <td style="padding-left: 0px;"><input type="text" name="nama-depan" minlength="3" style="border: none;" required/></td>
                    <td style="padding-left: 50px; padding-right: 0px;">Nama Tengah</td>
                    <td><input type="text" name="nama-tengah" minlength="3" style="border: none;" required/></td>
                    <td style="padding-left: 50px;">Nama Belakang</td>
                    <td style="padding-left: 0px;"><input type="text" name="nama-belakang" minlength="3" style="border: none;" required/></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td style="padding-left: 0px;"><input type="text" name="tempat-lahir" style="border: none;" required/></td>
                    <td style="padding-left: 50px;">Tgl Lahir</td>
                    <td><input type="date" name="tgl-lahir" placeholder="dd/mm/yyyy" style="border: none;" required/></td>
                    <td style="padding-left: 50px;">NIK</td>
                    <td style="padding-left: 0px;"><input type="text" name="nik" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" style="border: none;" required/></td>
                </tr>
                <tr>
                    <td>Warga Negara</td>
                    <td style="padding-left: 0px;"><input type="text" name="warga-negara" style="border: none;" required/></td>
                    <td style="padding-left: 50px;">Email</td>
                    <td><input type="email" name="email" style="border: none;" required/></td>
                    <td style="padding-left: 50px;">No HP</td>
                    <td style="padding-left: 0px;"><input type="tel" minlength="10" maxlength="12" name="no-hp" style="border: none;" required/></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td style="padding-left: 0px;"><textarea cols="20" rows="3" name="alamat" style="border: none;" required></textarea></td>
                    <td style="padding-left: 50px;">Kode Pos</td>
                    <td><input type="text" name="kode-pos" pattern="[0-9][0-9][0-9][0-9]" style="border: none;" required/></td>
                    <td style="padding-left: 50px;">Foto Profil</td>
                    <td style="padding-left: 0px;"><input type="file" accept="image/*" name="foto" style="border: none;" required/></td>
                    <!-- <input type="file" accept="image/*" name="foto-profil" /> -->
                </tr>
                <tr>
                    <td>Username</td>
                    <td style="padding-left: 0px;"><input type="text" name="username" style="border: none;" required/></td>
                    <td style="padding-left: 50px;">Password 1</td>
                    <td><input type="password" name="password1" style="border: none;" required/></td>
                    <td style="padding-left: 50px;">Password 2</td>
                    <td style="padding-left: 0px;"><input type="password" name="password2" style="border: none;" required/></td>
                </tr>
                <tr>
                    <!-- <td><a href="welcome.php" class="button-kembali" id="button-kembali">Kembali</a></td> -->
                    <div class="button-container">
                        <!-- <td><a href="welcome.php" class="button-kembali" id="button-kembali">Kembali</a></td> -->
                        <td><input type="submit" name="button-register" id="button-register" value="Register"/></td>
                    </div>
                </tr>
            </table>
        </form>
    </div>
    <table>
        <tr>
            <div class="button-container">
                <td></td><td></td>
                <td><a href="welcome.php"><button id="button-kembali">Kembali</button></a></td>
            </div>
        </tr>
    </table>
</body>
</html>