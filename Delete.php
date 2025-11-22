<?php
include('../system/config.php');
$id = $_POST['id'];
mysqli_query($connect, "DELETE FROM `Website` WHERE id = '$id'");
echo 'ok';
?>