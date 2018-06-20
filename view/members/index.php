<?php
session_start();
if (!isset($_SESSION['admin_name'])) {
  echo "<script>window.location.href='../../view/index/index.php'</script>";
}
require_once("../../database/database.php");
$sql="select * from t_member_info";
$query=$conn->query($sql);
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
             <li class="active"><a href="#">首页</a></li>
             <li><a href="query.php">查询</a></li>
             <li><a href="index_mem_add.php">添加会员</a></li>
             <li><a href="../../controller/unset/index.php">退出</a></li>
           </ul>
         </section>
       </nav>
     </div>
   </div>
   <!--搜索-->
   <div class="row">
     <div class="small-12 columns">
       <form action="search.php" method="post">
         搜索：
         <input type="text" name="mem_search" placeholder="请输入姓名或电话进行搜索...." >
         <input class="button small radius success" type="submit" name="submit" value="搜索">
       </form>
     </div>
   </div>
   <div class="row">
     <div class="small-12 columns">
       
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
