<?php 


include('Auth.php');
$auth = new Auth();
//$auth->check();

$auth = Auth::check();
//print_r($auth);
//check();
include('layouts/head.php'); 
?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0">
              <a href="index.html" class="site_title"
                ><i class="fa fa-paw"></i> <span>IT Empire Groug</span></a
              >
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <?php include('layouts/menu_profile.php') ?>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <?php include('layouts/sidebar.php') ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <?php include('layouts/menu_footer_button.php') ?>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <?php include('layouts/top_navbar.php') ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          
          <!-- /top tiles -->

          
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php include('layouts/footer.php') ?>