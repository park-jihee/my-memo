<?php
include("config.php");

$title = "";
$body = "";

if( isset($_POST['title']) ){
    $title = htmlentities($_POST['title']);
}

if( isset($_POST['body']) ){
    $body = htmlentities($_POST['body']);
}

if( $title && $body ){
    $sql = "INSERT INTO mymemo SET ";
    $sql .= "title=:title";
    $sql .= ", body=:body";
    $sql .= ", time=now()";
    $rs = $db->prepare($sql);
    $rs->bindParam(":title", $title);
    $rs->bindParam(":body", $body);
    $rs->execute();
}

header("Location: post.php");