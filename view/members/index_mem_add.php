<?php
session_start();
if (!isset($_SESSION['admin_name'])) {
  echo "<script>window.location.href='../../view/index/index.php'</script>";
}
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
             <li><a href="index.php">首页</a></li>
             <li><a href="query.php">查询</a></li>
             <li class="active"><a href="#">添加会员</a></li>
             <li><a href="../../controller/unset/index.php">退出</a></li>
           </ul>
         </section>
       </nav>
     </div>
   </div>
   <div style="padding:20px" class="row">
     <div class="small-12 columns">
       <form action="../../controller/mem_add/index.php" method="post">
         <label for="name">姓名：
           <input type="text" name="mem_name" placeholder="请输入会员姓名">
         </label>
         <label for="tel">联系电话：
         <input type="text" name="mem_tel" placeholder="请输入联系电话">
         </label>
         <label for="imei_1">IMEI_1：
           <input type="text" name="imei_1" placeholder="请输入您的IMEI">
         </label>
         <label for="imei_2">IMEI2：
           <input type="text" name="imei_2" placeholder="请输入您的IMEI">
         </label>
         <label for="score">积分：
         <input type="text" name="mem_score" placeholder="请输入会员的积分">
         </label>
         <input class="button" type="submit" name="submit" value="注册">
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
