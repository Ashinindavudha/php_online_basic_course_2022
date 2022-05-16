<?php 
include('layouts/head.php');

?>
<body>
<div class="container">
 <?php include('layouts/navbar.php'); ?>
</div>
 <?php 
 
 
include('layouts/header.php');

?>

<div class="container">
 <div class="row">
  <div class="col-md-8">
   <h1>User Login</h1>
   <form action="actions/login.php" method="post">
    <div class="form-group">
     <label for="email">Email address</label>
     <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
     <label for="password">Password</label>
     <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
  
  <div class="form-group">
     
     <input type="submit" class="form-control btn btn-primary" value="Login">
    </div>
  </div>
 </div>
</div>


<?php 
include('layouts/footer.php');

?>