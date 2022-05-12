<?php 

include('../layouts/head.php');

// user edit form data
//include("../config/db_connect.php");
include("../function.php");
$id = $_GET['id'];
$select_user_data = "SELECT * FROM `users` WHERE `id` = '$id'";
$select_user_data_result = mysqli_query($conn, $select_user_data);
$user_data = mysqli_fetch_assoc($select_user_data_result);
// user update
if (isset($_POST['submit'])) {

    $data = [
        'id' => $_GET['id'],
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'phone' => $_POST['phone'],
        'address' => $_POST['address']

    ];
    $table = update_data_user($conn, $data);
    if ($table) {
        header("Location: index.php");
    }else{

        echo "Failed to insert data";
    } 
}

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
     <form action="#" method="POST">
      <input type="hidden" value="<?php echo $user_data['id'] ?>">
      <div class="form-group">
       <label for="name">Name</label>
       <input type="text" class="form-control" id="name" name="username" value="<?php echo $user_data['username'] ?> ">
      </div>
      <div class="form-group">
       <label for="email">Email</label>
       <input type="email" class="form-control" id="email" name="email" value="<?php echo $user_data['email'] ?> ">
      </div>
      <div class="form-group">
       <label for="password">Password</label>
       <input type="password" class="form-control" id="password" name="password" value="<?php echo $user_data['password'] ?> ">
      </div>
      <div class="form-group">
       <label for="phone">Phone</label>
       <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $user_data['phone'] ?>">
      </div>
      <div class="form-group">
       <label for="address">Address</label>
       <input type="text" class="form-control" id="address" name="address" value="<?php echo $user_data['address'] ?>">
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