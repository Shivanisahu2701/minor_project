<?php include 'database/conn.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/notices.css">
    <title>Notice</title>
</head>
<body>
    <div class="wrapper">
    <form action="download.php" method="POST" enctype="multipart/form-data">
	    <div class="table-responsive">
		  <table>
			<thead>
				<th>S.No</th>
				<th>Subject</th>
				<th>Notice</th>
			</thead>
			<tbody>
				<?php
					$selectQuery = "select * from notice";
					$squery = mysqli_query($conn, $selectQuery);
					
					while (($result = mysqli_fetch_assoc($squery))) {
				?>
				<tr>
				<td><?php echo $result['id']; ?></td>
				<td><?php echo $result['subject']; ?></td>
				<td><button type="submit" class="btn2" name="down" value="<?php echo $result['id']; ?>">Download</button></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		  </table>			 
	    </div> 
    </form>    
    </div>
</body>
</html>