<?php 
	require_once '../../config.php';
	require_once '../../functions.php';
	/*
		删除对应的id的分类数据
	*/
	//  获取要删除的数据的id
	$id = $_POST['id'];
	// 连接数据库
	$connect = connect();
	// sql语句
	$sql = "DELETE FROM categories WHERE id = '{$id}'";
	// 执行
	$result = mysqli_query($connect,$sql);
	// 返回前端的数据
	$response = ["code"=>0,"msg"=>"操作失败"];
	if($result){
		$response["code"] = 1;
		$response["msg"] = "操作成功";
	}

	// 以json格式返回数据
	header("content-type: application/json");
	echo json_encode($response);
 ?>