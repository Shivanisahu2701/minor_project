<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="notice.css">
    <title>Notice</title>
</head>
<body>
    <div class="notice-container">
        <form>

                <label for="subject">Subject</label>
                <input type="text" id="subject"  placeholder="Enter Description" name="subject" required>
                
                <div class="pdf">
                <label for="subject">Choose File</label>
                <i class="material-icons md-36">file_upload</i>
                <input type="file" id="myfile"  placeholder="Choose File" name="notice" required>
                </div>

                <button class="btn">Add Notice</button>

        </form>
        
    </div>
</body>
</html>