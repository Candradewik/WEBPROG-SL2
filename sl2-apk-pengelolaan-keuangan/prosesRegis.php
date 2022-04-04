<?php
        include("config.php");
        if(isset($_POST['button-register'])){
            $temp_username = $_POST['username'];
            $str_query = "select*from user";
            $query = mysqli_query($connection, $str_query);
            $flag = 0;
            while($data = mysqli_fetch_array($query)){
                if($data['username'] == $temp_username){
                    echo 
                        "<script> 
                        alert('Username $temp_username sudah digunakan, silahkan coba yang lain!');
                        </script>";
                    }
                    $flag = 1;
                }
            }
            if($flag == 1){
                $imagename = $_FILES['foto']['name'];
                $tmp_name = $_FILES['foto']['tmp_name'];
                $directory = "image/";
                $upload = move_uploaded_file($tmp_name, $directory.$imagename);
                
                $str_query = "insert into user values(
                    '".$_POST['nama-depan']."',
                    '".$_POST['nama-tengah']."',
                    '".$_POST['nama-belakang']."',
                    '".$_POST['tempat-lahir']."',
                    '".$_POST['tgl-lahir']."',
                    '".$_POST['nik']."',
                    '".$_POST['warga-negara']."',
                    '".$_POST['email']."',
                    '".$_POST['no-hp']."',
                    '".$_POST['alamat']."',
                    '".$_POST['kode-pos']."',
                    '".$_POST['username']."',
                    '".$_POST['password1']."'
                )";
        
                $query = mysqli_query($connection, $str_query);
        
                if($query){
                    echo 
                        "<script> 
                        alert('Register Berhasil');
                        </script>";
                        header('Location: /sl2-apk-pengelolaan-keuangan/welcome.php');
                } else{
                    echo 
                        "<script> 
                        alert('Register Gagal');
                        </script>";
                        header('Location: /sl2-apk-pengelolaan-keuangan/welcome.php');
                }
            }

        // // session_start(); 
        // //isset = untuk mengecek apakah ada data yang dikirim atau tidak, balikinnya true atau false
        // if(isset($_POST['button-register'])){
        //     // echo "true";
        //     $nama_depan = $_POST['nama-depan'];
        //     $nama_tengah = $_POST['nama-tengah'];
        //     $nama_belakang = $_POST['nama-belakang'];
        //     $tempat_lahir = $_POST['tempat-lahir'];
        //     $tgl_lahir = $_POST['tgl-lahir'];
        //     $nik = $_POST['nik'];
        //     $warga_negara = $_POST['warga-negara'];
        //     $email = $_POST['email'];
        //     $no_hp = $_POST['no-hp'];
        //     $alamat = $_POST['alamat'];
        //     $kode_pos = $_POST['kode-pos'];
        //     $username = $_POST['username'];
        //     $password1 = $_POST['password1'];
        //     $password2 = $_POST['password2'];

        //     //foto profil
        //     $imagename = $_FILES['foto']['name'];
        //     $tmp_name = $_FILES['foto']['tmp_name'];
        //     $directory = "image/";
            

        //     //memindahkan file dari tmp->terupload
        //     $upload = move_uploaded_file($tmp_name, $directory.$imagename);
        //     $_SESSION["foto"] = "image/".$imagename;
        //     //echo '<img src= "'.$dirUpload.$namaFile.'">';
            

        //     $_SESSION["nama_depanRegis"] = $nama_depan;
        //     $_SESSION["nama_tengahRegis"] = $nama_tengah;
        //     $_SESSION["nama_belakangRegis"] = $nama_belakang;
        //     $_SESSION["tempat_lahirRegis"] = $tempat_lahir;
        //     $_SESSION["tgl_lahirRegis"] = $tgl_lahir;
        //     $_SESSION["nikRegis"] = $nik;
        //     $_SESSION["warga_negaraRegis"] = $warga_negara;
        //     $_SESSION["emailRegis"] = $email;
        //     $_SESSION["no_hpRegis"] = $no_hp;
        //     $_SESSION["alamatRegis"] = $alamat;
        //     $_SESSION["kode_posRegis"] = $kode_pos;
        //     $_SESSION["usernameRegis"] = $username;
        //     $_SESSION["passwordRegis"] = $password1;

        //     // echo "<br>";
        //     // echo $_SESSION["usernameRegis"]." - ".$_SESSION["passwordRegis"];
        //     header('Location: /sl1-apk-pengelolaan-keuangan/welcome.php');
        // }
    ?>