<?php

include('../config/connection.php');

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$email = $_POST['email'];

$rand = rand();
$ekstensi =  array('PNG','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);


if ($insert)
    header('Location: list.php');
else
    echo 'Input data gagal';   

    if(!in_array($ext,$ekstensi) ) {
       
    }else{
        if($ukuran < 1044070){		
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], '../images/'.$rand.'_'.$filename);
            mysqli_query($connect, "INSERT INTO sign_in SET nama='$nama', alamat='$alamat', umur='$umur', jenis_kelamin='$jenis_kelamin', email='$email', foto='$xx'");
            header("Location:list.php?alert=berhasil");
        }else{
            header("Location:list.php?alert=gagal_ukuran");
        }
    }
    ?>