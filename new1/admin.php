<?php include 'conn.php';?>
<?php
session_start();
if(isset($_POST['edit'])){
  $db = mysqli_select_db($conn,"hms");
  $query = "update student set fname='$_POST[fname]',lname='$_POST[lname]',enroll='$_POST[enroll]',email='$_POST[email]',pass='$_POST[pass]' where enroll='$_POST[enroll]'";
  $query_run = mysqli_query($conn,$query);
  if($query_run){
    echo "<script type='text/javascript'>
    alert('Profile Updated successfully...');
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
    <title>User Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="dash.css">
    <!-- Bootstrap files -->
    <script src="bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <!-- CSS File -->
    <link rel="stylesheet" href="css/style.css">
    <script src="bootstrap1/jquery/juqery_latest.js" charset="utf-8"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $("#edit_profile_button").click(function(){
          $("#main_content").load('profile.php');
        });

        $("#view_notice_button").click(function(){
          $("#main_content").load('view_notice.php');
        });

      });
    </script>
  </head>
  <body>
    <!-- Header section code start here  -->
    
    <div id="container">
<div class="hms" style="background-color:tomato;" >
  <h1>HMS</h1>
    </div></div>
    <section >
      <div class="row" >
        <div class="col-md-2" id="left_sidebar" style="padding-left:20px;">
          <button style="background-color:tomato;" type="button" name="edit" class="btn btn-primary btn-block" id="edit_profile_button"><i class="material-icons md-36">person</i>Edit Profile</button>
          <button  style="background-color:tomato;" type="button" class="btn btn-primary btn-block" id="edit_profile_button"><i class="material-icons md-36">bedroom_parent</i>Rooms</button>
          <button style="background-color:tomato;" type="button" class="btn btn-warning btn-block" id="view_notice_button"><i class="material-icons md-36">event_note</i>View All Notices</button>
          <button style="background-color:tomato;" type="button" class="btn btn-primary btn-block" id="edit_profile_button"><i class="material-icons md-36">sync_problem</i>Add Complaint</button>
          <a  style="background-color:tomato;" href="logout.php" type="button" class="btn btn-success btn-block"><i class="material-icons md-36">logout</i>Logout</a><br>
        </div>
        <div class="col-md-8" id="main_content">
          <h2>Welcome to user Dashboard</h2>
          <p>
          This is the admin Dashboard page. Here admin can mangage notice board system. He can create a notice, delete a notice and all the replies of the notice.</p>
          <p>
          This is the admin Dashboard page. Here admin can mangage notice board system. He can create a notice, delete a notice and all the replies of the notice.</p>
          <p>
          This is the admin Dashboard page. Here admin can mangage notice board system. He can create a notice, delete a notice and all the replies of the notice.</p>
        </div>
      </div>
     
    </section>
  </body>
</html>
