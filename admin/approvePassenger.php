<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>Success</p>
<?php
	// Create connection
	$conn = new mysqli("localhost","root","","bebabeba2");

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	else
	{
		echo "$_GET[id]";
		$sql = "UPDATE passenger SET status = 'approved' WHERE passenger_id = $_GET[id]";

		if ($conn->query($sql) === TRUE) 
		{
			echo "New record created successfully.";
			header ("location: passengers.php#userPosition");
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$conn->close();
?>

</body>
</html>