<?php 
	require_once '../../config.php';
	require_once '../../functions.php';
	/*
		删除多个数据，根据多个id

	*/
		// 获取从前端传递回来的要删除的多个id
		$ids = $_POST["ids"];
		// 连接数据库
		$connect = connect();
		// 删除的sql语句
		$sql = "DELETE FROM categories WHERE id in ('". implode("','",$ids) ."')";
		// 执行sql语句
		$result = mysqli_query($connect,$sql);
		// 把结果返回
		$response = ["code"=>0,"msg"=>"操作失败"];
		if($result){
			$response['code'] = 1;
			$response['msg'] = "操作成功";
		}

		header("content-type:application/json");
		echo json_encode($response);
 ?>