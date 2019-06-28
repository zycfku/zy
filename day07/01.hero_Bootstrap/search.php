<?php
header('Content-Type:text/html;charset=utf-8');
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $name = $_GET['name'];
    $link = mysqli_connect('127.0.0.1', 'root', 'root', 'zyku');
    mysqli_query($link, 'set names utf8');
    $sql = 'select * from hero where id>0;';
    $res = mysqli_query($link, $sql);
    $data = mysqli_fetch_all($res, 1);
    $arr =[];
    foreach ($data as $v) {
        if (strstr($v['heroName'], $name) != false) {
           $arr[] = $v;
        }
    }
   
}
