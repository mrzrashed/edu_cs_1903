<?php
    require_once('functions\functions.php');
    needLogged();
    if($_SESSION['role']=='1'){
    get_header();
    get_sidebar();

      $date = new DateTime("now", new DateTimeZone('Asia/Dhaka') );

    if (!empty($_POST)) {
        $course_title=$_POST['course_title'];
        $course_subtitle=$_POST['course_subtitle'];
        $course_url=$_POST['course_url'];
        $course_category = $_POST['course_category'];
        $image = $_FILES['pic'];
        if(!empty($image['name'])){
          $imageName = 'course_'.time().'_'.rand(100000,1000000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
          $imageThm = $_FILES['pic_thub'];
          if(!empty($imageThm['name'])){
            $imageNameThm = 'thumb_'.time().'_'.rand(100000,1000000000).'.'.pathinfo($imageThm['name'],PATHINFO_EXTENSION);
          }
        }
        else {
          echo "Image Required On banner";
          exit();
          $imageName='';
          $imageNameThm='';
        }
        $sql="INSERT INTO `cs_course`(`course_title`, `course_subtitle`, `course_category`, `course_link`, `course_photo`, `course_thumb`) VALUES ('$course_title','$course_subtitle','$course_category','$course_url','$imageName','$imageNameThm')";
        if (!empty($course_title)) {
            if (!empty($course_subtitle)) {
                if (!empty($course_url)) {
                    if (!empty($course_category)) {
                        if (!empty($imageName)) {
                          if (!empty($imageNameThm)) {
                                if (mysqli_query($con, $sql)) {
                                    move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
                                    move_uploaded_file($imageThm['tmp_name'],'uploads/'.$imageNameThm);
                                    echo "Success";
                                }

                               else {
                                    echo "Failed";
                                }
                              }
                              else {
                                echo "Thumline Picture";
                              }
                            } else {
                                echo "Image Is Required";
                            }
                        } else {
                            echo "Course Category Required";
                        }
                    } else {
                        echo "Course url Required";
                    }
                } else {
                    echo "Course Subtitle Required";
                }
            } else {
                echo "Course Title Required";
            }
  }
?>
<div class="col-md-12">
    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    Add Course Informations
                </div>
                <div class="col-md-3 text-right">
                    <a href="all-course.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Course</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Course Title</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="" name="course_title">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Course Subtitle</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="" name="course_subtitle">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Course Details URL</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="" name="course_url">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Course Category</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="course_category">
                            <option value="CSE">CSE</option>
                            <option value="SWE">SWE</option>
                            <option value="BBA">BBA</option>
                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Upload Course Photo</label>
                    <div class="col-sm-8">
                        <input type="file" name="pic">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Upload Thumb Photo</label>
                    <div class="col-sm-8">
                        <input type="file" name="pic_thub">
                    </div>
                </div>
            </div>
            <div class="panel-footer text-center">
                <button type="submit" class="btn btn-sm btn-primary">Upload Course Thamline</button>
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
