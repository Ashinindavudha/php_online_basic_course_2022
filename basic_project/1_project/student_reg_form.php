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
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.vi.min.js"></script> -->
<div class="container">
 <div class="row">
  <div class="col-md-8">
   <h1>Student Registration Form</h1>
   <form action="actions/register.php" method="post">
    <div class="form-group">
     <label for="name">Name</label>
     <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
     <label for="Gender">Gender</label>
     <select name="gender" id="" class="form-select" aria-label="Default select example">
      <option value="gender">Gender</option>
      <option value="male">Male</option>
      <option value="felmale">Female</option>
     </select>
    </div>
    <div class="form-group">
     <label for="date" class="col-1 col-form-label">Date</label>
    
        <div class="input-group date" id="datepicker">
            <input type="text" class="form-control">
            <span class="input-group-append">
                <span class="input-group-text bg-white">
                    <i class="fa fa-calendar"></i>
                </span>
            </span>
        </div>
</div>
  
    <div class="form-group">
     <label for="name">Father Name</label>
     <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
     <label for="name">Mother Name</label>
     <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
     <label for="name">Teacher</label>
     <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
   </form>
 </div>
<?php 
include('layouts/footer.php');

?>

<script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>