<?php
    require_once('functions\functions.php');
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Panel :: Login </title>
        <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css"/>
        <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <div class="container">
            <div id="loginbox" style="margin-top:100px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>
                    <div style="padding-top:30px" class="panel-body" >

                        <div id="login-alert" class="alert alert-danger col-sm-12">
                          <?php
                              if(!empty($_POST)){
                                $username = $_POST['username'];
                                $password = md5($_POST['password']);
                                $query = "SELECT * FROM `cs_user` WHERE `user_username` = '$username' AND `user_password`='$password'";
                                $reQuery = mysqli_query($con,$query);
                                $value = mysqli_fetch_assoc($reQuery);
                                if ($value) {
                                  $_SESSION['id']=$value['user_id'];
                                  $_SESSION['name']=$value['user_name'];
                                  $_SESSION['username']=$value['user_username'];
                                  $_SESSION['email']=$value['user_email'];
                                  $_SESSION['phone']=$value['user_phone'];
                                  $_SESSION['role']=$value['role_id'];
                                  header("Location: index.php?e=".$_SESSION['name']);
                                }
                                else {
                                  echo "Password Or Username does not match";
                                }
                              }
                              else {
                                echo "Username Can't be Empty";
                              }

                           ?>

                        </div>
                        <form id="loginform" class="form-horizontal" role="form" method="post">

                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="username" placeholder="username or email">
                            </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                            </div>
                            <div class="input-group">
                                <div class="checkbox">
                                    <label>
                                        <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                    </label>
                                </div>
                            </div>
                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->

                                <div class="col-sm-12 controls">
                                    <button type="submit" id="btn-login" class="btn btn-success">Login  </button>
                                    <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                        Don't have an account!

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>
    </body>
</html>
