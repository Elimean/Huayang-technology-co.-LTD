<?php
session_start();
if (!isset($_SESSION['admin_name'])) {
  echo "<script>window.location.href='../../view/index/index.php'</script>";
}
require_once("../../database/database.php");
$imei=$_GET["p"];
$sql="select * from t_service_info where imei='$imei'";
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
            <li class="active"><a href="#">查询服务</a></li>
            <li><a href="maintenance_add.php?imei=<?php echo $imei;?>">添加服务</a></li>
            <li><a href="index.php">返回会员管理</a></li>
            <li><a href="../../controller/unset/index.php">退出</a></li>
          </ul>
        </section>
      </nav>
    </div>
  </div>
  <div style="padding:20px" class="row">
    <div class="small-12 columns">
      <table>
        <thead>
          <tr>
            <th>IMEI：</th>
            <th>售后：</th>
            <th>维修：</th>
            <th>维修日期</th>
            <th>维修人：</th>
            <th>取机日期</th>
            <th>备注：</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody>
        <?php if ($query->num_rows>0) {
            while ($row=$query->fetch_assoc()) {?>
              <tr>
                <th><?php echo $row["imei"];?></th>
                <th><?php echo $row["after_sales"];?></th>
                <th><?php echo $row["maintenance"];?></th>
                <th><?php echo $row["mtn_data"];?></th>
                <th><?php echo $row["mtn_name"];?></th>
                <th><?php echo $row["mtn_take_data"];?></th>
                <th><?php echo $row["note"]?></th>
                <th><a class="button tiny radius success" href="../../controller/mtn_take_data/index.php?id=<?php echo $row["id"]?>">确定取机</a></th>
              </tr>
        <?php }}else {?>
              <tr>
                <th><?php echo "无记录！";?></th>
              </tr>
        <?php }?>
        </tbody>
      </table>
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
