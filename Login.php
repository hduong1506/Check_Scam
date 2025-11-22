<?php
include('../system/config.php');
$username = $_POST['username'];
$password = $_POST['password'];
if(empty($username)){
    echo error('Vui Lòng Nhập Tên Đăng Nhập');
} else if(empty($password)){
    error('Vui Lòng Nhập Mật Khẩu!');
} else {
$query = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM Website WHERE taikhoan = '$username' AND matkhau = '$password'"));
$scanweb = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM Website WHERE taikhoan = '$username' AND matkhau = '$password'"));
$token = $scanweb['slug'];

if($query >= 1){
    echo 'true';
    $_SESSION['token'] = $token;
} else {
    echo 'false';
}
}
?>