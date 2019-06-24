<?php 
// 先要验证用户是不是从login.php过来 的  
if(isset($_POST['username'])){
    // 获取表单提交过来的数据  因为我们是POST提交 所以需要通过PHP中的$_POST这个超全局变量来获取 
    $user = $_POST['username'];
    $pwd = $_POST['password'];
    // 验证用户名和密码是否正确 
    if($user === 'admin' && $pwd == 'admin'){
        // 设置cookie 登录标记  不安全 
        setcookie('login','ok');
        // 如果用户名和密码同时输入正确 我们就它用户跳转到home.php文件中 
        header("location:home.php");

    }else{
        echo 'xxxx';
        header("Location:login.php");
    }


}else{
    header("Location:login.php");
}