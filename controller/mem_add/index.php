<?php
session_start();
if (!isset($_SESSION['admin_name'])) {
  echo "<script>window.location.href='../../view/index/index.php'</script>";
}
require_once("../../database/database.php");
date_default_timezone_set("Asia/Shanghai");
$mem_name=$_POST["mem_name"];
$mem_tel=$_POST["mem_tel"];
$imei_1=$_POST["imei_1"];
$imei_2=$_POST["imei_2"];
$mem_score=$_POST["mem_score"];
$mem_data=date("Y/m/d H:i:s");
if (empty($mem_name) || empty($mem_tel) || empty($imei_1)) {
  echo "<script>alert('姓名、联系电话、IMEI_1不能为空！');window.location.href='../../view/members/index_mem_add.php'</script>";
}else {
  $sql="insert into t_member_info (mem_name,mem_tel,imei_1,imei_2,mem_score,mem_data) values ('$mem_name','$mem_tel','$imei_1','$imei_2','$mem_score','$mem_data')";
  $query=$conn->query($sql);
}
if ($query) {
   echo "<script>alert('添加成功！');window.location.href='../../view/members/index.php'</script>";
}else {
   echo "<script>alert('添加失败！');window.location.href='../../view/members/index.php'</script>";
}
$conn->close();
 ?>
