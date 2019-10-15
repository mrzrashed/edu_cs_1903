<?php
    require_once('functions\functions.php');
    needLogged();
    if($_SESSION['role']=='1'){
    get_header();
    get_sidebar();
    if (!empty($_POST)) {
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password=md5($_POST['password']);
        $rePassword=md5($_POST['rePassword']);
        $role = $_POST['role'];
        $image = $_FILES['pic'];
        if(!empty($image['name'])){
          $imageName = 'user_'.time().'_'.rand(100000,1000000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
        }
        else {
          $imageName='';
        }
        $sql="INSERT INTO `cs_user`(`user_name`, `user_phone`, `user_email`, `user_username`, `user_password`, `user_photo`,`role_id`) VALUES ('$name','$phone','$email','$username','$rePassword','$imageName','$role')";
        if (!empty($name)) {
            if (!empty($phone)) {
                if (!empty($email)) {
                    if (!empty($username)) {
                        if (!empty($password)) {
                            if ($password == $rePassword) {
                                if (mysqli_query($con, $sql)) {
                                    move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
                                    echo "Success";
                                } else {
                                    echo "Failed";
                                }
                            } else {
                                echo "Password Doesn't Match";
                            }
                        } else {
                            echo "Please Enter Password & Confirm Password";
                        }
                    } else {
                        echo "Please Enter Your Username";
                    }
                } else {
                    echo "Please Enter Your Email";
                }
            } else {
                echo "Please Enter Your Phone Number";
            }
        } else {
            echo "Please Enter Your Name";
        }
    }
?>
<div class="col-md-12">
    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    User Registration
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
                        <input type="text" class="form-control" placeholder="" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Phone</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="" name="phone">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" placeholder="" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="" name="username">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" placeholder="" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Confirm Password</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" placeholder="" name="rePassword">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">User Role</label>
                    <div class="col-sm-4">
                        <select class="form-control select_cus" name="role">
                            <option value="">Select User Role</option>
                            <?php
                            $rQuery="SELECT *FROM cs_role ORDER BY role_id ASC";
                              $rolQuery=mysqli_query($con,$rQuery);
                              while($uRole = mysqli_fetch_assoc($rolQuery)){
                                ?>
                            <option value="<?= $uRole['role_id']?>"><?= $uRole['role_name']?></option>
                          <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Upload Photo</label>
                    <div class="col-sm-8">
                        <input type="file" name="pic">
                    </div>
                </div>
            </div>
            <div class="panel-footer text-center">
                <button type="submit" class="btn btn-sm btn-primary">REGISTRATION</button>
            </div>
        </div>
    </form>
</div>
<!--col-md-12 end-->
<?php
    get_footer();
  }else {
    $message="You are not authorise";
    header("Location: error_access.php?e=".$message);
  }
?>
