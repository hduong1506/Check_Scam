<?php
include('../system/config.php'); 
$domain = $_POST['domainValue'];
$query = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM Website WHERE domain = '$domain' AND status = '1'"));
if($query >= 1){
    echo 'Tên miền đã được sử dụng, vui lòng thử 1 tên miền khác';
} else {
    echo $domain;
}
?>