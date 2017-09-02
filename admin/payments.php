<!doctype html>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Payments - Paid Bookings</title>
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
			<li class="selected">
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
		<h1><span>PAYMENTS</span></h1>
		<div>
        <img src="images/paymentpage.jpg" alt="">
			<!--<ul>
				<li>
					<a href="blog-single-post.html" class="figure">
						<img src="images/cutting-mustache.jpg" alt="">
					</a>
					<div>
						<h3>why i grew a mustache</h3>
						<p>
							Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What’s more, they’re absolutely free! You can do a lot with them. You can modify them.
						</p>
						<a href="blog-single-post.html" class="more">read this</a>
					</div>
				</li>
				<li>
					<a href="blog-single-post.html" class="figure">
						<img src="images/in-the-country.jpg" alt="">
					</a>
					<div>
						<h3>in the country</h3>
						<p>
							Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What’s more, they’re absolutely free! You can do a lot with them. You can modify them.
						</p>
						<a href="blog-single-post.html" class="more">read this</a>
					</div>
				</li>
				<li>
					<a href="blog-single-post.html" class="figure">
						<img src="images/mustache-brothers.jpg" alt="">
					</a>
					<div>
						<h3>the mustache brothers</h3>
						<p>
							Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What’s more, they’re absolutely free! You can do a lot with them. You can modify them.
						</p>
						<a href="blog-single-post.html" class="more">read this</a>
					</div>
				</li>
			</ul>-->
			<?php
				// Create connection
				$conn = new mysqli("localhost","root","","bebabeba2");

				// Check connection
				if ($conn->connect_error) {
			    	die("Connection failed: " . $conn->connect_error);
				}
				else
				{
					$sql = "SELECT booking_id, payment_date, payment_time, payableAmount, amountInserted FROM payments";

					$result = $conn->query($sql);



					/*if (mysql_num_rows($result)!=0false){*/
					if($result->num_rows > 0) {
						echo "<table width='700px' cellpadding='10px' cellspacing='10px'><tr><th>Booking Id</th><th>Payment Date</th><th>Payment Time</th><th>Payable Amount</th><th>amount paid</th></tr>";
						// output data of each row
						while($row = $result->fetch_assoc()) {
							//$id = $row["payment_id"];
							echo "<tr><td>" . $row["booking_id"]. "</td><td>" . $row["payment_date"]. "</td><td>" . $row["payment_time"]. "</td><td>" . $row["payableAmount"]. "</td><td>" . $row["amountInserted"]. "</td><td><a href='' name=''><button>Approve</button><a/></td></tr>";
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
