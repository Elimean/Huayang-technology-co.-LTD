<!DOCTYPE html>
<html ng-app="ionicApp">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.bootcss.com/foundation/5.5.3/css/foundation.min.css">
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/foundation/5.5.3/js/foundation.min.js"></script>
    <script src="https://cdn.bootcss.com/foundation/5.5.3/js/vendor/modernizr.js"></script>
    <title>华洋科技有限公司</title>
  </head>
  <body>
    <!--导航栏-->
    <div class="row">
      <div class="small-12 columns">
        <nav class="top-bar" data-topbar>
          <ul class="title-area">
            <li class="name">
              <h1><a href="#">华洋科技</a></h1>
            </li>
            <li class="toggle-topbar menu-icon">
              <a href="#"><span>目录</span></a>
            </li>
          </ul>
          <!--导航栏按钮-->
          <section class="top-bar-section">
            <ul class="left">
              <li class="active"><a href="#">首页</a></li>
              <li><a href="#">活动推送</a></li>
              <li><a data-reveal-id="mem_login" href="#">会员管理</a></li>
            </ul>
          </section>
        </nav>
      </div>
    </div>
    <!--会员管理登录模态框-->
    <div style="padding:10px" id="mem_login" class="reveal-modal" data-reveal>
      <h3>会员管理登录</h3>
      <form action="../../controller/login/index.php" method="post">
        <label for="name">用户名：
          <input type="text" name="admin_name" placeholder="请输入用户名...">
        </label>
        <label for="pwd">密码：
          <input type="password" name="admin_pwd" placeholder="请输入密码...">
        </label>
        <input class="button round" type="submit" name="submit" value="登录">
      </form>
      <a class="close-reveal-modal">&times;</a>
    </div>
    <div style="padding:10px" class="row">
      <div class="small-12 columns">
        <img src="../../public/pic/index/index_pic.jpg" alt="loading">
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <img src="../../public/pic/index/cotent_pic.jpg" alt="loading">
      </div>
    </div>
    <!--初始化 Foundation JS-->
    <script>
      $(document).ready(function(){
        $(document).foundation();
      })
    </script>
  </body>
</html>
