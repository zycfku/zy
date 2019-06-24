

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

  <!-- 获取 提交的数据 -->

  <!-- 从数据库中 获取对应的 英雄数据 替换页面内容 -->
  
  <!-- 上面书数据 -->
  
<?php

 $heroname = $_GET['heroname'];
include 'data/data_lol_detail.php';
    $hero = $heroArr[
      heroname];
    ?>

    <div class="jumbotron">
      <h1><?php echo $hero["champion_title"] ?><span class="label label-default"><?php echo $hero["champion_name"] ?></span></h1>
      <img src="<?php echo $hero["champion_icon"] ?>" alt="..." class="img-thumbnail">
      <p>
        <?php echo $hero["champion_info"] ?>     </p>
      <p>
        <?php echo $hero["champion_tags"] ?>   </p>
      <p>
        <a class='btn btn-info btn-lg' href="./index.php">返回首页</a>
      </p>
    </div>
</body>

</html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="lib/js/jquery-1.12.4.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="lib/js/bootstrap.min.js"></script>