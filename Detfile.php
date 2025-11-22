<?php
include('../system/config.php');

$id = $_POST['id'];
$skeyperquery = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM Website WHERE slug = '$id'"));
if($id == $skeyperquery['slug']){
    $inTrue = $connect->query("DELETE FROM `Website` WHERE ip = '$ip' AND slug = '$id'");
    echo success('Xóa Thành Công');
    echo load('');
} else {
    echo warning('Xóa Thất Bại');
}
?>