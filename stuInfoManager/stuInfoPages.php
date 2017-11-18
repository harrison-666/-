<?php
    include "conn.php";//加载外部文件，实现数据库的连接

    $start = ($_GET['page'] - 1) * 10;
    $end = 10;
    //$sql = "select * from student";
    $sql = "select * from student limit {$start},{$end}";

    //遍历，输出所有记录
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_row($result)){
        $list[]=$row;
    }
    //print_r($list);
    print_r(json_encode($list));
