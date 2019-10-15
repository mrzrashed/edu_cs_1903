<?php
require_once('functions\functions.php');
needLogged();
if($_SESSION['role']=='1'){
get_header();
get_sidebar();
$id=$_GET['e'];
$query = "SELECT * FROM `cs_user` WHERE `user_id`='$id'";
$reQuery = mysqli_query($con,$query);
$value = mysqli_fetch_array($reQuery);

if(!empty($_POST)){
  $eid = $_POST['eid'];
  $name = $_POST['name'];
  $phone = $_POST['user_phone'];
  if(!empty($name)){
    if(!empty($phone)){
      $insertQuery = "UPDATE `cs_user` SET `user_name`='$name',`user_phone`='$phone' WHERE `user_id`='$eid'";
      $checkQuery=mysqli_query($con,$insertQuery);
      if($checkQuery){
        echo "success";
        header("Location: edit-user.php?e=".$id);
        exit();
      }
      else {
        echo "Failed";
      }
    }
    else {
      echo "Please Enter Phone Number";
    }
  }
  else {
    echo "Please Enter Name";
  }
}
 ?>
<div class="col-md-12">
    <form class="form-horizontal" action="" method="post">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    Update User Information
                </div>
                <div class="col-md-3 text-right">
                    <a href="all-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All User</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-8">
                        <input type="hidden" name="eid" value="<?= $value['user_id']?>">
                        <input type="text" class="form-control" placeholder="" name="name" value="<?= $value['user_name']?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Phone</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="" name="user_phone" value="<?= $value['user_phone']?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" placeholder="" value="<?= $value['user_email']?>" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="" value="<?= $value['user_username']?>" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">User Role</label>
                    <div class="col-sm-4">
                        <select class="form-control select_cus">
                            <option value="">Select User Role</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Upload Photo</label>
                    <div class="col-sm-8">
                        <input type="file" name="">
                    </div>
                </div>
            </div>
            <div class="panel-footer text-center">
                <button type="submit" class="btn btn-sm btn-primary">Update Information</button>
            </div>
        </div>
    </form>
</div>
<!--col-md-12 end-->

<?php
get_footer();
}
else {
  $message="You are not authorise";
  header("Location: error_access.php?e=".$message);
}
?>
