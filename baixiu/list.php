<?php 
  require_once 'config.php';
  //因为functions.php是依赖于config.php的，需要在config.php之后引入
  require_once 'functions.php';
  /*
    根据分类id对文章数据进行查询，动态生成文章列表
    1 获取分类id
    2 根据分类id查询数据库
    3 动态生成结构
  */
  // 1 获取分类id
  //   $categoryId = $_GET["categoryId"];
  //   // 2 根据分类id查询数据库
  //   // 2.1 连接数据库
  //   $connect = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME);
  //   // 2.2 sql语句
  //   $sql = "SELECT p.title,p.created,p.content,p.views,p.likes,p.feature,u.nickname,c.`name`,
  //   (select count(id) FROM comments WHERE comments.post_id = p.id) as commentCount
  //    FROM posts p
  //   LEFT JOIN users u ON u.id = p.user_id
  //   LEFT JOIN categories c on c.id = p.category_id
  //   WHERE p.category_id = {$categoryId}
  //   LIMIT 10";
  //   //2.3 执行查询语句
  //   $postResult = mysqli_query($connect,$sql);
  //   // 2.4 将结果集转换为二维数组
  //   $postArr = [];
  //   while ($row = mysqli_fetch_assoc($postResult)) {
  //      $postArr[] = $row;
  //   }
    // print_r($postArr);


    /*
    --------------------以下代码是使用封装好的函数实现的过程
    */
    // 1 获取分类id
    $categoryId = $_GET["categoryId"];
    // 2 根据分类id查询数据库
    // 2.1 连接数据库
    $connect = connect();
    // 2.2 根据分类id查询数据库
    $sql = "SELECT p.id,p.title,p.created,p.content,p.views,p.likes,p.feature,u.nickname,c.`name`,
    (select count(id) FROM comments WHERE comments.post_id = p.id) as commentCount
     FROM posts p
    LEFT JOIN users u ON u.id = p.user_id
    LEFT JOIN categories c on c.id = p.category_id
    WHERE p.category_id = {$categoryId}
    LIMIT 10";

    //调用封装好的查询函数来进行查询
    $postArr = query($connect, $sql);
    header("content-type: text/html;charset=utf-8;");
    // print_r($postArr);
 ?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>阿里百秀-发现生活，发现美!</title>
  <link rel="stylesheet" href="static/assets/css/style.css">
  <link rel="stylesheet" href="static/assets/vendors/font-awesome/css/font-awesome.css">
