<?php
include("config.php");

$selectid = $_POST['selectid']; // 삭제 개수
$getid = $_POST['getid']; // 삭제 할 id값이 들어있는 배열

if( $selectid && $getid ){
    for ( $i = 0; $i < $selectid; $i++ ){
        $sql = "DELETE FROM mymemo WHERE id = $getid[$i]";
        $rs = $db->prepare($sql);
        $rs->execute();
    }
}