<?php
session_start();
if (!isset($_SESSION['admin_name'])) {
  echo "<script>window.location.href='../../view/index/index.php'</script>";
}
require_once("../../database/database.php");
date_default_timezone_set("Asia/Shanghai");
$imei=$_POST["imei"];
$after_sales=$_POST["after_sales"];
$maintenance=$_POST["maintenance"];
$mtn_data=date("Y/m/d H:i:s");
$mtn_name=$_POST["mtn_name"];
$note=$_POST["note"];
if (empty($mtn_name)) {
    echo "<script>alert('维修人不能为空！');window.location.href='../../view/members/index.php'</script>";
}elseif (empty($after_sales)&&empty($maintenance)) {
    echo "<script>alert('售后或维修不能为空！');window.location.href='../../view/members/index.php'</script>";
}else{
$sql="insert into t_service_info (imei,after_sales,maintenance,mtn_data,mtn_name,note) values ('$imei','$after_sales','$maintenance','$mtn_data','$mtn_name','$note')";
$query=$conn->query($sql);
}
if ($query) {
  echo "<script>alert('添加成功！');window.location.href='../../view/members/maintenance.php?p=".$imei."'</script>";
}else {
  echo "<script>alert('添加失败！');window.location.href='../../view/members/maintenance.php?p=".$imei."'</script>";
}
$query->coles();
 ?>
