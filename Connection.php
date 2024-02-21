<?php
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'maindb';

    $connection = mysqli_connect($server,$user,$password,$database);

    if(!$connection){
        echo 'connection failed';
    }
?>