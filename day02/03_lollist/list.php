
<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta charset="utf-8">
  <!-- 让ie  使用 edge 来渲染页面 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- 视口 可以根据需求 添加一些 选项 -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
  <title>Bootstrap 101 Template</title>

  <!-- Bootstrap -->
  <link href="lib/css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--  html5shiv  html5新语义标签 兼容性 -->
  <!--[if lt IE 9]>
        <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    
   <!-- 先知道要找的是谁，通过get找 -->

   <?php
    
     //导入数据
     include "data/data_lol_detail.php";
     
     //判断是否有这个值
     if(isset($heroArr[$_GET['hero']])):
       //找到对应的值
       $hero = $heroArr[$_GET['hero']];
   ?>
    <div class="jumbotron">
      <h1>
         <!-- 取出数据里的外号 -->
          <?php echo $hero['champion_title']; ?>
          <span class="label label-default">
            <!-- 取出数据里的姓名 -->
          <?php echo $hero['champion_name']; ?>
          </span>
      </h1>
      <!-- 取出数据里的路径 -->
      <img src="<?php echo $hero['champion_icon']; ?>" alt="..." class="img-thumbnail">
      <!-- 取出数据里的标签 -->
      <p> <?php echo $hero['champion_tags']; ?> </p>
      <!-- 取出数据里的详情 -->
      <p> <?php echo $hero['champion_info']; ?> </p>
      <p>
        <a class='btn btn-info btn-lg' href="./index.php">返回首页</a>
      </p>
    </div>
     <?php
      else:
        echo "<h3>查无此人，请重新搜索</h3><a class='btn btn-info btn-lg' href='./index.php'>返回首页</a>";
      endif;
    ?>
</body>

</html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="lib/js/jquery-1.12.4.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="lib/js/bootstrap.min.js"></script>