<?php include 'database/conn.php';?>
<?php
   if(isset($_POST["submit"])){
    $query ="insert into addstud values(null,'$_POST[fname]','$_POST[lname]','$_POST[enroll]','$_POST[email]','$_POST[roomno]','$_POST[hostel]')";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo "<script>alert('Added Successfully');
        window.location.href ='admind.php';
        </script>";
    }
    else{
        echo "<script>alert('Something went wrong.....Try again');
        window.location.href ='addstud.php';
        </script>";
    }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="css/personal.css">
</head>
<body>
    <div class="container">
        <form>
            <h1>Student Details</h1>
            <div class="personal">
                <div class="input-box">
                    <label for="fname">Frist Name</label>
                    <input type="text" placeholder="First Name" name="fname">
                </div>
                <div class="input-box">
                    <label for="lname">Last Name</label>
                    <input type="text" placeholder="Last Name" name="lname">
                </div>
                <div class="input-box">
                    <label for="enroll">Enrollment</label>
                    <input type="text" placeholder="Enrollment" name="enroll">
                </div>
                
                <div class="input-box">
                    <label for="email">Email</label>
                    <input type="email" placeholder="Email" name="email">
                </div>

                <div class="input-box">
                    <label for="roomno">Room No</label>
                    <input type="text" placeholder="Room no" name="roomno">
                </div>
                <div class="input-box">
                    <label for="hb">Hostel Building</label>
                    <select name="hostel">
                        <option>-select hostel-</option>
                        <option>Sarojni Naidu Girls Hostel</option>
                        <option>C.V.Raman Boys Hostel</option>
                        <option>M.Vishvesvaraya Boys Hostel</option>
                        <option>J.C. Bose Boys Hostel</option>
                        <option>H Bhabha Boys Hostel</option>
                    </select>
                </div>
                
                
                
                <button type="submit" name="submit" class="asbtn">Add Student</button>
            
        </form>
    </div>
</body>
</html>