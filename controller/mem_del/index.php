<?php
session_start();
if (!isset($_SESSION['admin_name'])) {
  echo "<script>window.location.href='../../view/index/index.php'</script>";
}
require_once("../../database/database.php");
$del_id=$_GET["del"];
$sql="delete from t_member_info where id='$del_id'";
$query=$conn->query($sql);
if ($query) {
    echo "<script>alert('删除成功！');window.location.href='../../view/members/index.php'</script>";
}else {
    echo "<script>alert('删除失败！');window.location.href='../../view/members/index.php'</script>";
}
$query->close();
 ?>
