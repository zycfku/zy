<?php 
	require_once '../../config.php';
	require_once '../../functions.php';

	//完成用户的登录
/*
	后端
        得到用户的邮箱和密码
        根据邮箱和密码到数据库中查找有没有对应的数据
        最终通知前台是否登录成功

*/
        // 1 获取邮箱和密码
        $email = $_POST["email"];
        $password = $_POST["password"];
        //2 根据邮箱和密码到数据库中查找有没有对应的数据
        // 2.1 连接数据库
        $connect = connect();
        // 2.2 准备sql语句
        $sql = "SELECT * FROM users WHERE email = '{$email}' and `password` = '{$password}' and `status` = 'activated'";
        // 2.3 执行语句
        $queryResult = query($connect,$sql);
        // print_r($queryResult);
        // 3 判断查询的结果是不是由数据
        $response = ["code"=>0,"msg"=>"操作失败"];
        if($queryResult){
        	// 3.1 如果登录成功了，应该把登录的状态记录一下
        	// session
        	session_start();
        	$_SESSION['isLogin'] = 1;
                // 3.2 把用户的id也存储起来，以便将来可以用来获取跟用户相关的数据
                $_SESSION['user_id'] = $queryResult[0]['id'];

        	$response["code"] = 1;
        	$response["msg"] = "登录成功";
        }
        // 4 以json格式返回数据
        header("content-type: application/json;charset=utf-8");
        echo json_encode($response);
 ?>