<?php

// 判断是不是从index.php过来的  如果是从index.php 会有一个$_GET['id'];

if (!(isset($_GET['id']))) {
    header('location:index.php');
} else {

    // 获取传递过来的id值 
    $id = $_GET['id'];

    // 连接数据库 
    $link = mysqli_connect('127.0.0.1', 'root', 'root', 'web34');
    // 设置字符编码 
    mysqli_query($link, 'set names utf8');
    // 构建sql语句 

    $sql = "DELETE FROM hero WHERE id={$id}";

    // 执行sql语句 
    $res = mysqli_query($link,$sql);

    if($res){
        header("location:index.php");
    }

}
