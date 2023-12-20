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
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Dashboard</title>
    <script src="bootstrap/jQuery/juqery_latest.js" charset="utf-8"></script>

    <script type="text/javascript">
        $(document).ready(function(){
        $("#addstud").click(function(){
          $("#main").load('addstud.php');
        });

        $("#room").click(function(){
          $("#main").load('room.php');
        });

        $("#notice").click(function(){
          $("#main").load('notice.php');
        });

        $("#comp").click(function(){
          $("#main").load('compa.php');
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
                <li><i class="material-icons md-36" >person_add_alt</i><button type="submit" id="addstud">Add Students</button></li>
                <li><i class="material-icons md-36" >bedroom_parent</i><button type="submit" id="room">Room</button></li>
                <li><i class="material-icons md-36" >event_note</i><button type="submit" id="notice">Notice</button></li>
                <li><i class="material-icons md-36" >sync_problem</i><button type="submit" id="comp">Complaint</button></li>
                <li><i class="material-icons md-36" >logout</i><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="main-content" id="main">
            <h1 id="ex">Welcome Admin</h1>
        </div>
    
</body>
</html>