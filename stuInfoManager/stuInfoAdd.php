<?php
    include "conn.php";
    //echo json_encode($_GET);
    $sno = $_GET['sno'];
    $sname = $_GET['sname'];
    $sex = $_GET['sex'];
    $major = $_GET['major'];
    $birthday = $_GET['birthday'];
    $admission = $_GET['admission'];
    $department = $_GET['department'];
    $addr = $_GET['addr'];
    mysqli_query($conn,"insert into student values('{$sno}','{$sname}','{$sex}','{$major}','{$birthday}','{$admission}','{$department}','{$addr}')");