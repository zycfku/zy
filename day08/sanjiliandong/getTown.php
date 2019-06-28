<?php 

$link = mysqli_connect("127.0.0.1","root","root","liandong");
mysqli_query($link,'set names utf8');
$code = $_POST['code'];
$sql = "select * from t_address_town where cityCode=".$code;
$res = mysqli_query($link,$sql);
$data = mysqli_fetch_all($res,1);
echo json_encode($data);