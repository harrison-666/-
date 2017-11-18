<?php
    header("Content-Type:text/html;charset=utf-8");

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "leodata";

     // 创建连接
     $conn = new mysqli($servername, $username, $password, $dbname);
     // Check connection
     if ($conn->connect_error) {
         die("连接失败: " . $conn->connect_error);
     }


