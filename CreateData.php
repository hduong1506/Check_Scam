<?php
include('../system/config.php');

$tieude = $_POST['tieude'];
$mota = $_POST['mota'];
$template = $_POST['template'];
$dangnhap = $_POST['dangnhap'];
$avatar = $_POST['shortcut'];
$tenmien = $_POST['tenmien'];
$taikhoan = random(7).rand(10000,90000);
$matkhau = random(7).rand(10000,90000);
$slugrandom = random(100);
$keycode = $_POST['keycode'];
$domainQuery = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM Website WHERE domain = '$tenmien' AND status = '1'"));
$codekey = mysqli_query($connect, "SELECT * FROM KeyList WHERE keycc = '$keycode'");
$keylist = $codekey->fetch_assoc();
$ipChecker = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM Website WHERE ip = '".$_SERVER['REMOTE_ADDR']."' AND keycode = '$keycode'"));

$timehethan = time()+(86400 * $keylist['handung']);

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

if($keycode == ""){
    echo error('Vui Lòng Nhập Key Tạo');
} else if($tieude == ""){
    echo error('Vui Lòng Nhập Tiêu Đề!');
} else if($mota == ""){
    echo error('Vui Lòng Nhập Mô Tả!');
} else if($dangnhap == ""){
    echo error('Vui Lòng Chọn Dạng Đăng Nhập!');
} else if($avatar == ""){
    echo error('Vui Lòng Nhập Link Hình Ảnh Mô Tả!');
} else if($tenmien == ""){
    echo error('Vui Lòng Nhập Tên Miền!');
} else if($domainQuery >= 1){
    echo error('Tên Miền Này Đã Được Sử Dụng!');
} else if($keylist['dadung'] == $keylist['gioihan']){
    echo error('Key Đã Hết Lượt Tạo');
} else if($keycode == $keylist['keycc']){
    $inTrue = mysqli_query($connect, "INSERT INTO `Website`(`id`, `slug`, `tieude`, `mota`, `avatarweb`, `domain`, `status`, `time`, `taikhoan`, `matkhau`, `ip`, `keycode`, `templates`, `fb`, `gg`, `gr`) VALUES (NULL, '$slugrandom', '$tieude','$mota','$avatar','$tenmien','1','$timehethan', '$taikhoan','$matkhau', '".$_SERVER['REMOTE_ADDR']."', '$keycode','$template', '$fb', '$gg', '$gr')");
    if($inTrue){
        mysqli_query($connect, "UPDATE KeyList SET dadung = dadung + 1 WHERE keycc = '$keycode'");
        echo success('Tạo Thành Công!');
        $_SESSION['key'] = $keycode;
        echo load('/mypages.html');
    } else {
        echo error('Tạo Thất Bại!');
    }
} else {
    echo error('Key Không Chính Xác, Vui Lòng Mua Tại Cyberlux.vn'. $keylist['keycc']);
}

?>