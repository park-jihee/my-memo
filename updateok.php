<?php
include("config.php");

$id = 0;
$title = "";
$body = "";

if( isset($_POST['uid']) ){
    $id = (int)($_POST['uid']);
}

if( isset($_POST['utitle']) ){
    $title = htmlentities($_POST['utitle']);
}

if( isset($_POST['ubody']) ){
    $body = htmlentities($_POST['ubody']);
}

if( $title && $body ){
    $sql = "UPDATE mymemo SET ";
    $sql .= "title=:title";
    $sql .= ", body=:body";
    $sql .= ", time=now()";
    $sql .= " WHERE id=:id";
    $rs = $db->prepare($sql);
    $rs->bindParam(":title", $title);
    $rs->bindParam(":body", $body);
    $rs->bindParam(":id", $id);
    $rs->execute();
}

header("Location: post.php");