<?php 
include('Auth.php');
$auth = new Auth();
$auth = Auth::check();
include('config/db_connect.php');
include('class/user_class.php');

$user_table = new UserTable($conn);
$user_table_data = $user_table->get_users_table_data($conn);

// echo "<pre>";
// print_r($user_table_data);
// echo "</pre>";
?>

<?php 




// $auth = Auth::check();
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
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
  <div class="x_title">
    <h2>User Lists</small></h2>
    <ul class="nav navbar-right panel_toolbox">
      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Settings 1</a>
          </li>
          <li><a href="#">Settings 2</a>
          </li>
        </ul>
      </li>
      <li><a class="close-link"><i class="fa fa-close"></i></a>
      </li>
    </ul>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <p class="text-muted font-13 m-b-30">
      DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
    </p>
    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
      <thead>
        <tr>
          <th>
<th><input type="checkbox" id="check-all" class="flat"></th>
</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Address</th>
          <th>Start date</th>
          <th>Updated_at</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($user_table_data as $user_list): ?>
        <tr>
          <td>
<th><input type="checkbox" id="check-all" class="flat"></th>
</td>
          <td><?php echo $user_list['username'] ?></td>
          <td><?php echo $user_list['email'] ?></td>
          <td><?php echo $user_list['phone'] ?></td>
          <td><?php echo $user_list['address'] ?></td>
          <td><?php echo $user_list['created_at'] ?></td>
          <td><?php echo $user_list['updated_at'] ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
</div>

</div>
        <!-- /page content -->

        <!-- footer content -->
        <?php include('layouts/footer.php') ?>
