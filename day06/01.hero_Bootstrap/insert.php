<?php 
if(!(isset($_POST['heroName']))) {
     header('location:insert.html'); 
}else {
    $name = $_POST['heroName'];
    $skill = $_POST['heroSkill'];
    $file = $_FILES['heroIcon'];
    
    $icon = 'imgs/icon/'.uniqid('img_').strrchr($file['name'],'.');
    move_uploaded_file($file['tmp_name'],$icon);
     $link = mysqli_connect('127.0.0.1', 'root','root','zyku');
     mysqli_query($link,"set names utf8");
     $sql = "insert into hero set heroName='{$name}', heroSkill='{$skill}', heroIcon='{$icon}'";
     $res = mysqli_query($link,$sql);
    if($res){
        header('location:index.php');
    }
}