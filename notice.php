<?php include 'database/conn.php';?>

<?php
if(isset($_POST["add"]))
{
    $filename = $_FILES['notice']['name'];
    $filetmp = $_FILES['notice']['tmp_name'];
    if (move_uploaded_file($filetmp,"pdf/".$filename))
        {
            $query ="insert into notice values(null,'$_POST[subject]','$filename')";
            $query_run = mysqli_query($conn,$query);
            
            if ($query_run)
            {
                echo "<script>alert('File Uploaded');</script>";
            } else
            {
                echo "<script>alert('Something went wrong');</script>";
            }
        }
        else
        {
            echo "<script>alert('Upload Failed');</script>";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/notice.css">
    <title>Notice</title>
</head>
<body>
    <!--h1 id="head">Add Notice</h1-->
    <div class="notice-container">
        <form action="notice.php" method="POST" enctype="multipart/form-data">

                <label for="subject">Subject</label>
                <input type="text" id="subject"  placeholder="Enter Description" name="subject" required>
                
                <div class="pdf">
                <label for="subject">Choose File</label>
                <i class="material-icons md-36">file_upload</i>
                <input type="file" id="myfile"  placeholder="Choose File" name="notice" required>
                </div>

                <button type ="submit" class="btn" name="add">Add Notice</button>

        </form>
        
    </div>
</body>
</html>