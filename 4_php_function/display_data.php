
<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "project_db";

$conn = mysqli_connect($host, $user, $pass, $db);

// get user data function
function get_users_table_data($conn)
{
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    $users_table_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $users_table_data;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
 <div class="container">
  <div class="row">
   <div class="col-lg-8">
    <div class="card">
     <div class="card-header">
      <h1>User Data Display</h1>
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
            echo "<a href='edit_user_form.php?id=" . $user['id'] . "' class='btn btn-primary'>Edit</a>";
            echo "<a href='user_delete.php?id=" . $user['id'] . "' class='btn btn-danger'>Delete</a>";
          echo "</tr>";
      }
      ?>
     </table>
     </div>
    </div>
   </div>
   <div class="col-lg-4">
       <div class="card">
           <div class="card-header">
                <h1>Insert Data</h1>
           </div>
              <div class="card-body">
                    <form action="insert_data_process.php" method="POST">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Create User"/>
                        </div>
                    </form>
              </div>
       </div>
       <!-- edit form -->
         <div class="card">
              <div class="card-header">
                 <h1>Edit Data</h1>
              </div>
                <div class="card-body">
                    <form action="edit_data_process.php" method="POST"> <!-- edit_data_process.php -->

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Edit User"/>
        </div>
    </form>
   </div>
  </div>
 </div>
</body>
</html>