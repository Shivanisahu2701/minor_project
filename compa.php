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
    <form action="compa.php" method="POST">
	    <div class="table-responsive">
		  <table>
			<thead>
				<th>S.No</th>
				<th>Room </th>
				<th>Hostel Building</th>
                <th>Complaint</th>
			</thead>
			<tbody>
				<?php
					$selectQuery = "select * from complaints";
					$squery = mysqli_query($conn, $selectQuery);
					
					while (($result = mysqli_fetch_assoc($squery))) {
				?>
				<tr>
				<td><?php echo $result['id']; ?></td>
				<td><?php echo $result['roomno']; ?></td>
                <td><?php echo $result['hostel']; ?></td>
                <td><?php echo $result['complain']; ?></td>
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