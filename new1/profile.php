<?php include 'conn.php';?>
<?php
  session_start();
  $db = mysqli_select_db($conn,"hms");
  $fname = "";
  $lname = "";
  $enroll = "";
  $email = "";
  $pass = "";
  $query1 = "select * from student ";
  $query1_run = mysqli_query($conn,$query1);
  while($row = mysqli_fetch_assoc($query1_run)){
    $fname = $row['fname'];
    $lname = $row['lname'];
    $enroll = $row['enroll'];
    $email = $row['email'];
    $pass = $row['pass'];
    }
  if(isset($_POST['update_profile'])){
    $db = mysqli_select_db($conn,"hms");
    $query = "update student set fname='$_POST[fname]',lname='$_POST[lname]',enroll='$_POST[enroll]',email='$_POST[email]',pass='$_POST[pass]' where enroll='$_POST[enroll]'";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
      echo "<script type='text/javascript'>alert('Profile Updated successfully...');
      window.location.href = 'student.php'
      </script>";
    }
    else{
      echo "<script type='text/javascript'>
      alert('Can't update try again...');
      window.location.href = 'student.php'
      </script>";
    }
  }

    
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
    <link rel="stylesheet" href="dash.css">
    <script src="bootstrap1/jquery/juqery_latest.js" charset="utf-8"></script>

    <script type="text/javascript">
  </head>
  <body>
    <div class="container">
    <form action="" method="POST">
      <div class="form-group">
        <label>First Name:</label>
        <input type="text" class="form-control" name="fname" value="<?php echo $fname;?>">
      </div>
      <div class="form-group">
        <label>Last Name:</label>
        <input type="text" class="form-control" name="lname" value="<?php echo $lname;?>">
      </div>
      <div class="form-group">
        <label>Enroll:</label>
        <input type="text" class="form-control" name="enroll" value="<?php echo $enroll;?>">
      </div>
      <div class="form-group">
        <label>Email:</label>
        <input type="email" class="form-control" name="email" value="<?php echo $email;?>">
      </div>
      <div class="form-group">
        <label>Password:</label>
        <input type="password" class="form-control" name="pass" value="<?php echo $pass;?>">
      </div>
      
      <button type="submit" name="update_profile" class="btn btn-primary">Update</button>
    </div>
    </form>
  </body>
</html>
