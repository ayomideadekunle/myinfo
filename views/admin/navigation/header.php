<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- <title>Ayomide Personal Website</title> -->

  <!-- Bootstrap -->
  <link href="<?php echo USER_ASSETS;?>css/bootstrap.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?php echo USER_ASSETS;?>css/font-awesome.css" rel="stylesheet">
  <!-- Custom Theme Style -->
  <link href="<?php echo ADMIN_ASSETS;?>build/css/custom.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo ADMIN_ASSETS;?>datepicker/datepicker3.css">
  <script src="<?php echo USER_ASSETS;?>js/jquery-2.1.4.min.js"></script>

  <style>
  h5,h6{
    text-align:center;
  }
  @media print {
    .btn-print {
      display:none !important;
    }
    .main-footer	{
      display:none !important;
    }
    .box.box-primary {
      border-top:none !important;
    }
    .nav_menu {
      display:none;
    }
    footer{
      display:none;
    }

  }

  </style>
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="<? echo URL;?>index" class="site_title"><i class="fa fa-paw"></i> <span><? echo $_SESSION["fullname"];?></span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="<? echo USER_ASSETS;?>images/ayo.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome</span>
              <h2><? echo $_SESSION["fullname"];?></h2>
            </div>
          </div>

          <br />
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>Menu</h3>
              <ul class="nav side-menu">
                    <li><a href="<?php echo URL;?>index"><i class="fa fa-user"></i> About<span class="fa fa-chevron-right"></span></a>
                    <!-- <li><a href="<?php echo URL;?>index/projects"><i class="fa fa-file"></i> Projects<span class="fa fa-chevron-right"></span></a></li> -->
                    <li><a href="<?php echo URL;?>index/skills"><i class="fa fa-briefcase"></i> Skills <span class="fa fa-chevron-right"></span></a></li>
                    <li><a href="<?php echo URL;?>index/education"><i class="fa fa-book"></i> Education<span class="fa fa-chevron-right"></span></a>
                    <li><a href="<?php echo URL;?>index/experience"><i class="fa fa-desktop"></i> Experience <span class="fa fa-chevron-right"></span></a></li>
                  </ul>
                </div>

              </div>

            </div>
</div>
