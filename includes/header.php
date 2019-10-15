<?php
  require_once('config.php');
  $link = explode('/',$_SERVER['PHP_SELF']);
  $page = $link[2];
  $query = "SELECT * FROM `cs_top_header_footer` ORDER BY `id` DESC LIMIT 1";
  $reQuery = mysqli_query($con,$query);
  $value = mysqli_fetch_array($reQuery);
 ?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sikkha</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <!-- header-start -->
    <header id="home">
        <div class="header-area">
            <!-- header-top -->
            <div class="header-top primary-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="header-contact-info d-flex">
                                <div class="header-contact header-contact-phone">
                                    <span class="ti-headphone"></span>
                                    <p class="phone-number"><?php echo $value['phone']; ?></p>
                                </div>
                                <div class="header-contact header-contact-email">
                                    <span class="ti-email"></span>
                                    <p class="email-name"><?php echo $value['email']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="header-social-icon-list">
                                <ul>
                                    <li><a href="<?php echo $value['fb_url'] ?>"><span class="ti-facebook"></span></a></li>
                                    <li><a href="<?php echo $value['twitter_url'] ?>"><span class="ti-twitter-alt"></span></a></li>
                                    <li><a href="<?php echo $value['dribbble_url'] ?>"><span class="ti-dribbble"></span></a></li>
                                    <li><a href="<?php echo $value['google_url'] ?>"><span class="ti-google"></span></a></li>
                                    <li><a href="<?php echo $value['pinterest'] ?>"><span class="ti-pinterest"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /end header-top -->
            <!-- header-bottom -->
            <div class="header-bottom-area header-sticky" style="transition: .6s;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="img/logo/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-6 col-6">
                            <div class="header-bottom-icon f-right">
                                <ul>
                                    <li class="toggle-search-icon"><a href="#"><span class="ti-search"></span>
                                            <div class="toggle-search-box">
                                                <form action="#" id="searchbox">
                                                    <input placeholder="Search" type="text">
                                                    <button class="button-search"><span class="ti-search"></span></button>
                                                </form>
                                            </div>
                                        </a>

                                    </li>
                                    <li class="shopping-cart"><a href="#"><span class="ti-shopping-cart"></span>
                                            <span class="shopping-counter">0</span>
                                        </a></li>
                                </ul>
                            </div>
                            <div class="main-menu f-right">
                                <nav id="mobile-menu" style="display: block;">
                                    <ul>
                                        <li><a <?php if ($page == 'index.php'){ echo "class='active'";}?> href="index.php">Home</a></li>
                                        <li><a <?php if ($page == 'about.php'){ echo "class='active'";}?> href="about.php">About Us</a></li>
                                        <li><a <?php if ($page == 'course.php'){ echo "class='active'";}?> href="course.php">Course</a></li>
                                        <li><a <?php if ($page == 'event.php'){ echo "class='active'";}?> href="event.php">Event</a></li>
                                        <li><a <?php if ($page == 'blog.php'){ echo "class='active'";}?> href="blog.php">Blog</a></li>
                                        <li><a <?php if ($page == 'contact.php'){ echo "class='active'";}?> href="contact.php">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /end header-bottom -->
        </div>
    </header>
