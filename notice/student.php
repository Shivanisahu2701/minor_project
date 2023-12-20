<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 , shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="dashboard.css">
    <!--jquery files-->
    <script src="bootstrap1/jquery/juqery_latest.js" charset="utf-8"></script>

    <script type="text/javascript">
        $(document).ready(function(){
        $("#prof").click(function(){
          $("#main-").load('personal.php');
        });


      });
    </script>
    <title>Dashboard</title>
</head>
<body>
        <div class="side-menu">
            <div class="hms">
                <h1>HMS</h1>
            </div>
            <ul>
                <li><i class="material-icons md-36" >dashboard</i><a href="#">Dashboard</a></li>
                <li><i class="material-icons md-36" >person</i><button id="prof">Profile</button></li>
                <li><i class="material-icons md-36" >bedroom_parent</i><a href="admin.html">Room</a></li>
                <li><i class="material-icons md-36" >event_note</i><a href="notice.html">Notice</a></li>
                <li><i class="material-icons md-36" >sync_problem</i><a href="comp.php">Add Complaint</a></li>
                <li><i class="material-icons md-36" >logout</i><a href="logout.php">Logout</a></li>
            </ul>
        <!--div class="logout">
            <i class="material-icons md-36" >logout</i><a href="index.html">Logout</a></li>
        </div-->
        </div>
        <div class="main-content" id="main">
            <h1>Welcome Student</h1>
        </div>
</body>
</html>