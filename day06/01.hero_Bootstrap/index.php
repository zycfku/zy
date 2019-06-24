<?php
header('Content-Type:text/html;charset=utf-8');
$link = @mysqli_connect('127.0.0.1','root','root','zyku');
mysqli_query($link, 'set names utf8');
$sql = 'select * from hero';
$res= mysqli_query($link,$sql);
$data = mysqli_fetch_all($res,1);

?>
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
    .input-group {
      margin: 20px 0;
    }

    .form-group {
      display: flex;
    }

    .form-group>* {
      flex: 1;
      margin: 10px;
    }

    table {
      background-color: white;
    }

    a {
      text-decoration: none !important;
    }

    table {
      font-size: 25px;
    }

    td {
      vertical-align: middle !important;
    }

    tr td:last-child {
      text-align: center;
    }

    img {
      width: 140px !important;
    }
  </style>
</head>

<body class='bg-success'>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
          aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">英雄管理--
          <span>首页</span>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li>
            <a href="index.php">首页</a>
          </li>
          <li>
            <a href="insert.html">新增</a>
          </li>
        </ul>
        <form class="navbar-form navbar-left" style="margin:0" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">搜索</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#">回收站</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
  <div class="container">

    <table class="table table-bordered  table-striped">
      <thead>
        <tr>
          <th width='10%'>序号</th>
          <th width='10%'>姓名</th>
          <th width='10%'>头像</th>
          <th width='55%'>技能</th>
          <th width='20%'>管理</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($data as $k=> $v) { ?>
        <tr>
          <td><?php echo ++$k ?></td>
          <td><?php echo $v['heroName'] ?></td>
          <td>
            <img src="<?php echo $v['heroIcon'] ?>" alt="">
          </td>
          <td><?php echo $v['heroSkill'] ?></td>
          <td>
            <a href="update.html?id=<?php echo $v['id'] ?>" class="btn btn-md btn-info">编辑</a>
            <a href="del.php?id=<?php echo $v['id'] ?>" class="btn btn-md btn-danger del">删除</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <script>
   var del =document.querySelectorAll('.del');
   del.onclick = function() {
     let delflag = window.confirm('确定删除此列吗?');
     if(!delflag) {
       return false;
     } 
   }

     </script>
</body>

</html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="lib/js/jquery-1.12.4.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="lib/js/bootstrap.min.js"></script>