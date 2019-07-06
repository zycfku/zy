<?php 
	require_once '../../config.php';
	require_once '../../functions.php';

	/*
		根据id更新分类的数据
	*/
	// 第一步： 先获取id和一些要修改的数据
	$id = $_POST["id"];
	// print_r($_POST);

	// 连接数据库
	$connect = connect();
	// sql语句
	$sql = "update categories set ";
	// 遍历$_POST之前，要把id先从数组中去掉
	unset($_POST["id"]);
	// 遍历$_POST数组，把每个建和值拼接到sql语句中
	foreach ($_POST as $key => $value) {
		$sql .= "{$key}='{$value}',";
	}
	// 循环导致sql语句的末尾多一个逗号，先把逗号去掉
	$sql = substr($sql,0,-1);
	$sql .=" where id = '{$id}'";

	// 执行sql语句
	$result = mysqli_query($connect,$sql);
	// 把结果返回给前端
	$response = ['code'=>0,"msg"=>"操作失败"];
	if($result){
		$response['code'] = 1;
		$response['msg'] = "操作成功";
	}
	// 以json格式返回前端
	header("content-type: application/json");
	echo json_encode($response);
 ?>