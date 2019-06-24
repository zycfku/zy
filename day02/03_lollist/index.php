<!DOCTYPE html>
<html lang="zh-cn">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap 101 Template</title>

  <!-- Bootstrap -->
  <link href="lib/css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
  <style>
    body {
      padding-top: 10px;
    }

    img {
      width: 242px;
      height: 242px !important;
    }
  </style>
</head>

<body class='bg-success'>
  <div class="container">
    <div class="panel panel-default ">
      <div class="panel-heading">
        <h1>LOL英雄-------<small>列表页-php</small></h1>
        <form action="./list.php">
            <input name="hero" type="text" placeholder="请输入英雄的名字">
            <input type="submit">
        </form>
      </div>
      <div class="panel-body">
        <div class="row">

        <?php

           //1. 导入数据文件
           include "data/data_lol_list.php";
           
           //2. 遍历列表数据，有多少个元素就创建多少个div
          for($i = 0; $i < count($heroArr); $i++):
            $hero = $heroArr[$i];
        ?>
      
          <!-- 以后数据有多少个，就有多少个这样的div  -->
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <!-- 取到当前遍历到的元素里保存的图片路径  -->
                <img src="<?php echo $hero['champion_icon']; ?>" alt="...">
                <div class="caption">
                  <!-- 取到当前遍历到的元素里保存的名字 -->
                  <h3><?php echo $hero['champion_name']; ?></h3>
                  <p>
                    <a href="list.php?hero=<?php echo $hero['champion_name']; ?>" class="btn btn-default" role="button">瞅瞅</a>
                </p>
                </div>
              </div>
            </div>

     <!-- 结束循环 -->
     <?php endfor; ?>

        </div>
      </div>
    </div>
  </div>
</body>

</html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="lib/js/jquery-1.12.4.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="lib/js/bootstrap.min.js"></script>