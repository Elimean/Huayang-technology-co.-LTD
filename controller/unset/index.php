<?php
session_start();
if (isset($_SESSION["admin_name"])) {
  unset($_SESSION["admin_name"]);
  echo "<script>window.location.href='../../view/index/index.php'</script>";
}
 ?>
