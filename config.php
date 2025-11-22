<?php
session_start();

$database = 'topcd1l0onh_free2';
$userbase = 'topcd1l0onh_free2';
$passbase = 'topcd1l0onh_free2';
$connect = mysqli_connect('localhost', $database, $userbase, $passbase) or die('Hệ Thống Bảo Trì!');
mysqli_query($connect,"SET NAMES 'UTF8'");

# Một Số Biến Cần Thiết
$setting = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM Setting WHERE id = '1'"));
$time = time();
$configdomain = 'anhlanhabaobaochabaome.online';
$ip = $_SERVER['REMOTE_ADDR'];
$key = $_SESSION['key'];

if(isset($_SESSION['key'])){
    $getKey = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM KeyList WHERE keycc = '$key'"));
    
    if($key != $getKey['keycc']){
        unset($_SESSION['key']);
        die('Key hết hạn');
    }
}

# Một Số Function Nhanh

function random($dodai){
$chuoi_ban_dau = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$do_dai_chuoi = $dodai;
$chuoi_ngau_nhien = substr(str_shuffle($chuoi_ban_dau), 0, $do_dai_chuoi);
return $chuoi_ngau_nhien;
}

function generateShortMD5($nKey) {
    $md5 = md5($nKey);
    $shortMD5 = substr($md5, 0, 5); 
    return $shortMD5;
}


function nameKey($key){
    if(!isset($_SESSION['key'])){
        return 'Không Xác ĐỊnh';
    } else {
        return 'Users'.generateShortMD5($key);
    }
}

function load($url){
    echo '<script>location.href="'.$url.'";</script>';
}

function fakeurl($url){
    echo 'window.history.pushState(null, null, '.$url.')';
}

function error($text){
    echo '<script>toastr.error("'.$text.'", "Thông Báo");</script>';
}

function success($text){
    echo '<script>toastr.success("'.$text.'", "Thông Báo");</script>';
}

function warning($text){
    echo '<script>toastr.warning("'.$text.'", "Thông Báo");</script>';
}

function status($i){
    if($i == '1'){
        return '<button class="inline-flex rounded-full ckslm czfwe c1gyt c3kam cd4ca cz4nn c60df c0b60" style="background-color: green; color:white;"> Hoạt Động </button>';
    } if($i == '2'){
        return '<button class="inline-flex rounded-full ckslm czfwe c1gyt c3kam cd4ca cz4nn c60df c0b60" style="background-color: red; color:white;"> Hết Hạn </button>';
    }
}

$checkhsd = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM Website WHERE status = '1'"));
if($checkhsd['time'] + (2592000) < $time){
    mysqli_query($connect, "UPDATE Website SET status = '2' WHERE id = '".$checkhsd['id']."'");
}

mysqli_query($connect, "DELETE FROM `KeyList` WHERE time < '$time'");

?>