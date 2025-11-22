<?php
include('../system/config.php');
$id = $_POST['id'];
$skeyperquery = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM Website WHERE slug = '$id'"));
if($id == $skeyperquery['slug']){
    $_SESSION['token'] = $id;
    echo success('Kiểm Tra Thành Công!');
    echo load('/admin');
} else {
echo error('Kiểm Tra Thất Bại!');
unset($_SESSION['token']);
}
?>