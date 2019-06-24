<?php 

// 判断是否有一个登录成功的标记 如果有 就说明用户是登录成功  
if(!(isset($_COOKIE['login']) && $_COOKIE['login']  == 'ok')){
    header("location:login.php");
}else{
    // 如果用户名和密码写对了 我们就可以登录到后面首页 
    echo 'this is home.php';

}

