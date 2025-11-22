<?php
include('../system/config.php');
$token = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM Website WHERE slug = '".$_SESSION['token']."' AND status = '1'"));
if(!isset($_SESSION['token'])){
    echo load('/login');
} else if($token['slug'] != $_SESSION['token']){
    echo load('/login');
}
?>