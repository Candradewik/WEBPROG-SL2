<?php
    session_start();
    include("config.php");
    
    if(isset($_POST['button-login'])){
        $str_query = "select*from user";
        $query = mysqli_query($connection, $str_query);

        while($data = mysqli_fetch_array($query)){
            if(($data['username'] == $_POST['usernameLogin']) && ($data['password1'] == $_POST['passwordLogin'])){
                $_SESSION['usernameLogin'] = $data['username'];
                // $_SESSION['nama_depan'] = $data['nama_depan'];
                // $_SESSION['nama_tengah'] = $data['nama_tengah'];
                // $_SESSION['nama_belakang'] = $data['nama_belakang'];
                // $_SESSION['tempat_lahir'] = $data['tempat_lahir'];
                // $_SESSION['tgl_lahir'] = $data['tgl_lahir'];
                // $_SESSION['nik'] = $data['nik'];
                // $_SESSION['warga_negara'] = $data['warga_negara'];
                // $_SESSION['email'] = $data['email'];
                // $_SESSION['no_hp'] = $data['no_hp'];
                // $_SESSION['alamat'] = $data['alamat'];
                // $_SESSION['kode_pos'] = $data['kode_pos'];

                echo "Login Berhasil!";
                header('Location: /sl2-apk-pengelolaan-keuangan/home.php');
            }else if(($data['username'] == $_POST['usernameLogin']) || ($data['password1'] == $_POST['passwordLogin'])){
                echo 
                    "<script>
                        alert ('Username atau password salah!');
                        window.location.replace('login.php');
                    </script>";
            }
        }

        echo 
            "<script>
                alert ('Username belum terdaftar!');
                window.location.replace('login.php');
            </script>";
    }
?>