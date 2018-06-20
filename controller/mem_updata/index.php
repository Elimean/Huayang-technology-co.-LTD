<?php
session_start();
if (!isset($_SESSION['admin_name'])) {
  echo "<script>window.location.href='../../view/index/index.php'</script>";
}
require_once("../../database/database.php");
date_default_timezone_set("Asia/Shanghai");
$mem_id=$_POST["id"];
$mem_name=$_POST["mem_name"];
$mem_tel=$_POST["mem_tel"];
$imei_1=$_POST["imei_1"];
$imei_2=$_POST["imei_2"];
$mem_score=$_POST["mem_score"];
$mem_data=date("Y/m/d H:i:s");
if (empty($mem_name)||empty($mem_tel)||empty($imei_1)) {
    echo "<script>alert('姓名、联系电话、IMEI_1不能为空！');window.location.herf='../../view/members/index.php'</script>";
}else {
    $sql="update t_member_info set mem_name='$mem_name',mem_tel='$mem_tel',imei_1='$imei_1',imei_2='$imei_2',mem_score='$mem_score',mem_data='$mem_data' where id='$mem_id'";
    $query=$conn->query($sql);
  }
if ($query) {
   echo "<script>alert('修改成功！');window.location.href='../../view/members/index.php'</script>";
}else {
   echo "<script>alert('修改失败！');window.location.href='../../view/members/index.php'</script>";
}
$query->close();
 ?>
