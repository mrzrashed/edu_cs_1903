<?php
    require_once('functions\functions.php');
    needLogged();
    if($_SESSION['role']=='1'){
    get_header();
    get_sidebar();
    $date = new DateTime("now", new DateTimeZone('Asia/Dhaka') );
    if (!empty($_POST)) {
      $pone=$_POST['phone'];
      $email =$_POST['email'];
      $fburl = $_POST['fb_url'];
      $twitter_url = $_POST['twitter_url'];
      $google_url = $_POST['google_url'];
      $dribbble_url = $_POST['dribbble_url'];
      $pinterest_url = $_POST['pinterest'];
      $address = $_POST['address'];
      $openDay = $_POST['openDay'];
      $openTime = $_POST['openTime'];
      $closeTime = $_POST['closeTime'];
      $sql = "INSERT INTO `cs_top_header_footer`(`phone`, `email`, `fb_url`, `twitter_url`, `dribbble_url`, `google_url`, `pinterest`, `address`, `open_day`, `open_time`, `close_time`) VALUES ('$pone','$email','$fburl','$twitter_url','$dribbble_url','$google_url','$pinterest_url','$address','$openDay','$openTime','$closeTime')";
      if(mysqli_query($con,$sql)){
        echo "Success";
      }
      else{
          "Fail";
      }
    }
    else{

    }
?>
<div class="col-md-12">
    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    Add Header Informations
                </div>
                <div class="col-md-3 text-right">
                    <a href="all-header.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Header</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Header Phone</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="" name="phone">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Header Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" placeholder="" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Facebook Url</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="" name="fb_url">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Twitter Url</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="" name="twitter_url">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Goolge Url</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="" name="google_url">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Dribbble Url</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="" name="dribbble_url">
                    </div>
                </div>
              <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Pinterest Url</label>
                  <div class="col-sm-8">
                      <input type="text" class="form-control" placeholder="" name="pinterest">
                  </div>
              </div>
              <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Address</label>
                  <div class="col-sm-8">
                      <input type="text" class="form-control" placeholder="" name="address">
                  </div>
              </div>
              <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Open Days</label>
                  <div class="col-sm-8">
                      <select class="form-control" name="openDay">
                          <option value="Sun - Sat">Sun - Sat</option>
                          <option value="Mon - Sun">Mon - Sun</option>
                          <option value="Tue - Mon">Tue - Mon</option>
                          <option value="Wed - Tue">Wed - Tue</option>
                          <option value="Thu - Wed">Thu - Wed</option>
                          <option value="Fri - Thu">Fri - Thu</option>
                          <option value="Sat - Fri">Sat - Fri</option>
                      </select>
                  </div>
              </div>
              <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Openning Time</label>
                  <div class="col-sm-8">
                      <input type="time" class="form-control" placeholder="10.00AM" name="openTime">
                  </div>
              </div>
              <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Closing Time</label>
                  <div class="col-sm-8">
                      <input type="time" class="form-control" placeholder="10.00PM" name="closeTime">
                  </div>
              </div>
            </div>
            <div class="panel-footer text-center">
                <button type="submit" class="btn btn-sm btn-primary">Upload Social</button>
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
