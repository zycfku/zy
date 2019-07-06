<?php 
	require_once '../../config.php';
	require_once '../../functions.php';

	//获取用户的头像和昵称，返回给前端动态生成
	// 因为获取用户的头像和昵称，需要用户的id，而我们一开始在登录的时候，就把用户的id存放到了session里面，只需要从session中获取即可
	session_start();
	$userId = $_SESSION["user_id"];
	// echo $userId;
	// 根据用户的id，到数据库中查询用户的头像和昵称
	// 1 连接数据库
	$connect = connect();
	// 2 准备sql语句
	$sql = "SELECT * FROM users WHERE id = {$userId}";
	// 3 执行查询
	$queryResult = query($connect,$sql);
	// 4 判断是否查到数据，返回前端
	$response = ["code"=>0,"msg"=>"操作失败"];;
	if($queryResult){
		$response["code"] = 1;
		$response["msg"] = "操作成功";
		$response["avatar"] = $queryResult[0]['avatar'];
		$response["nickname"] = $queryResult[0]['nickname'];
	}
	// 5 以json格式返回数据
	header("content-type: application/json");
	echo json_encode($response);
 ?>