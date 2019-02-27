<?php
try { // DB 연결
    $db = new PDO("mysql:host=localhost; dbname=memo; charset=utf8", "root", "");
} catch (PDOException $error) {
    echo "DB error";
    exit;
}