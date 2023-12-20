<?php include 'database/conn.php';?>
<?php
   if(isset($_POST["submit"])){
    $query ="insert into complaints values(null,'$_POST[fullname]','$_POST[enroll]','$_POST[roomno]','$_POST[hostel]','$_POST[contact]','$_POST[complain]')";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo "<script>alert('Complaint Rgisterted Successfully');
        window.location.href ='student.php';
        </script>";
    }
    else{
        echo "<script>alert('Rgistertion Failed.....Try again');
        window.location.href ='comp.php';
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
    <title>Complaint Section</title>
    <script src="bootstrap/bootstrap/js/bootstrap.min.js" charset="UTF-8"></script>
    <link rel="stylesheet" href="css/comp.css">
</head>
<body>
    <div class="container">
        <form action="comp.php" method="POST">
            <div class="complaint">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" placeholder="Full Name" name="fullname">
                </div>
                <div class="input-box">
                    <span class="details">Enrollment</span>
                    <input type="text" placeholder="Enrollment" name="enroll">
                </div>
                <div class="input-box">
                    <span class="details">Room No</span>
                    <input type="text" placeholder="Room no" name="roomno">
                </div>
                <div class="input-box">
                    <span class="details">Hostel Building</span>
                    <select name="hostel">
                        <option>-select hostel-</option>
                        <option>Sarojni Naidu Girls Hostel</option>
                        <option>C.V.Raman Boys Hostel</option>
                        <option>M.Vishvesvaraya Boys Hostel</option>
                        <option>J.C. Bose Boys Hostel</option>
                        <option>H Bhabha Boys Hostel</option>
                    </select>
                </div>
                <div class="input-box">
                    <span class="details">Contact No</span>
                    <input type="tel" placeholder="Contact" name="contact">
                </div>

                </div>
                <div class="com_detail">
                    <span class="com-de">Complaint</span>
                    <input type="address" id="add" placeholder=" " name="complain" >
                </div>
                
                <button type="submit" name="submit" class="btn">Submit</button>
            
        </form>
    </div>
</body>
</html>