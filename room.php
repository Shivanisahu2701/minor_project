<?php include 'database/conn.php';?>
<?php
   function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Handle room addition
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["add_room"])) {
        // Add Room
        $room_number = sanitizeInput($_POST["room_number"]);
        $capacity = sanitizeInput($_POST["capacity"]);

        $query = "INSERT INTO rooma (roomno, capacity, status) VALUES ('$room_number', $capacity, 'Available')";
        $query_run = mysqli_query($conn,$query);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/room.css">
    <title>Room Page</title>
</head>
<body>
<div class="wrapper">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<div class="detail">
    <div class="input-box">
    <label for="room_number">Room Number:</label>
    <input type="text" name="room_number" required>
    </div>
    <div class="input-box">
    <label for="capacity">Capacity:</label>
    <input type="number" name="capacity" required>
    </div>
</div>
    <button type="submit" name="submit" class="btn">Add Room</button>
</form>
<div class="table-responsive">
		  <table>
			<thead>
				<th>Room-no</th>
				<th>Capacity</th>
				<th>Status</th>
                <th>Action</th>
			</thead>
			<tbody>
				<?php
					$selectQuery = "select * from rooma";
					$squery = mysqli_query($conn, $selectQuery);

                    if(mysqli_num_rows($squery)){
                        while($row = mysqli_fetch_assoc($squery)){
                            echo "<tr>";
                        echo "<td>" . $row["roomno"] . "</td>";
                        echo "<td>" . $row["capacity"] . "</td>";
                        echo "<td>" . $row["status"] . "</td>";
                        echo "<td>
                        <form method='post' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "'>
                            <input type='hidden' name='room_id' value='" . $row["id"] . "'>
                            <label for='new_capacity'>New Capacity:</label>
                            <input type='number' name='new_capacity' required>
                            <input type='submit' name='edit_room' value='Edit'>
                            <input type='submit' name='delete_room' value='Delete'>
                        </form>
                        </td>";
                        echo "</tr>";
                    }
                    
                } else {
                    echo "<tr><td colspan='4'>No rooms found</td></tr>";
                }
                    
                    
				?>
			</tbody>
		  </table>			 
	    </div>
</div>
</body>
</html>