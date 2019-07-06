<?php 

	/*
		验证是否已经登录的函数的封装
	*/
	function checkLogin(){
		// 一定要记得，如果要使用session就必须先开启
	  session_start();
	  // 先完成登录的验证 - 除了登录页面，都需要做登录的验证
	  // 1 没有isLogin这个key,有isLogin，但是值跟我们在登录的时候存储的不一样
	  if(!isset($_SESSION['isLogin']) || $_SESSION['isLogin'] != 1){
	    // 如果没有登录过，就应该强制登录
	    header("Location:login.php");
	  }
	}

	/*
	连接数据库的封装
	*/
	function connect(){
		$connect = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME);
		return $connect;
	}
	/*
	执行查询的封装
	*/
	function query($connect,$sql){
		$result = mysqli_query($connect,$sql);
		// return $result;
		return fetch($result);
	}
	/*
	转换结果集为二维数组的封装
	*/
	function fetch($result){
		$arr = [];
	    while ($row = mysqli_fetch_assoc($result)) {
	        $arr[] = $row;
	    }
	    return $arr;
	}
	/*
		封装插入数据的操作
	*/
	function insert($connect,$table,$arr){
		$keys = array_keys($arr);
		$values = array_values($arr);
		$sqlAdd = "INSERT into {$table} (". implode(",",$keys) .") VALUES('". implode("','",$values) ."')";
		// 执行新增的sql语句
		$addResult = mysqli_query($connect,$sqlAdd);
		return $addResult;
	}
 ?>