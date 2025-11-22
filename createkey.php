<?php
include('../system/config.php');

function randStrings($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $charLength = strlen($characters);
    $randomString = '';
    
    for ($i = 0; $i < $length; $i++) {
        $randomChar = $characters[rand(0, $charLength - 1)];
        $randomString .= $randomChar;
    }
    
    return $randomString;
}

$randomkey = randStrings(10);

if(isset($_GET['day']) && isset($_GET['gioihan']) && isset($_GET['baomat'])){
    if($_GET['baomat'] == 'cyberlux'){
        $timehethan = time()+(86400 * $_GET['day']);
        $inTrue = $connect->query("INSERT INTO `KeyList`(`id`, `keycc`, `handung`, `gioihan`, `dadung`, `time`) VALUES (NULL,'$randomkey','".$_GET['day']."','".$_GET['gioihan']."', '0', '$timehethan')");
        if($inTrue){
            echo json_encode(array('status' => 'success', 'message' => $randomkey));
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Tạo Lỗi, Vui Lòng Liên Hệ Admin'));
        }
       
    }   
}
?>

