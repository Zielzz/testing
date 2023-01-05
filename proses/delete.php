<?php

include('../config/connection.php');

$id = $_GET['id'];

$delete = mysqli_query($connect, "DELETE FROM sign_in WHERE id='$id'");

if ($delete)
    header('Location: list.php');
else
    echo 'Delete data gagal';
    