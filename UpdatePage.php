<?php
include('../system/config.php');
$id = $_POST['id'];
$tieude = $_POST['tieude'];
$mota = $_POST['mota'];
$dangnhap = $_POST['dangnhap'];
$image = $_POST['image'];
$thongbao = $_POST['thongbao'];
$url = $_POST['url'];
$idfb = $_POST['idfb'];
$query = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM Website WHERE slug = '".$_SESSION['token']."'"));


if($dangnhap == '1'){
    
    $fb = 'on';
    $gg = 'off';
    $gr = 'off';
    
} else if($dangnhap == '2'){
    
    $fb = 'off';
    $gg = 'off';
    $gr = 'on';
    
} else if($dangnhap == '3'){
    
    $fb = 'on';
    $gg = 'off';
    $gr = 'on';
    
}  else if($dangnhap == '4'){
    
    $fb = 'off';
    $gg = 'on';
    $gr = 'on';
    
} 


if($id == "" || $id != $query['slug']){
    echo 'ID Page Không Hợp Lệ!';
} else if($tieude == "" || $mota == "" || $dangnhap == "" || $image == ""){
    echo 'Vui Lòng Nhập Đầy Đủ Thông Tin!';
} else {
    $true = mysqli_query($connect, "UPDATE Website SET tieude = '$tieude', mota = '$mota', fb = '$fb', gg = '$gg', gr = '$gr', avatarweb = '$image' WHERE slug = '$id'");
    if($true) echo 'ok'; else echo 'Không Thể Lưu';
}
?>