<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="dashboard.css">
    <title>Dashboard</title>
    <script src="jQuery/juqery_latest.js" charset="utf-8"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $("#edit_profile_button").click(function(){
          $("#main_content").load('edit_profile.php');
        });

        $("#view_notice_button").click(function(){
          $("#main_content").load('view_notice.php');
        });

      });
    </script>
</head>
<body>
        <div class="side-menu">
            <div class="hms">
                <h1>HMS</h1>
            </div>
            <ul>
                <li><i class="material-icons md-36" >dashboard</i><a href="#">Dashboard</a></li>
                <li><i class="material-icons md-36" >person_add_alt</i><a href="addstud.php">Add Students</a></li>
                <li><i class="material-icons md-36" >bedroom_parent</i><a href="admin.html">Room</a></li>
                <li><i class="material-icons md-36" >event_note</i><a href="notice.php">Notice</a></li>
                <li><i class="material-icons md-36" >sync_problem</i><a href="complaint.html">Complaint</a></li>
                <li><i class="material-icons md-36" >logout</i><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="main-content">
            <h1>Welcome Admin</h1>
        </div>
    
</body>
</html>