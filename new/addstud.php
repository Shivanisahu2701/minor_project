<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Details</title>
    <link rel="stylesheet" href="personal.css">
</head>
<body>
    <div class="container">
        <form>
            <h1>Student Details</h1>
            <div class="personal">
                <div class="input-box">
                    <label for="lname">Full Name</label>
                    <input type="text" placeholder="Full Name" name="fullname">
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
                    <input type="text" placeholder="mother's name" name="Mother">
                </div>
                <div class="input-box">
                    <label for="email">Email</label>
                    <input type="email" placeholder="Email" name="email">
                </div>
                <div class="input-box">
                    <label for="contact">Contact No</label>
                    <input type="tel" placeholder="Mobile No" name="contact">
                </div>
    
                <div class="g-cat">
                    <span class="gend">Gender:</span>
                    <input type="radio" name="gender" id="male">Male
                    <input type="radio" name="gender" id="female">Female
                </div>

                <div class="input-box">
                    <label for="roomno">Room No</label>
                    <input type="text" placeholder="Room no" name="roomno">
                </div>
                <div class="input-box">
                    <label for="hb">Hostel Building</label>
                    <select>
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