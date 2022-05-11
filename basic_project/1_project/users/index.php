<?php 
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
      <thead>
       <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Action</th>
       </tr>
     </table>
    </div>
   </div>
  
  </div>
 </div>
</div>


<?php 
include('../layouts/footer.php');

?>