<!doctype html>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Passengers - Registered passengers</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
	<script type="text/javascript" src="js/mobile.js"></script>
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
			<li class="selected">
				<a href="passengers.php">passengers</a>
			</li>
			<li>
				<a href="payments.php">payments</a>
			</li>
			<li>
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
		<h1><span>REGISTERED PASSENGERS</span></h1>
        <div>
            <img src="images/passengerpage.jpg" alt="">

			<?php
	
				// Create connection
				$conn = new mysqli("localhost","root","","bebabeba2");

				// Check connection
				if ($conn->connect_error) {
			    	die("Connection failed: " . $conn->connect_error);
				}
				else
				{
					$sql = "SELECT passenger_id, name, phone_no, email, status FROM passenger";

					$result = $conn->query($sql);



					/*if (mysql_num_rows($result)!=0false){*/
					if($result->num_rows > 0) {
						echo "<table width='700px' cellpadding='10px' cellspacing='10px'><tr><th>Name</th><th>Phone Number</th><th>Email Address</th><th>Status</th></tr>";
						// output data of each row
						while($row = $result->fetch_assoc()) {
							$id = $row["passenger_id"];
							echo "<tr><td>" . $row["name"]. "</td><td>" . $row["phone_no"]. "</td><td>" . $row["email"]. "</td><td>".$row["status"]."</td><td><a href='approvePassenger.php?id=$id' name='userPosition'><button>Approve</button><a/></td></tr>";
							}	
						echo "</table>";
					} 
					else{
						echo "0 results";
					}
				}
				$conn->close();
			?>

            <!--<ul class="gallery">
                <li>
                    <a href="gallery-single-post.html">
                        <img src="images/mustache1.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="gallery-single-post.html">
                        <img src="images/mustache2.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="gallery-single-post.html">
                        <img src="images/mustache3.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="gallery-single-post.html">
                        <img src="images/mustache4.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="gallery-single-post.html">
                        <img src="images/mustache5.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="gallery-single-post.html">
                        <img src="images/mustache6.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="gallery-single-post.html">
                        <img src="images/mustache7.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="gallery-single-post.html">
                        <img src="images/mustache8.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="gallery-single-post.html">
                        <img src="images/mustache9.jpg" alt="">
                    </a>
                </li>
            </ul>-->
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
					<a href="">googleplus</a>
				</li>
				<li>
					<a href="" id="pinterest">pinterest</a>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>
