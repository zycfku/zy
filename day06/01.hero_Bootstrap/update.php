<?php 
if(!(isset($_POST['heroName']))) {
    header('location:index.php');

}else {
    $id = $_GET['id'];
    $name = $_POST['heroName'];
    $skill = $_POST['heroSkill'];
    $file = $_FILES['heroIcon'];
    $icon = 'imgs/icon/'.uniqid('img_').strrchr($file['name'], '.');
    move_uploaded_file($file['tmp_name'],$icon);
    $link = mysqli_connect('127.0.0.1','root','root','zyku');
    mysqli_query($link,'set names utf8');
    $sql = "update hero set heroName='{$name},heroSkill='{$skill}',heroIcon='{$icon}' where id='{$id}' ";
    $res = mysqli_query($link,$sql);
    if($res) {
        header('location:index.php');
    }
}