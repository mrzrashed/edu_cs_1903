<?php
    require_once('functions\functions.php');
    needLogged();
    if($_SESSION['role']=='1'){
    get_header();
    get_sidebar();

      $date = new DateTime("now", new DateTimeZone('Asia/Dhaka') );

    if (!empty($_POST)) {
        $quick_link_title=$_POST['quick_link_title'];
        $quick_link_url=$_POST['quick_link_url'];
        $user_id = $_SESSION['id'];
        $date = $date->format('Y-m-d H:i:s');
        $sql="INSERT INTO `cs_footer_quick_link`(`quick_link_title`, `quick_link_url`, `created_at`) VALUES ('$quick_link_title','$quick_link_url','$date')";
        if (!empty($quick_link_title)) {
            if (!empty($quick_link_url)) {
                if(mysqli_query($con, $sql)){
                  echo "Success";
                }
                else {
                  echo "Failed";
                }
            }
            else {
                    echo "Quick Link Url Required";
                }
        }
        else {
                echo "Quick Link Title Required";
            }
  }
?>
<div class="col-md-12">
    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    Add Quick Link Informations
                </div>
                <div class="col-md-3 text-right">
                    <a href="all-quick-link.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Quick Link</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Quick Link Title</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="" name="quick_link_title">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Quick Link Url</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="" name="quick_link_url">
                    </div>
                </div>
            </div>
            <div class="panel-footer text-center">
                <button type="submit" class="btn btn-sm btn-primary">Upload Quick Link</button>
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
