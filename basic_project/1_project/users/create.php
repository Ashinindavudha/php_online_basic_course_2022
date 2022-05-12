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
  <div class="col-md-8">
   <div class="card">
    <div class="card-header">
     <h1 class="p-2 text-left text-white bg-secondary">User Create <span><a href="create.php" class="btn btn-warning btn-lg">Back</a></span></h1>
    </div>
    <div class="card-body">
     <form action="../actions/user_create.php" method="POST">
      <div class="form-group">
       <label for="name">Name</label>
       <input type="text" class="form-control" id="name" name="username" placeholder="Enter name">
      </div>
      <div class="form-group">
       <label for="email">Email</label>
       <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
      </div>
      <div class="form-group">
       <label for="password">Password</label>
       <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
      </div>
      <div class="form-group">
       <label for="phone">Phone</label>
       <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
      </div>
      <div class="form-group">
       <label for="address">Address</label>
       <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
      </div>
      <div class="form-group mt-5">
       
       <input type="submit" name="submit" class=" btn btn-primary form-control">
      </div>
     </form>
    </div>
   </div>
  
  </div>
 </div>
</div>


<?php 
include('../layouts/footer.php');

?>