<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type:text/html;charset=utf-8');

     /* 
    连接数据库: 此处用户名,与密码要与之前设置的对应
    当前用户名: root
    当前密码: root
    */
    $con = mysql_connect("localhost","root","root");

    if (!$con){
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("test", $con);

    $sql="INSERT INTO teacher (username, password, name,school,age)
    VALUES
    ('$_POST[username]','$_POST[password]','$_POST[name]','$_POST[school]','$_POST[age]')";

    if (!mysql_query($sql,$con)){
      die('Error: ' . mysql_error());
    }

    echo '{"status":"ok"}';

    mysql_close($con)
?>