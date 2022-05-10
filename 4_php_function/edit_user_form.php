<?php
// user edit form data
include("db_connect.php");
include("function.php");
$id = $_GET['id'];
$select_user_data = "SELECT * FROM `users` WHERE `id` = '$id'";
$select_user_data_result = mysqli_query($conn, $select_user_data);
$user_data = mysqli_fetch_assoc($select_user_data_result);
// echo "<pre>";
// print_r($user_data);
// echo "</pre>";
// echo $user_data['username'];
// echo $user_data['email'];
// echo $user_data['password'];
// echo $user_data['id'];
// echo $user_data['created_at'];
// echo $user_data['updated_at'];
// echo "<br>";
// echo "<br>";
// user update
if (isset($_POST['submit'])) {

    $data = [
        'id' => $_GET['id'],
        'username' => $_POST['name'],
        'password' => $_POST['password'],
        'email' => $_POST['email']
    ];
    $table = update_data_user($conn, $data);
    if ($table) {
        header("Location: display_data.php");
    }else{

        echo "Failed to insert data";
    } 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>User Edit</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
 <div class="container">
  <div class="row">
   <div class="col-lg-8">
    <div class="card">
     <div class="card-header">
      <h1>User Edit</h1>
     </div>
     <div class="card-body">
     <form action="#" method="POST">
      <input type="hidden" value="<?php echo $user_data['id'] ?>">
      <div class="form-group">
       <label for="name">Name</label>
       <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="<?php echo $user_data['username'] ?>">
      </div>
      <div class="form-group">
       <label for="email">Email</label>
       <input type="email" class="form-control" name="email" id="email" value="<?php echo $user_data['email'] ?>">
      </div>
      <div class="form-group">
       <label for="password">Password</label>
       <input type="text" class="form-control" name="password" id="password" value="<?php echo $user_data['username'] ?>">
      </div>
      <div class="form-group">
       <input type="submit" name="submit" class="btn btn-primary" value="Update User"/>
      </div>
    </div>
    </div>
</body>
</html>