<?php
session_start();
if (!isset($_SESSION['admin_name'])) {
  echo "<script>window.location.href='../../view/index/index.php'</script>";
}
require_once("../../database/database.php");
$mem_id=$_GET["id"];
$sql="select * from t_member_info where id='$mem_id'";
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
       <div style="padding:20px" class="row">
         <div class="small-12 columns">
           <form action="../../controller/mem_updata/index.php" method="post">
             <?if ($query->num_rows>0) {
                   while ($row=$query->fetch_assoc()) {?>
             <input type="hidden" name="id" value="<?php echo $row["id"];?>">
             <label for="name">姓名：
               <input type="text" name="mem_name" value="<?php echo $row["mem_name"];?>">
             </label>
             <label for="tel">联系电话：
             <input type="text" name="mem_tel" value="<?php echo $row["mem_tel"];?>">
             </label>
             <label for="imei_1">IMEI_1：
               <input type="text" name="imei_1" value="<?php echo $row["imei_1"];?>">
             </label>
             <label for="imei_2">IMEI2：
               <input type="text" name="imei_2" value="<?php echo $row["imei_2"];?>">
             </label>
             <label for="score">积分：
             <input type="text" name="mem_score" value="<?php echo $row["mem_score"];?>">
             </label>
             <input class="button radius warning tiny" type="submit" name="submit" value="修改">
           <?php }}?>
           </form>
           <a class="button radius secondary tiny" href="index.php">返回</a>
         </div>
       </div>
     </div>
   </div>
   </body>
 </html>
