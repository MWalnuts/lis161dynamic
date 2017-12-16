<?php include 'database.php'; 


    // Secure homepage
    if (!isset($_SESSION['username'])) {
      $_SESSION['warning'] = "You need to log-in to access this page";
      //redirect user
      header("location: login.php");
    }
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    //Prepare query
    $query = "SELECT * FROM users WHERE id=$id";
    //Perform query
    $edit_record = mysqli_query($con,$query);
    //Convert record to array
    $edit_array = mysqli_fetch_array($edit_record);

    //Assign variables
    $username = $edit_array['username'];
    $name = $edit_array['name'];
    $password = $edit_array['password'];
    $email = $edit_array['email'];

    //set edit state to true
    $edit_state = true;



  }



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Account Details</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>


<body>
<div class="container">

  <!-- Alert for CRUD Operations-->
  <?php if (isset($_SESSION['message'])) { ?>
  <div class="alert alert-success">
    <?php echo $_SESSION['message']; 
          unset($_SESSION['message']);
    ?>
  </div>
  <?php } ?>

  <!-- Alert for User Registration-->
  <?php if (isset($_SESSION['success'])) { ?>
  <div class="alert alert-success">
    <?php echo $_SESSION['success']; 
          unset($_SESSION['success']);
    ?>
  </div>
  <?php } ?>

  <!-- Dashboard -->
  <div class="well">
    <?php if (isset($_SESSION['username'])) { ?>
      <p>Good day,    <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p><a href="server.php?logout=1" class="btn btn-danger">Logout</a></p> &emsp; &emsp; <p><a href="index.php" class="btn btn-success">Home</a></p>
    <?php } ?>
  </div>

<?php if ($edit_state==true) { ?>
  
  <div class="well">
    <h2 class="text-center h_title"><p class="p_title">Edit Your Information Here!<p></h2>
      <form method="POST" action="database.php">
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="username">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" required>
          </div>
          <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email"  value="<?php echo $email; ?>" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="password">Password</label>
            <input type="text" class="form-control" name="password"  value="<?php echo $password; ?>" required>
          </div>
        </div>
        <?php if ($edit_state) { ?>
          <button type="submit" class="btn btn-primary" name="update">Update</button>
          <a class="btn btn-warning" href="index2.php">Cancel</a>
        <?php }  ?>
      </form>
  </div>
 <?php  } ?>
  <!-- End of Form -->


  <!-- Display of Data in a Table Format -->
  <div class="well">
    <p class="ayyy"><h1>Your Information</h1></p>
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
        </tr>
      </thead>
      <tbody>
       <?php $i = 0;
           while  ($row = mysqli_fetch_array($student_records)) { ?>
        <tr>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['password']; ?></td>
          <td><a class="btn btn-warning" href="index2.php?edit=<?php echo $row['id']; ?>">Edit</a>
          <a class="btn btn-danger" href="index2.php?del=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>

    
      </tbody>
    </table>
  </div>
    <!-- End of Display of Data in a Table Format -->
    
</div>
</body>
</html>