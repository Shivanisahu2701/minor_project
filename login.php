<?php include 'database/conn.php';?>
<?php
   if(isset($_POST["login"])){
    $query ="select * from student where (enroll='$_POST[enroll]' AND pass ='$_POST[pass]')";
    $query_run = mysqli_query($conn,$query);
    if(mysqli_num_rows($query_run)){
        while($row = mysqli_fetch_assoc($query_run)){
        echo "<script>
        window.location.href ='student.php';
        </script>";
        }
    }
    else{
        echo "<script>alert('Please enter correct id and password');
        window.location.href ='login.php';
        </script>";
    }
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv ="refresh" content="">
    <title>Login</title>
    <script src="bootstrap/bootstrap/js/bootstrap.min.js" charset="UTF-8"></script>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    
    <div class="wrapper">
        <form action="login.php" method="POST">
            <h1>Student Login</h1>
            <div class="input_box">
                <input type="text" placeholder="Enrollment No." name="enroll" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input_box">
                <input type="password" placeholder="Password" name="pass" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="rem_for">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forget Password</a>
            </div>

            <div class="login">
                <p>Login as <a href="login.php" name="stu">Student</a>/<a href="adminlogin.php" name="adm">Admin</a></p>
            </div>
            <button type="submit" class="btn" name="login">Login</button>

            <div class="reg_link">
                <p>Don't have an account ? <a href="lreg.php"> Register</a></p>
            </div>
        </form>
    </div>
    
</body>
</html>