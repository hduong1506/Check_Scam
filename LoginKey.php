<?php
include('../system/config.php');

$key = $_POST['key'];
$query = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM `KeyList` WHERE `keycc` = '$key'"));

if(empty($key)){
    echo error('Vui Lòng Nhập Key');
} else if($query['keycc'] == $key){
    echo success('Đăng Nhập Key Thành Công, Ngày Key Hết Hạn Là '. date('d/m/Y - h:i:s',$query['time']));
    $_SESSION['key'] = $key;
    load('/');
} else {
    echo error('Key Không Đúng Hoặc Đã Hết Hạn');
}
?>