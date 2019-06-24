<?php 
header('Content-Type:text/html;charset=utf-8');
$link = @mysqli_connect('127.0.0.1', 'root','root','zyku');
// var_dump($link);
mysqli_query($link,'set names utf8');
$mql = 'delete from my_stu where id=2';
$res = mysqli_query($link,$mql);
var_dump($res);
$sql = 'select *from my_stu';
$jg = mysqli_query($link,$sql);
$data = mysqli_fetch_all($jg,1);
var_dump($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" width="600" align="center" style="border-collapse:collapse; margin:100px auto;">
    <thead>
    <tr>
    <th>序号</th>
        <th>姓名</th>
        <th>性别</th>
        <th>所在班级ID</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach($data as $k => $v) { ?>
        <tr align="center">
            <td><?php echo ++$k ?></td>
            <td><?php echo $v['stu_name'] ?></td>
            <td><?php echo $v['sex'] ?></td>
            <td><?php echo $v['class_id'] ?></td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
</body>
</html>