<?php 
    header('Access-Control-Allow-Origin: *');

    header('Content-Type:text/html;charset=utf-8');

    /* 
    连接数据库: 此处用户名,与密码要与之前设置的对应
    当前用户名: root
    当前密码: root
    */
    $con = mysqli_connect("localhost","root","root",'zyku');

    if (!$con){
        die('Could not connect: ' . mysqli_error());
    }

   

    $sql = "DELETE FROM teacher WHERE id = $_POST[id]";

    $res = mysqli_query($con,$sql);
    $str = '{"status":"0"}';
    if($res){
        $str =  '{"status":"ok"}';
    }
    
    echo $str;

    mysqli_close($con);

?>