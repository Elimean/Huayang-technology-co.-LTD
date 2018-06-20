<?php
session_start();
if (!isset($_SESSION['admin_name'])) {
  echo "<script>window.location.href='../../view/index/index.php'</script>";
}
require_once("../../database/database.php");
date_default_timezone_set("Asia/Shanghai");
$id=$_GET["id"];
$mtn_take_data=date("Y/m/d H:i:s");
$sql="update t_service_info set mtn_take_data='$mtn_take_data' where id='$id'";
$query=$conn->query($sql);
if ($query) {
   echo "<script>alert('提交成功！');window.location.href='../../view/members/index.php'</script>";
}else {
   echo "<script>alert('提交失败！');window.location.href='../../view/members/index.php'</script>";
}
 ?>
