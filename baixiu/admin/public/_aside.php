<div class="aside">
    <div class="profile">
      <img class="avatar" src="../static/uploads/avatar.jpg">
      <h3 class="name">布头儿</h3>
    </div>
    <ul class="nav">
      <li class="<?php echo $current_page == "index" ? "active" : "" ?>">
        <a href="index.php"><i class="fa fa-dashboard"></i>仪表盘</a>
      </li>
      <li>
      	<?php 

      		$pageArr = ["posts","post-add","categories"];

      		// in_array(某个元素,数组)

      		$bool = in_array($current_page,$pageArr);

      		// var_dump($bool);
      		/*
				如果当前页面的$current_page变量的值在pageArr这个数组中，那么ul就应该展开，如果要ul展开：
					1 a标签的class需要去掉，给a标签添加一个属性 aria-expanded="true"
					2 给ul多加一个classin，也有一个属性aria-expanded="true"
      		*/
      	 ?>
        <!-- <a href="#menu-posts" class="collapsed" data-toggle="collapse"> -->
        <a href="#menu-posts" class="<?php echo $bool ? "" : "collapsed" ?>" data-toggle="collapse" <?php echo $bool ? 'aria-expanded="true"' : ""; ?>>
          <i class="fa fa-thumb-tack"></i>文章<i class="fa fa-angle-right"></i>
        </a>
        <ul id="menu-posts" class="collapse <?php echo $bool ? "in" : "" ?>" <?php echo $bool ? 'aria-expanded="true"' : "" ?>>
          <li class="<?php echo $current_page == "posts" ? "active" : "" ?>"><a href="posts.php">所有文章</a></li>
          <li class="<?php echo $current_page == "post-add" ? "active" : "" ?>"><a href="post-add.php">写文章</a></li>
          <li class="<?php echo $current_page == "categories" ? "active" : "" ?>"><a href="categories.php">分类目录</a></li>
        </ul>
      </li>
      <li class="<?php echo $current_page == "comments" ? "active" : "" ?>">
        <a href="comments.php"><i class="fa fa-comments"></i>评论</a>
      </li>
      <li class="<?php echo $current_page == "users" ? "active" : "" ?>">
        <a href="users.php"><i class="fa fa-users"></i>用户</a>
      </li>
      <li>

        <?php 

          $pageArr = ["nav-menus","slides","settings"];
          $bool = in_array($current_page,$pageArr);
         ?>
        <a href="#menu-settings" class="<?php echo $bool ? "" : "collapsed" ?>" data-toggle="collapse" <?php echo $bool ? 'aria-expanded="true"' : ""; ?>>
          <i class="fa fa-cogs"></i>设置<i class="fa fa-angle-right"></i>
        </a>
        <ul id="menu-settings" class="collapse <?php echo $bool ? "in" : ""; ?>" <?php echo $bool ? 'aria-expanded="true"' : ""; ?>>
          <li class="<?php echo $current_page == "nav-menus" ? "active" : "" ?>"><a href="nav-menus.php">导航菜单</a></li>
          <li class="<?php echo $current_page == "slides" ? "active" : "" ?>"><a href="slides.php">图片轮播</a></li>
          <li class="<?php echo $current_page == "settings" ? "active" : "" ?>"><a href="settings.php">网站设置</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <script src="../static/assets/vendors/jquery/jquery.js"></script>
  <script>
    
    
    $(function(){
      // 使用ajax请求，动态获取用户的头像和昵称
      $.ajax({
        type : "POST",
        url : "api/_getUserAvator.php",
        success : function (res) {
          // 从服务端得到的结果再生产头像和名字
          if(res.code == 1){
            //  请求成功之后，应该把得到的头像和昵称修改一下
            var profile = $(".profile");
            profile.children('img').attr("src",res.avatar);
            profile.children('h3').text(res.nickname);
          }
        }
      });
    });

  </script>