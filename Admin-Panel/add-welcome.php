<?php
    require_once('functions\functions.php');
    needLogged();
    if($_SESSION['role']=='1'){
    get_header();
    get_sidebar();
    $date = new DateTime("now", new DateTimeZone('Asia/Dhaka') );
    if (!empty($_POST)) {
        $wc_title=$_POST['wc_title'];
        $wc_details=trim(htmlentities($_POST['wc_details']));
        $wc_btn=$_POST['wc_btn'];
        $wc_url=$_POST['wc_url'];
        $user_id = $_SESSION['id'];
        $date = $date->format('Y-m-d H:i:s');
        $image = $_FILES['pic'];
        if(!empty($image['name'])){
          $imageName = 'welcome_'.time().'_'.rand(100000,1000000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
        }
        else {
          echo "Image Required On banner";
          exit();
          $imageName='';
        }
        $sql="INSERT INTO `cs_welcome`(`welcome_title`, `welcome_details`, `welcome_btn`, `welcome_url`, `welcome_photo`, `created_at`) VALUES ('$wc_title','$wc_details','$wc_btn','$wc_url','$imageName','$date')";
        if (!empty($wc_title)) {
            if (!empty($wc_details)) {
                if (!empty($wc_btn)) {
                    if (!empty($wc_url)) {
                        if (!empty($imageName)) {
                                if (mysqli_query($con, $sql)) {
                                    move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
                                    echo "Success";
                                } else {
                                    echo "Failed";
                                }
                            } else {
                                echo "Image Is Required";
                            }
                        } else {
                            echo "Welcome Url Required";
                        }
                    } else {
                        echo "Welcome Button Required";
                    }
                } else {
                    echo "Welcome Details Required";
                }
            } else {
                echo "Welcome Title Required";
            }
  }
?>
<div class="col-md-12">
    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    Add Welcome Informations
                </div>
                <div class="col-md-3 text-right">
                    <a href="all-welcome.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Welcome Table</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Welcome Title</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="" name="wc_title">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Welcome Details</label>
                    <div class="col-sm-8">
                        <textarea name="wc_details" class="form-control" rows="8" cols="80"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Welcome Btn</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="" name="wc_btn">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Welcome Url</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="" name="wc_url">
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
                <button type="submit" class="btn btn-sm btn-primary">Upload Welcome Notes</button>
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
