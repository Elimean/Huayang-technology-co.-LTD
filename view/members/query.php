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
              <li><a href="index.php">首页</a></li>
              <li class="active"><a href="#">查询</a></li>
              <li><a href="index_mem_add.php">添加会员</a></li>
              <li><a href="../../controller/unset/index.php">退出</a></li>
            </ul>
          </section>
        </nav>
      </div>
    </div>
    <div style="padding:20px" class="row">
      <div class="small-12 columns">
        <ul class="square">
          <?php if ($query->num_rows>0) {
            while ($row=$query->fetch_assoc()) {?>
              <li><a class="button tiny radius" href="search_get.php?p=<?php echo $row["id"]?>"><?php echo $row["mem_name"].":".$row["mem_tel"];?></a></li>
           <?php
            }
          }?>
        </ul>
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
