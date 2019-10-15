<?php
require_once('functions\functions.php');
needLogged();
get_header();
get_sidebar();
$id=$_GET['v'];
$query = "SELECT * FROM `cs_course` WHERE `course_id`='$id'";
$reQuery = mysqli_query($con,$query);
$value = mysqli_fetch_array($reQuery);
 ?>
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="col-md-9 heading_title">
                Course Information
            </div>
            <div class="col-md-3 text-right">
                <a href="all-course.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> All Course</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <div class="col-md-1">
            </div>
            <div class="col-md-9">
                <table class="table table-hover table-striped table-responsive view_table_cus">
                    <tr>
                        <td>Tittle</td>
                        <td>:</td>
                        <td><?php echo $value['course_title'];?></td>
                    </tr>
                    <tr>
                        <td>Subtitle</td>
                        <td>:</td>
                        <td><?php echo $value['course_subtitle'];?></td>
                    </tr>
                    <tr>
                        <td>Course Url</td>
                        <td>:</td>
                        <td><?= $value['course_link'];?></td>
                    </tr>
                    <tr>
                        <td>Course Photo</td>
                        <td>:</td>
                        <td>
                          <?php
                              if ($value['course_photo']!='') {
                           ?>
                          <img src="uploads\<?= $value['course_photo']?>" height="100" alt="">
                          <?php
                              }
                              else {
                           ?>
                             <img src="uploads\avatar.jpg" height="100" alt="">

                           <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Course Author</td>
                        <td>:</td>
                        <td>
                          <?php
                              if ($value['course_thumb']!='') {
                           ?>
                          <img src="uploads\<?= $value['course_thumb']?>" height="100" alt="">
                          <?php
                              }
                              else {
                           ?>
                             <img src="uploads\avatar.jpg" height="100" alt="">

                           <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Course Category</td>
                        <td>:</td>
                        <td><?= $value['course_category']?></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="panel-footer">
            <div class="col-md-4">
                <a href="#" class="btn btn-sm btn-primary">PDF</a>
                <a href="#" class="btn btn-sm btn-success">PRINT</a>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4 text-right">

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--col-md-12 end-->
<?php get_footer() ?>
