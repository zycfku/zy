<?php 
    require_once '../config.php';
    require_once '../functions.php';

    // 调用已经封装好的checkLogin验证是否已经登录
    checkLogin();
    /*

      使用ajax请求，获取数据，再来动态生成结构即可
    */
 ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <title>Categories &laquo; Admin</title>
  <link rel="stylesheet" href="../static/assets/vendors/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../static/assets/vendors/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="../static/assets/vendors/nprogress/nprogress.css">
  <link rel="stylesheet" href="../static/assets/css/admin.css">
  <script src="../static/assets/vendors/nprogress/nprogress.js"></script>
</head>
<body>
  <script>NProgress.start()</script>

  <div class="main">
    <!-- <nav class="navbar">
      <button class="btn btn-default navbar-btn fa fa-bars"></button>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="profile.php"><i class="fa fa-user"></i>个人中心</a></li>
        <li><a href="login.php"><i class="fa fa-sign-out"></i>退出</a></li>
      </ul>
    </nav> -->

    <?php include_once 'public/_navbar.php'; ?>
    <div class="container-fluid">
      <div class="page-title">
        <h1>分类目录</h1>
      </div>
      <!-- 有错误信息时展示 -->
      <div class="alert alert-danger" style="display: none;">
        <strong>错误！</strong><span id="msg"></span>
      </div>
      <div class="row">
        <div class="col-md-4">
          <form id="data">
            <h2>添加新分类目录</h2>
            <div class="form-group">
              <label for="name">名称</label>
              <input id="name" class="form-control" name="name" type="text" placeholder="分类名称">
            </div>
            <div class="form-group">
              <label for="slug">别名</label>
              <input id="slug" class="form-control" name="slug" type="text" placeholder="slug">
              <p class="help-block">https://zce.me/category/<strong>slug</strong></p>
            </div>
            <div class="form-group">
              <label for="slug">类名</label>
              <input id="classname" class="form-control" name="classname" type="text" placeholder="类名">
              <p class="help-block">https://zce.me/category/<strong>slug</strong></p>
            </div>
            <div class="form-group">
              <!-- <button class="btn btn-primary" type="submit">添加</button> -->
              <input id="btn-add" type="button" value="添加" class="btn btn-primary">
              <input style="display: none;" id="btn-edit" type="button" value="编辑完成" class="btn btn-primary">
              <input style="display: none;" id="btn-cancle" type="button" value="取消编辑" class="btn btn-primary">
            </div>
          </form>
        </div>
        <div class="col-md-8">
          <div class="page-action">
            <!-- show when multiple checked -->
            <a id="delAll" class="btn btn-danger btn-sm" href="javascript:;" style="display: none">批量删除</a>
          </div>
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th class="text-center" width="40"><input type="checkbox"></th>
                <th>名称</th>
                <th>Slug</th>
                <th>类名</th>
                <th class="text-center" width="100">操作</th>
              </tr>
            </thead>
            <tbody>
              <!-- <tr>
                <td class="text-center"><input type="checkbox"></td>
                <td>未分类</td>
                <td>uncategorized</td>
                <td>fa-fire</td>
                <td class="text-center">
                  <a href="javascript:;" class="btn btn-info btn-xs">编辑</a>
                  <a href="javascript:;" class="btn btn-danger btn-xs">删除</a>
                </td>
              </tr>
              <tr>
                <td class="text-center"><input type="checkbox"></td>
                <td>未分类</td>
                <td>uncategorized</td>
                <td>fa-fire</td>
                <td class="text-center">
                  <a href="javascript:;" class="btn btn-info btn-xs">编辑</a>
                  <a href="javascript:;" class="btn btn-danger btn-xs">删除</a>
                </td>
              </tr>
              <tr>
                <td class="text-center"><input type="checkbox"></td>
                <td>未分类</td>
                <td>uncategorized</td>
                <td>fa-fire</td>
                <td class="text-center">
                  <a href="javascript:;" class="btn btn-info btn-xs">编辑</a>
                  <a href="javascript:;" class="btn btn-danger btn-xs">删除</a>
                </td>
              </tr> -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="aside">
    <div class="profile">
      <img class="avatar" src="../static/uploads/avatar.jpg">
      <h3 class="name">布头儿</h3>
    </div>
    <ul class="nav">
      <li>
        <a href="index.php"><i class="fa fa-dashboard"></i>仪表盘</a>
      </li>
      <li class="active">
        <a href="#menu-posts" data-toggle="collapse">
          <i class="fa fa-thumb-tack"></i>文章<i class="fa fa-angle-right"></i>
        </a>
        <ul id="menu-posts" class="collapse in">
          <li><a href="posts.php">所有文章</a></li>
          <li><a href="post-add.php">写文章</a></li>
          <li class="active"><a href="categories.php">分类目录</a></li>
        </ul>
      </li>
      <li>
        <a href="comments.php"><i class="fa fa-comments"></i>评论</a>
      </li>
      <li>
        <a href="users.php"><i class="fa fa-users"></i>用户</a>
      </li>
      <li>
        <a href="#menu-settings" class="collapsed" data-toggle="collapse">
          <i class="fa fa-cogs"></i>设置<i class="fa fa-angle-right"></i>
        </a>
        <ul id="menu-settings" class="collapse">
          <li><a href="nav-menus.php">导航菜单</a></li>
          <li><a href="slides.php">图片轮播</a></li>
          <li><a href="settings.php">网站设置</a></li>
        </ul>
      </li>
    </ul>
  </div> -->
  <?php $current_page = 'categories' ?>
  <?php include_once 'public/_aside.php'; ?>

  <script src="../static/assets/vendors/jquery/jquery.js"></script>
  <script src="../static/assets/vendors/bootstrap/js/bootstrap.js"></script>
  <script>NProgress.done()</script>
  <script>
    
    /*
      使用ajax请求，获取数据，再来动态生成结构即可
    */
    $(function(){
      //在页面加载完毕之后，就要展示数据一开始就要获取数据

      $.ajax({
        type: "POST",
        url : "api/_getCategoryData.php",
        success : function (res) {
          // 请求成之后，把数据动态的渲染出来
          if(res.code == 1){
            //在请求成功的情况下，动态的渲染数据表格
            // 遍历数据数组，生成每一行，添加到表格中即可
            var str = "";
            var data = res.data;
            $.each(data,function(i,e){
              str += '<tr data-categoryId="'+ e.id +'">\
                <td class="text-center"><input type="checkbox"></td>\
                <td>'+ e.name +'</td>\
                <td>'+ e.slug +'</td>\
                <td>'+ e.classname +'</td>\
                <td class="text-center">\
                  <a href="javascript:;" data-categoryId="'+ e.id +'" class="btn btn-info btn-xs edit">编辑</a>\
                  <a href="javascript:;" class="btn btn-danger btn-xs del">删除</a>\
                </td>\
              </tr>';
            });
            // 把字符串变成元素，追加到表格中即可
            $(str).appendTo('tbody');
          }
        }
      });

      // 点击按钮添加分类数据
      $("#btn-add").on("click",function(){
        // 1 收集表单数据 - 验证表单数据是否填写完整
        var name = $("#name").val();
        var slug = $("#slug").val();
        var classname = $("#classname").val();
        // 如果数据填写不完整，就提示用户要填写完整才能添加
        if(name == ""){
          // 提示用户分类的名称不能为空
          $("#msg").text("分类的名称不能为空");
          $(".alert").show();
          return;
        }
        if(slug == ""){
          // 提示用户分类的别名不能为空
          $("#msg").text("分类的别名不能为空");
          $(".alert").show();
          return;
        }
        if(classname == ""){
          // 提示用户分类的图标样式不能为空
          $("#msg").text("分类的图标样式不能为空");
          $(".alert").show();
          return;
        }

        // 2 发送到服务端进行添加
        $.ajax({
          url : "api/_addCategory.php",
          data : $("#data").serialize(),
          type : "POST",
          success : function(res){
              // 根据返回的结果，动态生成一行数据追加到表格的末尾即可
              // 判断返回的结果是否成功，如果是成功的，动态生成表格
              if(res.code == 1){
                // 生成结构
                var str = '<tr>\
                <td class="text-center"><input type="checkbox"></td>\
                <td>'+ name +'</td>\
                <td>'+ slug +'</td>\
                <td>'+ classname +'</td>\
                <td class="text-center">\
                  <a href="javascript:;" class="btn btn-info btn-xs">编辑</a>\
                  <a href="javascript:;" class="btn btn-danger btn-xs">删除</a>\
                </td>\
              </tr>';

                $(str).appendTo('tbody');
              }
          }
        });
      });


      /*
        定义一个全局变量，保存一下，点击编辑的是哪一行
      */
      var currentRow ;

      /*
      编辑按钮的点击事件
      */
      $("tbody").on("click",".edit",function(){
        // 在这里面完成编辑的逻辑
        // 先把点击对应的行保存起来
        currentRow = $(this).parents("tr");
        // 先获取点击按钮对应的数据的id
        var categoryId = $(this).attr("data-categoryid");
        // console.log(categoryId);
        // 把对应的id存储到编辑完成按钮身上
        $("#btn-edit").attr("data-categoryid",categoryId);
        // 先在炸裂把添加按钮隐藏，把编辑完成和取消编辑的按钮显示出来
        $("#btn-add").hide();
        $("#btn-edit").show();
        $("#btn-cancle").show();
        // 把点击的按钮对应的数据 填充到对应的输入框
        var name = $(this).parents("tr").children().eq(1).text();
        var slug = $(this).parents("tr").children().eq(2).text();
        var className = $(this).parents("tr").children().eq(3).text();
        // 把获取到的内容填充到对应的输入框中
        $("#name").val(name);
        $("#slug").val(slug);
        $("#classname").val(className);

      });


      // 编辑完成按钮的点击事件
      $("#btn-edit").on("click",function(){
        //把表单中的数据更新到数据库中
        // 先获取点击按钮对应的数据的id
        var categoryId = $(this).attr("data-categoryid");
        // console.log(categoryId)

        // 1 收集表单数据 - 验证表单数据是否填写完整
        var name = $("#name").val();
        var slug = $("#slug").val();
        var classname = $("#classname").val();
        // 如果数据填写不完整，就提示用户要填写完整才能添加
        if(name == ""){
          // 提示用户分类的名称不能为空
          $("#msg").text("分类的名称不能为空");
          $(".alert").show();
          return;
        }
        if(slug == ""){
          // 提示用户分类的别名不能为空
          $("#msg").text("分类的别名不能为空");
          $(".alert").show();
          return;
        }
        if(classname == ""){
          // 提示用户分类的图标样式不能为空
          $("#msg").text("分类的图标样式不能为空");
          $(".alert").show();
          return;
        }

        // 把id和修改过后的数据，发送到服务端，根据id对数据进行更新
        $.ajax({
          url : "api/_updateCategory.php",
          type : "POST",
          data : {name : name , slug : slug , classname : classname , id : categoryId},
          success : function(res){
              // 如果修改成功
              if(res.code == 1){
                // 要把两个编辑的按钮隐藏，把添加的按钮显示
                $("#btn-add").show();
                $("#btn-edit").hide();
                $("#btn-cancle").hide();

                // 清空之前先保存之前修改过后的内容
                var name = $("#name").val();
                var slug = $("#slug").val();
                var className = $("#classname").val();

                // 清空输入框
                $("#name").val("");
                $("#slug").val("");
                $("#classname").val("");

                // 把对应的数据更新到表格中
                currentRow.children().eq(1).text(name);
                currentRow.children().eq(2).text(slug);
                currentRow.children().eq(3).text(className);
              }
          }
        });
      })


      // 取消编辑
      $("#btn-cancle").on("click",function(){
        // 把对应的按钮显示和隐藏
        $("#btn-add").show();
        $("#btn-edit").hide();
        $("#btn-cancle").hide();
        // 情况输入框
        $("#name").val("");
        $("#slug").val("");
        $("#classname").val("");
      })


      /*
        点击删除按钮，删除数据
      */
      $("tbody").on("click",".del",function(){
        // 先把当前点击的行记录下来，当删除成功的时候，我们就把这一行删除掉
        var row = $(this).parents("tr");

        // 根据当前点击的按钮对应的行，得到其对应的id，在数据库中删除数据
        // 先获取要删除的数据的id
        var categoryId = row.attr("data-categoryId");
        // console.log(categoryId);
        // 把要删除的id发送回服务端
        $.ajax({
          type : "POST",
          url : "api/_delCategory.php",
          data : { id : categoryId},
          success : function(res){
            // 如果删除成功,也要把对应的行给删除掉
            if(res.code == 1){
              //要把对应的行给移除掉
              row.remove();
            }
          }
        });
      })

      /*
      全选功能的实现
      */
      $("thead input").on('click', function() {
        // 控制别的多选框跟我的当前的选中状态一样
        // 获取自己的选中状态
        var status = $(this).prop("checked");
        // 控制别的多选框
        $("tbody input").prop("checked",status);

        // 判断当前是否选中，如果选中，显示删除多个
        if(status){
          $("#delAll").show();
        }else {
          $("#delAll").hide();
        }
      });

      /*
      使用委托的方式为别的多选框注册点击事件
      */
      $("tbody").on("click","input",function(){
        // 控制全选的多选框是否选中，只有当所欲的多选框都选中，全选才选中
        // 获取全选多选框
        var all = $("thead input");
        var cks = $("tbody input");
        // 如果cks里面的所有的多选框都选中了，全选也选中
        // if(cks.size() == $("tbody input:checked").size()){
        //   all.prop("checked",true);
        // }else {
        //   all.prop("checked",false);
        // }

        all.prop("checked",cks.size() == $("tbody input:checked").size());

        // 选中的多选框超过两个，就显示批量删除
        if($("tbody input:checked").size() >= 2){
          $("#delAll").show();
        }else {
          $("#delAll").hide();
        }
      });


      /*
      点击批量删除
      */
      $("#delAll").on("click",function(){
        // 准备好的收集多个id的数组
        var ids = [];
        // 收集所有选中的id，发送到服务器进行数据的删除
        var cks = $("tbody input:checked");
        // 遍历伪数组，找到所有被选中的id
        cks.each(function(index, el) {
          var id = $(el).parents("tr").attr("data-categoryId");
          ids.push(id);
        });

        // console.log(ids);
        // 把数据发送回服务端，删除数据
        $.ajax({
          url : "api/_delCategoriese.php",
          type : "POST",
          data : { ids : ids},
          success : function(res){
            // 如果删除成功了，要把对应的行也移除掉
            if(res.code == 1){
              cks.parents("tr").remove();
            }
          }
        });
      })
    });

  </script>
</body>
</html>
