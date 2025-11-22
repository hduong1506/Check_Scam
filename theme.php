<?php
include('../system/config.php');
$get = $_GET['id'];
$query = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM FileTheme WHERE id = '$get'"));

echo $query['html'];
?>

