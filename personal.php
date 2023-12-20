<?php include 'database/conn.php';?>
<?php
   if(isset($_POST["submit"])){
    $query ="insert into personal_details values('$_POST[fullname]','$_POST[enroll]','$_POST[Fname]','$_POST[Mname]','$_POST[email]','$_POST[pass]','$_POST[contact]','$_POST[acontact]','$_POST[gender]','$_POST[address]')";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo "<script>alert('Updated Successfully');
        window.location.href ='student.php';
        </script>";
    }
    else{
        echo "<script>alert('Rgistertion Failed.....Try again');
        window.location.href ='personal.php';
        </script>";
    }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Personal Details</title>
    <script src="bootstrap/bootstrap/js/bootstrap.min.js" charset="UTF-8"></script>
    <link rel="stylesheet" href="css/personal.css">
</head>
<body>
    <div class="container">
        <form action="personal.php" method="POST">
            <h1>Personal Details</h1>
            <div class="personal">
                <div class="input-box">
                    <label for="fullname">Full Name</label>
                    <input type="text" placeholder="Full Name" name="fullname" >
                </div>
                <div class="input-box">
                    <label for="enroll">Enrollment</label>
                    <input type="text" placeholder="Enrollment" name="enroll">
                </div>
                <div class="input-box">
                    <label for="Fname">Father's Name</label>
                    <input type="text" placeholder="father's name" name="Fname">
                </div>
                <div class="input-box">
                    <label for="Mname">Mother's Name</label>
                    <input type="text" placeholder="mother's name" name="Mname">
                </div>
                <div class="input-box">
                    <label for="email">Email</label>
                    <input type="email" placeholder="Email" name="email" >
                </div>
            
                <div class="input-box">
                    <label for="pass">Password</label>
                    <input type="password" placeholder="Password" name="pass">
                </div>
                <div class="input-box">
                    <label for="contact">Contact No</label>
                    <input type="tel" placeholder="Mobile No" name="contact">
                </div>
                <div class="input-box">
                    <label for="acontact">Alternate No</label>
                    <input type="tel" placeholder="Alternate Mobile No" name="acontact">
                </div>
                
                <div class="g-cat">
                    <span class="gend">Gender:</span>
                    <input type="radio" name="gender" id="male">Male
                    <input type="radio" name="gender" id="female">Female
                </div>
                
                <div class="ad">
                    <span class="add">Address</span>
                    <input type="address" placeholder="Address" name="address">
                </div>
            </div>
                
                <button type="submit" name="submit" class="btn">Submit</button>
            
        </form>
    </div>
</body>
</html>