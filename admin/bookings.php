<!doctype html>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bookings - Services Booked</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
	<script type="text/javascript" src="../js/mobile.js"></script>
</head>
<body>
	<div id="header">
		<a href="homepage.html" class="logo">
			<img src="images/logo.png" alt="">
		</a>
		<form action="" method="post">
			<input type="search" name="search" class="searchfield" size="50" />
			<input type="submit" value="Search" class="searchbutton" />
		</form>
		<br>
		<ul id="navigation">
			<li>
				<a href="homepage.html">home</a>
			</li>
			<li>
				<a href="drivers.php">drivers</a>
			</li>
			<li>
				<a href="passengers.php">passengers</a>
			</li>
			<li>
				<a href="payments.php">payments</a>
			</li>
			<li class="selected">
				<a href="bookings.php">bookings</a>
			</li>
			<li>
				<a href="reports.html">reports</a>
			</li>
			<li>
				<a href="feedback.php">feedback</a>
			</li>
			<li>
				<a href="help.html">help</a>
			</li>
		</ul>
	</div>
	<div id="body">
		<h1><span>BOOKINGS</span></h1>
        <div>
        	<img src="images/bookingpage.png" alt="">
			<?php
				// Create connection
				$conn = new mysqli("localhost","root","","bebabeba2");

				// Check connection
				if ($conn->connect_error) {
			    	die("Connection failed: " . $conn->connect_error);
				}
				else
				{
					$sql = "SELECT booking_id, drivers_email, passengers_email, source, destination, booking_date, booking_time, price FROM bookings";

					$result = $conn->query($sql);



					/*if (mysql_num_rows($result)!=0false){*/
					if($result->num_rows > 0) {
						echo "<table width='700px' cellpadding='10px' cellspacing='10px'><tr><th>Booking Id</th><th>Drivers Email</th><th>Passenger Email</th><th>Source</th><th>Destination</th><th>Booking Date</th><th>Booking time</th><th>Price</th></tr>";
						// output data of each row
						while($row = $result->fetch_assoc()) {
							//$id = $row["payment_id"];
							echo "<tr><td>" . $row["booking_id"]. "</td><td>" . $row["drivers_email"]. "</td><td>" . $row["passengers_email"]. "</td><td>" . $row["source"]. "</td><td>" . $row["destination"]. "</td><td>" . $row["booking_date"]. "</td><td>" . $row["booking_time"]. "</td><td>" . $row["price"]. "</td><td><a href='' name=''><button>Approve</button><a/></td></tr>";
							}	
						echo "</table>";
					} 
					else{
						echo "0 results";
					}


				}
				$conn->close();
			?>
        </div>
	</div>
	<div id="footer">
		<div>
			<p>&copy; 2016 by Wambugu Mathai. All rights reserved.</p>
			<ul>
				<li>
					<a href="" id="twitter">twitter</a>
				</li>
				<li>
					<a href="" id="facebook">facebook</a>
				</li>
				<li>
					<a href="" id="googleplus">googleplus</a>
				</li>
				<li>
					<a href="" id="pinterest">pinterest</a>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>
