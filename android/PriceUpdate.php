<?php
    //$con = mysqli_connect("localhost", "id571444_mathai254", "123wambugu*", "id571444_loginregister");

    $conn = mysqli_connect("localhost","root","");
        
    if(!$conn)
    {
        die('Could not connect: '.mysql_error());
    }   
    mysqli_select_db($conn,"bebabeba2");
    
    //$name = $_POST["name"];
    $price = $_POST["price"];
    if (!preg_match("/^[0-9]{3}$/",$price)) {
        $nameErr = "Invalid Price!";
        $response["validated"] = false;
        $response["success"] = false;
        $response["error"] = $nameErr;
        //$response = array();
        echo json_encode($response);
    }
    $email = $_POST["email"];


    $statement = mysqli_prepare($conn, "UPDATE driver SET PricePerKm = ? WHERE email = ?");
    mysqli_stmt_bind_param($statement, "ss", $price, $email); 
    //remember to return s and v_type on db
    mysqli_stmt_execute($statement);

    $response = array();
    $response["success"] = true;  
    $response["validated"] = true;
    echo json_encode($response);
    //print(json_encode($response));
?>