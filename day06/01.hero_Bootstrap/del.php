<?php 
if(!(isset($_GET['id']))) {
      header('location:index.php');
}else {
$id = $_GET['id'];
$link = mysqli_connect('127.0.0.1','root','root','zyku');
mysqli_query($link,'set names utf8');
  $sql = "delete from hero where id={$id}";
  $res = mysqli_query($link,$sql);
  if($res) {
      header('location:index.php');
  }
   
}
