<?php 
include("../function.php");
include('../layouts/head.php');

?>
<body>
<div class="container">
 <?php include('../layouts/navbar.php'); ?>
</div>
 <?php 
 
 
include('../layouts/header.php');

?>

<div class="container">
 <div class="row">
  <div class="col-md-12">
   <div class="card">
    <div class="card-header">
     <h1 class="p-2 text-left text-white bg-secondary">User List <span><a href="create.php" class="btn btn-warning btn-lg">User Create</a></span></h1>
    </div>
    <div class="card-body">
     <table class="table">
      <tr>
       <th>ID</th>
       <th>Name</th>
       <th>Email</th>
       <th>Password</th>
       <th>Action</th>
      </tr>
      <?php 
      $users_table_data = get_users_table_data($conn);
      foreach($users_table_data as $user) {
          echo "<tr>";
          echo "<td>" . $user['id'] . "</td>";
          echo "<td>" . $user['username'] . "</td>";
          echo "<td>" . $user['email'] . "</td>";
          echo "<td>" . $user['password'] . "</td>";
            echo "<td>";
            echo "<a href='edit.php?id=" . $user['id'] . "' class='btn btn-primary'>Edit</a>";
            echo "<a href='../actions/user_delete.php?id=" . $user['id'] . "' class='btn btn-danger'>Delete</a>";
          echo "</tr>";
      }
      ?>
     </table>
    </div>
   </div>
  
  </div>
 </div>
</div>


<?php 
include('../layouts/footer.php');

?>