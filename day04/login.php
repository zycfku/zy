<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>登录</title>
  <link rel="stylesheet" href="bootstrap.css">
  <style>
    body {
      background-color: #f8f9fb;
    }

    .login-form {
      width: 360px;
      margin: 100px auto;
      padding: 30px 20px;
      background-color: #fff;
      border: 1px solid #eee;
    }

    .login-form h1 {
      font-size: 30px;
      margin-bottom: 20px;
    }
  </style>
</head>

<body>
  <form class="login-form" action="checkLogin.php" method="POST">
    <h1>登录</h1>
    <!-- 下面的错误提示信息结构 需要在有错误信息的时候进行显示 -->
    <div class="alert alert-danger" role="alert" style="display:none" id="msg">用户不能为空</div>
    <div class="form-group">
      <label for="username">用户名</label>
      <input type="text" class="form-control" id="username" name="username">
    </div>
    <div class=" form-group">
      <label for="password">密码</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary btn-block">登录</button>
  </form>
  <script src="jquery-1.8.3.js"></script>
  <script>
    // 给上面表单注册submit事件   
    // 入口函数  为了验证表单
    $(function() {
      // 给form注册submit事件  
      $('.login-form').on('submit', function() {
        var userValue = $('#username').val();
        if(!(/\w{5,18}/.test(userValue))){
          $('#msg').fadeIn(2000).delay(1000).fadeOut(2000).text('用户不合法');
          return false;
        }
        var passValue = $('#password').val();
        if(!(/\w{5,18}/.test(passValue))){
          $('#msg').fadeIn(2000).delay(1000).fadeOut(2000).text('密码不合法');
          return false;
        }
      });
    });
  </script>
</body>

</html> 