<?php include 'database/conn.php';?>
<?php
   if(isset($_POST["submit"])){
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    // Check if passwords match
    if ($pass !== $cpass) {
        echo "<script>alert('Passwords do not match'); window.location.href ='lreg.php';</script>";
        exit;
    }

    // Hash the password before storing it (recommended for security)
    $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

    $query ="insert into admin values(null,'$_POST[fname]','$_POST[lname]','$_POST[emp]','$_POST[email]','$pass','$cpass')";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo "<script>alert('Rgistertion Successfully');
        window.location.href ='adminlogin.php';
        </script>";
    }
    else{
        echo "<script>alert('Rgistertion Failed.....Try again');
        window.location.href ='areg.php';
        </script>";
    }
   }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <!--link rel="stylesheet" type="text/css" href="bootstrap/bootstrap/css/bootstrap.min.css"-->
    <script src="bootstrap/bootstrap/js/bootstrap.min.js" charset="UTF-8"></script>
    <link rel="stylesheet" href="css/reg.css">
</head>
<body>
    
    <div class="container">
        <h2>Registration Form</h2>
        <form action="areg.php" method="POST">

            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" required>

            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" required>

            <label for="enroll">Employee Id:</label>
            <input type="text" id="emp" name="emp" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="pass" required>

            <label for="password">Confirm Password:</label>
            <input type="password" id="cpassword" name="cpass" required>

            <button type="submit" name="submit" class="btn ">Register</button>
            
        </form>
    </div>
</body>
</html>

