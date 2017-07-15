<?php

    $conn = mysqli_connect("localhost","root","");
        
    if(!$conn)
    {
        die('Could not connect: '.mysql_error());
    }   
    mysqli_select_db($conn,"bebabeba2");

    //$email = $_POST["email"];
    $email = "mat@g.com";
    $statement = mysqli_prepare($conn, "SELECT * FROM driver WHERE email = ?");
    mysqli_stmt_bind_param($statement, "s", $email);
    mysqli_stmt_execute($statement);

    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $user_id, $name, $v_type, $l_plate, $phone_no, $email, $password, $status, $latitude, $longitude, $PricePerDistance);

    $response = array();
    $response["success"] = false;

    while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;
        $response["name"] = $name;
        $response["v_type"] = $v_type;
        $response["l_plate"] = $l_plate;
        $response["phone_no"] = $phone_no;  
        $response["email"] = $email;
        $response["password"] = $password;
        $response["status"] = $status;
    }

    echo json_encode($response);
?>