<?php 
	require_once '../../config.php';
	require_once '../../functions.php';
	/*
		完成文章分类的新增操作
	*/
		// 获取分类的名称
		$name = $_POST['name'];

		// print_r($_POST);

		// 连接数据库
		$connect = connect();
		// 判断用户新增的分类是否跟数据库中已经存在的分类重名，如果重名了，不允许添加
		// 如果根据用户新增的分类名称查找的条数大于0，就是已经存在
		$countSql = "SELECT count(*) as count FROM categories WHERE `name` = '{$name}'";

		$countResult = query($connect,$countSql);
		// print_r($countResult);
		$count = $countResult[0]['count'];// 这是查询的是否存在的条数
		// 如果存在就提示用户是不能添加的
		$response = ['code'=>0,"msg"=>"操作失败"];
		if($count > 0){
			$response['msg'] = "分类名称已经存在，不能重复添加";
		}else {
			// 如果不存在，就继续新增的逻辑
			// 准备新增的sql语句
			// $keys = array_keys($_POST);
			// $values = array_values($_POST);
			// $sqlAdd = "INSERT into categories (". implode(",",$keys) .") VALUES('". implode("','",$values) ."')";

			// // echo $sqlAdd;
			// // 执行新增的sql语句
			// $addResult = mysqli_query($connect,$sqlAdd);

			// 调用封装好的函数完成插入操作
			$addResult = insert($connect,"categories",$_POST);
			// 判断添加的结果是否成功，如果成功，告知前端可以动态的生成表格结构了
			if($addResult){
				$response['code'] = 1;
				$response['msg'] = '操作成功';
			}
		}
		
		header("content-type: application/json");

		// 把结果返回给前端
		echo json_encode($response);
 ?>