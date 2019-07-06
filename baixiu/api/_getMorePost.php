<?php 
	require_once '../config.php';
	require_once '../functions.php';
	/*
		根据文章的分类id对数据进行更多的获取
			SELECT * FROM posts
			LIMIT 0,10
			# 这是第一次获取的数据，相当于是我们获取了第一页的数据
			LIMIT 10,10
			# 这是第二次获取数据，相当于是获取了第二页的数据
			LIMIT 20,10
			# 观察得出： 从哪里开始取 = (第几次 - 1) * 每次要获取的条数
			# 假设要获取第n次 sql语句这么写：
			SELECT * FROM posts
			LIMIT (n-1) * 10,10

			分析得出： 还要知道当前是第几次获取，一共要获取多少条数据


			1 获取分类的id,第几次获取数据,一共要获取多少条
			2 到数据库中查找对应的数据
			3 把数据返回给前台，让其生成结构
	*/

			//1 获取必要的参数
			$categoryId = $_POST["categoryId"];
			$currentPage = $_POST["currentPage"];
			$pageSize = $_POST["pageSize"];
			// 1.2 计算出要从哪里开始获取
			$offset = ($currentPage - 1) * $pageSize;
			//2 查询数据库
			//2.1 连接数据库
			$connect = connect();
			//2.2 sql语句
			$sql = "SELECT p.id,p.title,p.created,p.content,p.views,p.likes,p.feature,u.nickname,c.`name`,
		    (select count(id) FROM comments WHERE comments.post_id = p.id) as commentCount
		     FROM posts p
		    LEFT JOIN users u ON u.id = p.user_id
		    LEFT JOIN categories c on c.id = p.category_id
		    WHERE p.category_id = {$categoryId}
		    LIMIT {$offset},{$pageSize}";
			//2.3 执行差选
			$postArr = query($connect,$sql);


			/*
				3 还得计算出所有的文章总共可以获取多少次，返回给前台让其判断加载更多是否应该显示给用户

			*/
				// 3.1 准备sql语句，查询文章的总的数量
				$sqlCount = "SELECT count(id) as postCount FROM posts WHERE category_id = {$categoryId}";
				// 3.2 执行语句
				$countArr = query($connect,$sqlCount);
				// 3.3 因为查询结果是二维数组,需要从二维数组中获取出总共能获取的次数
				// print_r($countArr);
				$pageCount = $countArr[0]['postCount'];
			/*
				一般在实际开发当中，项目会约定好一个返回的结构

				{
					"code" : 请求的状态 - 约定如果是某些特定的数字，代表不同的状态
						比如： 1 代表成功, 0 代表失败
					"msg" : 想要返回给前台的一些信息
					"data" : 返回给前台的数据
				}
			*/
			$response = ["code"=>0,"msg"=>"操作失败"];

			//3 返回数据
			if($postArr){
				$response["code"] = 1;
				$response["msg"] = "操作成功";
				$response["data"] = $postArr;
				$response["pageCount"] = $pageCount;
			}

			header("content-type: application/json;charset=utf-8;");
			echo json_encode($response);
 ?>