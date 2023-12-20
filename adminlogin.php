<?php include 'database/conn.php';?>
<?php
   if(isset($_POST["login"])){
    $query ="select * from admin where (emp='$_POST[emp]' AND pass ='$_POST[pass]')";
    $query_run = mysqli_query($conn,$query);
    if(mysqli_num_rows($query_run)){
        while($row = mysqli_fetch_assoc($query_run)){
        echo "<script>
        window.location.href ='admind.php';
        </script>";
        }
    }
    else{
        echo "<script>alert('Please enter correct id and password');
        window.location.href ='adminlogin.php';
        </script>";
    }
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--bootstrap files-->
    <script src="bootstrap/bootstrap/js/bootstrap.min.js" charset="UTF-8"></script>
    <!--css files-->
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="adminlogin.php" method="POST" >
            <h1>Admin Login</h1>
            <div class="input_box">
                <input type="text" placeholder="Employee Id"  name="emp" required>
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

            <button type="submit" class="btn " name="login">Login</button>

            <div class="back">
                <a href="login.php">Go Back</a>
            </div>

            <div class="reg_link">
                <p>Don't have an account? <a href="areg.php">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>