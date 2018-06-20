<?php
session_start();
if (!isset($_SESSION['admin_name'])) {
  echo "<script>window.location.href='../../view/index/index.php'</script>";
}
require_once("../../database/database.php");
$imei=$_GET["imei"];
 ?>
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
              <li class="active"><a href="#">添加服务</a></li>
              <li><a href="index.php">返回会员管理</a></li>
              <li><a href="../../controller/unset/index.php">退出</a></li>
            </ul>
          </section>
        </nav>
      </div>
    </div>
    <div style="padding:20px" class="row">
      <div class="small-12 columns">
        <form class="" action="../../controller/mtn_add/index.php" method="post">
          <input type="hidden" name="imei" value="<?php echo $imei;?>">
          <label for="after_sales">售后：
            <textarea name="after_sales" rows="4" cols="10"></textarea>
          </label>
          <label for="maintenance">维修：
            <textarea name="maintenance" rows="4" cols="10"></textarea>
          </label>
          <label for="mtn_name">维修人：
            <input type="text" name="mtn_name" placeholder="请输入维修人姓名">
          </label>
          <label for="note">备注：
            <textarea name="note" rows="4" cols="10"></textarea>
          </label>
          <input class="button radius tiny" type="submit" name="submit" value="添加服务">
        </form>
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
