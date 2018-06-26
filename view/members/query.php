<?php
session_start();
if (!isset($_SESSION['admin_name'])) {
  echo "<script>window.location.href='../../view/index/index.php'</script>";
}
require_once("../../database/database.php");
$page=$_GET['p'];
$pagesize=8;
$sql_page="select * from t_member_info limit ".($page-1)*$pagesize.",".$pagesize;
$sql_total="select count(*) from t_member_info";
$query=$conn->query($sql_page);
$query_total=$conn->query($sql_total);
$row_total=$query_total->fetch_array();
$row_count=$row_total[0];
$row_page=ceil($row_count/$pagesize);
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
        <ul class="pagination">
          <li <?php if($page==1){echo"class=unavailable";}?>><a href="<?php echo $_SERVER['PHP_SELF']?>?p=<?php echo $page-1;?>">上一页</a></li>
          <li <?php if($page==$row_page){echo"class=unavailable";}?>><a href="<?php echo $_SERVER['PHP_SELF']?>?p=<?php echo $page+1;?>">下一页</a></li>
       </ul>
       <ul class="pagination">
         <li>第<?php echo $page;?>页</li>
         <li>共<?php echo $row_page;?>页</li>
         <li>共<?php echo $row_count;?>条信息</li>
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
