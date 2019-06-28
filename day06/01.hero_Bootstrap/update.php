

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

    a {
      text-decoration: none !important;
    }

    img {
      width: 150px !important;
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
          <span>编辑页</span>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li>
            <a href="index.php">首页</a>
          </li>
          <li>
            <a href="#">新增</a>
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

    <div class="jumbotron">
      <form action="edit.php" method="POST" enctype="multipart/form-data">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">
            <span class='glyphicon glyphicon-cutlery'></span>
          </span>
          <?php 
          $id = $_GET['id'];
          $link = mysqli_connect('127.0.0.1','root','root','zyku');
          mysqli_query($link,'set names utf8');
          $sql = "select * from hero where id='{$id}' ";
          $res = mysqli_query($link,$sql);
          $data = mysqli_fetch_assoc($res);
          ?>
          <input type="hidden" name='id' value="<?php echo $id ?>" >
          <input type="text" name='heroName' class="form-control" placeholder="" value="<?php echo $data['heroName'] ?>" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon2">
            <span class='glyphicon glyphicon-thumbs-up'></span>
          </span>
          <input type="text" name='heroSkill' class="form-control" placeholder="请输入技能名" value="<?php echo $data['heroSkill'] ?>" aria-describedby="basic-addon2" required>
        </div>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon2">
            <span class='glyphicon glyphicon-picture'></span>
          </span>
          <input type="file" name='heroIcon' class="form-control" aria-describedby="" required>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">保存</button>
          <a href='index.php' class="btn btn-danger">取消</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="lib/js/jquery-1.12.4.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="lib/js/bootstrap.min.js"></script>
<script>
  $(function () {
    $('[name=userIcon]').blur(function () {
      if ($(this).val().trim() != '') {
        $('img.preview').attr('src', $(this).val());
      }
    })
  })

</script>



