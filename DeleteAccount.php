<?php
include('../system/config.php');
$id = $_POST['id'];
mysqli_query($connect, "DELETE FROM `Accounts` WHERE id = '$id'");
echo 'ok';
?>