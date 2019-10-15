<?php
require_once('functions\functions.php');
needLogged();
get_header();
get_sidebar();
 ?>
<div class="col-md-12">
  <div class="panel panel-primary">
      <div class="panel-heading">
          <div class="col-md-9 heading_title">
              Top Header
          </div>
          <div class="col-md-3 text-right">
              <a href="all-header.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i>All Header</a>
              <a href="add-header.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i>Add Header</a>
          </div>
          <div class="clearfix"></div>
      </div>
  </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="col-md-9 heading_title">
                Banner
            </div>
            <div class="col-md-3 text-right">
                <a href="all-banner.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i>All Banner</a>
                <a href="add-banner.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i>Add Banner</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="col-md-9 heading_title">
              Welcome Sikkha
            </div>
            <div class="col-md-3 text-right">
                <a href="all-welcome.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i>All Welcomes</a>
                <a href="add-welcome.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i>Add Welcome</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="col-md-9 heading_title">
              Course
            </div>
            <div class="col-md-3 text-right">
                <a href="all-course.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i>All Courses</a>
                <a href="add-course.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i>Add Course</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="col-md-8 heading_title">
              Footer
            </div>
            <div class="col-md-4 text-right">
                <a href="all-quick-link.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i>All Quick Link</a>
                <a href="add-quick-link.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i>Add Quick Link</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-8 heading_title">
                  Features
                </div>
                <div class="col-md-4 text-right">
                    <a href="all-feature.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i>All Feature</a>
                    <a href="add-feature.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i>Add Features</a>
                </div>
                <div class="clearfix"></div>
            </div>
    </div>
</div>
<!--col-md-12 end-->
<?php get_footer() ?>
