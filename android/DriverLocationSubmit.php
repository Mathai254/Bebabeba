<?php
    $conn = mysqli_connect("localhost","root","");
        
    if(!$conn)
    {
        die('Could not connect: '.mysql_error());
    }   
    mysqli_select_db($conn,"bebabeba2");
    

    $latitude = $_POST["lat"];
    $longitude = $_POST["lng"];
    $email = $_POST["email"];
    $statement = mysqli_prepare($conn, "UPDATE driver SET latitude = ?, longitude = ? WHERE email = ?");
    mysqli_stmt_bind_param($statement, "sss", $latitude, $longitude, $email); 
    //remember to return s and v_type on db
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>