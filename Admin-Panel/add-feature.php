<?php
    require_once('functions\functions.php');
    needLogged();
    if($_SESSION['role']=='1'){
    get_header();
    get_sidebar();

      $date = new DateTime("now", new DateTimeZone('Asia/Dhaka') );

    if (!empty($_POST)) {
        $feature_title=$_POST['feature_title'];
        $feature_details=$_POST['feature_details'];
        $user_id = $_SESSION['id'];
        $date = $date->format('Y-m-d H:i:s');
        $sql="INSERT INTO `cs_feature`(`feature_title`, `feature_details`, `created_at`) VALUES ('$feature_title','$feature_details','$date')";
        if (!empty($feature_title)) {
            if (!empty($feature_details)) {
                if(mysqli_query($con, $sql)){
                  echo "Success";
                }
                else {
                  echo "Failed";
                }
            }
            else {
                    echo "Features Title is Required";
                }
        }
        else {
                echo "Features Detailsis Required";
            }
  }
?>
<div class="col-md-12">
    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    Add Feature Informations
                </div>
                <div class="col-md-3 text-right">
                    <a href="all-feature.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Feature</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Feature Title</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="" name="feature_title">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Feature Dtails</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="" name="feature_details">
                    </div>
                </div>
            </div>
            <div class="panel-footer text-center">
                <button type="submit" class="btn btn-sm btn-primary">Upload Feature</button>
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
