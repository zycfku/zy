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

    h2 {
      text-align: center;
      margin: 10px;
    }
  </style>
</head>

<body class='bg-success'>
  <div class="container">
    <div class="panel panel-default ">
      <div class="panel-heading">
        <h1>LOL英雄-------
          <small>列表页-php</small>
        </h1>
      </div>
      <div class="panel-body">
        <div class="row">
          <?php include 'data/data_lol_list.php';
        foreach($heroArr as $v) {
          ?>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <a href="detail.php?heroname=<?php echo $v["champion_name"] ?>">
                <img src="<?php echo $v['champion_icon'] ?>" alt="...">
              </a>
              <div class="caption">
                <h2><?php echo $v["champion_name"] ?></h2>
                
              </div>
            </div>
          </div>
        <?php } ?>
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