</head>
<body>
  <div class="wrapper">
    <div class="topnav">
      <ul>
        <li><a href="javascript:;"><i class="fa fa-glass"></i>奇趣事</a></li>
        <li><a href="javascript:;"><i class="fa fa-phone"></i>潮科技</a></li>
        <li><a href="javascript:;"><i class="fa fa-fire"></i>会生活</a></li>
        <li><a href="javascript:;"><i class="fa fa-gift"></i>美奇迹</a></li>
      </ul>
    </div>
    <?php include_once 'public/_header.php'; ?>
    <?php include_once 'public/_aside.php'; ?>
    <div class="content">
      <div class="panel new">
        <h3><?php echo $postArr[0]['name'] ?></h3>
        <!-- <div class="entry">
          <div class="head">
            <a href="javascript:;">星球大战：原力觉醒视频演示 电影票68</a>
          </div>
          <div class="main">
            <p class="info">admin 发表于 2015-06-29</p>
            <p class="brief">星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯，星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯，星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯，星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯，星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯</p>
            <p class="extra">
              <span class="reading">阅读(3406)</span>
              <span class="comment">评论(0)</span>
              <a href="javascript:;" class="like">
                <i class="fa fa-thumbs-up"></i>
                <span>赞(167)</span>
              </a>
              <a href="javascript:;" class="tags">
                分类：<span>星球大战</span>
              </a>
            </p>
            <a href="javascript:;" class="thumb">
              <img src="static/uploads/hots_2.jpg" alt="">
            </a>
          </div>
        </div>
        <div class="entry">
          <div class="head">
            <a href="javascript:;">星球大战：原力觉醒视频演示 电影票68</a>
          </div>
          <div class="main">
            <p class="info">admin 发表于 2015-06-29</p>
            <p class="brief">星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯，星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯，星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯，星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯，星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯</p>
            <p class="extra">
              <span class="reading">阅读(3406)</span>
              <span class="comment">评论(0)</span>
              <a href="javascript:;" class="like">
                <i class="fa fa-thumbs-up"></i>
                <span>赞(167)</span>
              </a>
              <a href="javascript:;" class="tags">
                分类：<span>星球大战</span>
              </a>
            </p>
            <a href="javascript:;" class="thumb">
              <img src="static/uploads/hots_2.jpg" alt="">
            </a>
          </div>
        </div>
        <div class="entry">
          <div class="head">
            <a href="javascript:;">星球大战：原力觉醒视频演示 电影票68</a>
          </div>
          <div class="main">
            <p class="info">admin 发表于 2015-06-29</p>
            <p class="brief">星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯，星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯，星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯，星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯，星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯</p>
            <p class="extra">
              <span class="reading">阅读(3406)</span>
              <span class="comment">评论(0)</span>
              <a href="javascript:;" class="like">
                <i class="fa fa-thumbs-up"></i>
                <span>赞(167)</span>
              </a>
              <a href="javascript:;" class="tags">
                分类：<span>星球大战</span>
              </a>
            </p>
            <a href="javascript:;" class="thumb">
              <img src="static/uploads/hots_2.jpg" alt="">
            </a>
          </div>
        </div> -->

        <!-- 遍历数组，动态生成结构 -->
        <?php foreach ($postArr as $value): ?>
          <div class="entry">
            <div class="head">
              <a href="detail.php?postId=<?php echo $value['id']; ?>"><?php echo $value['title'] ?></a>
            </div>
            <div class="main">
              <p class="info"><?php echo $value['nickname'] ?> 发表于 <?php echo $value['created'] ?></p>
              <p class="brief"><?php echo $value['content'] ?></p>
              <p class="extra">
                <span class="reading">阅读(<?php echo $value['views'] ?>)</span>
                <span class="comment">评论(<?php echo $value['commentCount'] ?>)</span>
                <a href="javascript:;" class="like">
                  <i class="fa fa-thumbs-up"></i>
                  <span>赞(<?php echo $value['likes'] ?>)</span>
                </a>
                <a href="javascript:;" class="tags">
                  分类：<span><?php echo $value['name'] ?></span>
                </a>
              </p>
              <a href="javascript:;" class="thumb">
                <img src="<?php echo $value['feature'] ?>" alt="">
              </a>
            </div>
          </div>
        <?php endforeach ?>


        <!-- 加载更多的按钮功能 -->
        <div class="loadmore">
          <span class="btn">加载更多</span>
        </div>


      </div>
    </div>
    <div class="footer">
      <p>© 2016 XIU主题演示 本站主题由 themebetter 提供</p>
    </div>
  </div>
  <script src="static/assets/vendors/jquery/jquery.js"></script>
  <script>
    
    $(function(){
      //定义一个变量，记录当前是第几次获取数据
      var currentPage = 1;

      //给加载更多的按钮注册点击事件
      $(".loadmore .btn").on("click",function () { 
        // 获取文章的分类id
        var categoryId = location.search.split("=")[1];
        //每次点击加载更多，都是获取下一次的数据
        currentPage++;

        // 请求后台，加载更多的跟当前分类相关的数据
        $.ajax({
             url: 'api/_getMorePost.php',
             type: 'POST',
             data: {categoryId:categoryId,currentPage:currentPage,pageSize:10},
             success:function (res) {
               console.log(res);
               // 判断该次请求有没有数据
               if(res.code == 1){
                // 遍历数组，动态生成结构
                var data = res.data;
                $.each(data, function(index, val) {
                   var str = '<div class="entry">\
          <div class="head">\
            <a href="detail.php?postId='+ val["id"] +'">'+ val['title'] +'</a>\
          </div>\
          <div class="main">\
            <p class="info">'+ val['nickname'] +' 发表于 '+ val['created'] +'</p>\
            <p class="brief">'+ val['content'] +'</p>\
            <p class="extra">\
              <span class="reading">阅读('+ val['views'] +')</span>\
              <span class="comment">评论('+ val['commentCount'] +')</span>\
              <a href="javascript:;" class="like">\
                <i class="fa fa-thumbs-up"></i>\
                <span>赞('+ val['likes'] +')</span>\
              </a>\
              <a href="javascript:;" class="tags">\
                分类：<span>'+ val['name'] +'</span>\
              </a>\
            </p>\
            <a href="javascript:;" class="thumb">\
              <img src="'+ val['feature'] +'" alt="">\
            </a>\
          </div>\
        </div>';

                var entry = $(str);
                // console.log(entry);
                entry.insertBefore('.loadmore');

                });


                // 生成结构完毕之后，需要判断一下，这次获取文章数据是不是已经是最后的数据了
                // 假设 99 篇文章 ， 每次获取10篇 ， 一共可以获取 10次
                // 最大的获取次数 = ceil(总的文章数 / 每次获取的数量)
                // 如果当前的次数跟最大的次数一样了，就是最后一次获取了
                // 就不应该再显示加载更多了
                // 计算出最大的获取次数
                var maxPage = Math.ceil(res.pageCount / 10);
                // 判断当前的次数是不是已经是最大的次数了
                if(currentPage == maxPage){
                  // 隐藏加载更多的按钮
                  $(".loadmore .btn").hide();
                }
               }
             }
           });
      });
    });

  </script>
</body>
</html>