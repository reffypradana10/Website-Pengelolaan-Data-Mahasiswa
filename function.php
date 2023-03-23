<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'wpuphp';

$conn = mysqli_connect($host,$user,$pass,$db);

function query($query){
    global $conn;
    $data = mysqli_query($conn,$query);

    $raw = [];

    while($r = mysqli_fetch_assoc($data)){
        $raw [] = $r;
    }
    return $raw;
}