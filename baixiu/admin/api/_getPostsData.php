<?php 
	require_once '../../config.php';
	require_once '../../functions.php';
	/*
		获取文章的数据，返回给前端
	*/
		// 从前端获取两个数据  ： 当前是第几页  一共要获取多少条
		$currentPage = $_POST['currentPage'];
		$pageSize = $_POST['pageSize'];
		// 还要获取筛选的条件
		$status = $_POST['status'];
		// 获取分类的id
		$categoryId = $_POST['categoryId'];
		// 如果是有时候需要条件筛选，有时候又不需要条件筛选，通过判断是否有条件再来决定是否有where是比较麻烦的，习惯的处理方式是：  where 1=1
		// 只有当有条件的时候，我们再来把条件拼接到where的后面
		$where = " where 1=1 ";
		// 判断有无筛选条件，修改 $where 即可
		if($status != "all"){
			$where .= " and p.status = '{$status}' ";
		}

		// 判断分类的id是否也属于筛选的条件
		if( $categoryId != "all"){
			$where .= " and p.category_id = '{$categoryId}'";
		}

		// 计算出sql语句从哪里开始获取数据
		// 从哪里开始获取 = (要获取的页码数 - 1) * 每页获取的数据的条数
		$offset = ($currentPage - 1) * $pageSize;
		// 连接数据库
		$connect = connect();
		// sql语句
		$sql = "SELECT p.id,p.title,p.created,p.`status`,u.nickname,c.`name` FROM posts p
left JOIN users u ON u.id = p.user_id
LEFT JOIN categories c ON c.id = p.category_id" . $where . "LIMIT {$offset},{$pageSize}";

		// 执行查询
		$result = query($connect,$sql);
		// 差选到了数据之后，再来计算出最大的页码数
		$countSql = "SELECT count(*) as count FROM posts";
		// 执行总数的查询
		$countArr = query($connect,$countSql);
		$postCount = $countArr[0]['count'];
		// 计算页码的最大值 = ceil(文章总数 / 每页的数据条数)
		$pageCount = ceil($postCount / $pageSize);
		// 把查询的结果返回前端
		$response = ['code'=>0,'msg'=>"操作失败"];
		if($result){
			$response['code'] = 1;
			$response['msg'] = "操作成功";
			$response['data'] = $result;
			$response['pageCount'] = $pageCount;
		}

		header("content-type: application/json");
		echo json_encode($response);
 ?>