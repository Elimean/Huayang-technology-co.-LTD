<?php
session_start();
require_once("../../database/database.php");
$admin_name=$_POST["admin_name"];
$_SESSION['admin_name']=$admin_name;
$admin_pwd=$_POST["admin_pwd"];
$sql="select * from admin where admin_name='$admin_name' and admin_pwd='$admin_pwd'";
$query=$conn->query($sql);
if ($query->num_rows>0) {
   echo "<script>window.location.href='../../view/members/index.php'</script>";
}else {
   echo "<script>alert('用户名或密码不正确！');window.location.href='../../view/index/index.php'</script>";
}
$conn->close();
 ?>
