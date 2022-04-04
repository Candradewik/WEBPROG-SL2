<?php
    session_start();
    include("config.php");

    if(isset($_POST['button-save'])){
        $imagename = $_FILES['foto']['name'];
        $tmp_name = $_FILES['foto']['tmp_name'];
        $directory = "image/";
        $upload = move_uploaded_file($tmp_name, $directory.$imagename);

        $str_query = "update user set 
            nama_depan='".$_POST['nama-depan']."', 
            nama_tengah='".$_POST['nama-tengah']."', 
            nama_belakang='".$_POST['nama-belakang']."', 
            tempat_lahir='".$_POST['tempat-lahir']."', 
            tgl_lahir='".$_POST['tgl-lahir']."', 
            nik='".$_POST['nik']."',
            warga_negara='".$_POST['warga-negara']."',
            email='".$_POST['email']."',
            no_hp='".$_POST['no-hp']."', 
            alamat='".$_POST['alamat']."', 
            kode_pos='".$_POST['kode-pos']."'
            where username='".$_SESSION['usernameLogin']."'";
        $query = mysqli_query($connection, $str_query);

        if($query){
            echo 
                "<script> 
                alert('Data Berhasil Terupdate!');
                </script>";
                header('Location: /sl2-apk-pengelolaan-keuangan/profile.php');
        } else{
            echo 
                "<script> 
                alert('Data Gagal Terupdate!');
                </script>";
                header('Location: /sl2-apk-pengelolaan-keuangan/editProfile.php');
        }
    }

?>