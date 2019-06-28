 <?php

// 先要判断用户是不是从insert.html跳转过来的  
if (!(isset($_POST['heroName']))) {
    header('location:insert.html');
} else {
    // 接收表单提交过来的数据  
    $heroName = $_POST['heroName'];
    $heroSkill = $_POST['heroSkill'];

    $file = $_FILES['heroIcon'];

    // 接下来先应该把上传的图片移动到指定的目录去  
    $fileName = './imgs/icon/' . uniqid('img_') . strrchr($file['name'], '.');
    // 移动图片 
    move_uploaded_file($file['tmp_name'], $fileName);

    // 把数据写入到hero表中  
    $link = mysqli_connect('127.0.0.1', 'root', 'root', 'web34');

    // 设置字符编码 
    mysqli_query($link, 'set names utf8');

    // 构建sql语句  

    $sql = "INSERT INTO hero SET heroName = '{$heroName}',heroIcon = '{$fileName}',heroSkill = '{$heroSkill}'";

    $res = mysqli_query($link,$sql);

    if($res){
        header('location:index.php');
    }
}
