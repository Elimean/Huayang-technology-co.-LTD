<?php
$server="localhost";
$username="root";
$pwd="168168";
$dbname="db_huayang";
$conn=new mysqli($server,$username,$pwd,$dbname);
if ($conn->connect_error) {
  dir("数据库连接失败".$conn->connect_error);
}
 ?>
