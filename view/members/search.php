<?php
session_start();
if (!isset($_SESSION['admin_name'])) {
  echo "<script>window.location.href='../../view/index/index.php'</script>";
}
require_once("../../database/database.php");
  $search=$_POST["mem_search"];
  $sql_mem_name="select * from t_member_info where mem_name='$search'";
  $sql_mem_tel="select * from t_member_info where mem_tel='$search'";
  $query_mem_name=$conn->query($sql_mem_name);
  $query_mem_tel=$conn->query($sql_mem_tel);?>
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
    <div style="padding:20px" class="row">
      <div class="small-12 columns">
        <div class="responsive">
          <table>
          <thead>
            <tr>
              <th>姓名</th>
              <th>电话</th>
              <th>IMEI1</th>
              <th>IMEI2</th>
              <th>积分</th>
              <th>注册时间</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
      <?if ($query_mem_name->num_rows>0) {
        while ($row_mem_name=$query_mem_name->fetch_assoc()) {?>
        <tr>
          <td><?php echo $row_mem_name["mem_name"];?></td>
          <td><?php echo $row_mem_name["mem_tel"];?></td>
          <td><a class="button round secondary tiny" href="maintenance.php?p=<?php echo $row_mem_name["imei_1"];?>"><?php echo $row_mem_name["imei_1"];?></a></td>
          <td><a class="button round secondary tiny" href="maintenance.php?p=<?php echo $row_mem_name["imei_2"];?>"><?php echo $row_mem_name["imei_2"];?></a></td>
          <td><?php echo $row_mem_name["mem_score"];?></td>
          <td><?php echo $row_mem_name["mem_data"];?></td>
          <td><a href="mem_updata.php?id=<?php echo $row_mem_name["id"];?>;" class="button radius tiny warning">修改</a><a href="../../controller/mem_del/index.php?del=<?php echo $row_mem_name["id"];?>" class="button radius tiny alert">删除</a></td>
        </tr>
        <?php }
      }else if ($query_mem_tel->num_rows>0) {
         while ($row_mem_tel=$query_mem_tel->fetch_assoc()) {?>
           <tr>
             <td><?php echo $row_mem_tel["mem_name"];?></td>
             <td><?php echo $row_mem_tel["mem_tel"];?></td>
             <td><a class="button round secondary tiny" href="maintenance.php?p=<?php echo $row_mem_tel["imei_1"];?>"><?php echo $row_mem_tel["imei_1"];?></a></td>
             <td><a class="button round secondary tiny" href="maintenance.php?p=<?php echo $row_mem_tel["imei_2"];?>"><?php echo $row_mem_tel["imei_2"];?></a></td>
             <td><?php echo $row_mem_tel["mem_score"];?></td>
             <td><?php echo $row_mem_tel["mem_data"];?></td>
             <td><a href="mem_updata.php?id=<?php echo $row_mem_tel["id"];?>" class="button radius tiny warning">修改</a><a href="../../controller/mem_del/index.php?del=<?php echo $row_mem_tel["id"];?>" class="button radius tiny alert">删除</a></td>
           </tr>
         <?php }
      }
      else {?>
           <tr>
             <td><?php echo "无记录！" ?></td>
           </tr>
      <?php }?>
        </tbody>
      </table>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="samll-1 columns">
        <a class="button secondary small round" href="index.php">返回</a>
      </div>
    </div>
  </body>
</html>
