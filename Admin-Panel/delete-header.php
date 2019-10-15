<?php
  require_once('functions\functions.php');
  $id = $_GET['d'];
  if($_SESSION['role']=='1'){
  $query = "delete from cs_top_header_footer WHERE id='$id'";
  mysqli_query($con,$query);
  header("Location: all-user.php");
  exit();
}
  else {
    $message="You are not authorise";
    header("Location: error_access.php?e=".$message);
  }
?>
