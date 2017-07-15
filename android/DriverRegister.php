<?php
    //$con = mysqli_connect("localhost", "id571444_mathai254", "123wambugu*", "id571444_loginregister");

    $conn = mysqli_connect("localhost","root","");
        
    if(!$conn)
    {
        die('Could not connect: '.mysql_error());
    }   
    mysqli_select_db($conn,"bebabeba2");
    
    //$name = $_POST["name"];
    $name = $_POST["name"];
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $nameErr = "Invalid name!";
        $response["validated"] = false;
        $response["success"] = false;
        $response["error"] = $nameErr;
        //$response = array();
        echo json_encode($response);
    }
    
    $v_type = $_POST["v_type"];

    $l_plate = $_POST["l_plate"];
    if (!preg_match("/[A-Z]{3} [0-9]{3}[A-Z]{1}/",$l_plate)) {
        $nameErr = "Invalid Number Plate!";
        $response["validated"] = false;
        $response["success"] = false;
        $response["error"] = $nameErr;
        //$response = array();
        echo json_encode($response);
    }
    $phone_no = $_POST["phone_no"];
    if (!preg_match("/^[0-9]{12}$/",$phone_no)) {
        $nameErr = "Invalid Phone Number!";
        $response["validated"] = false;
        $response["success"] = false;
        $response["error"] = $nameErr;
        //$response = array();
        echo json_encode($response);
    }
    
    $email = $_POST["email"];
    if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/",$email)) {
        $nameErr = "Invalid Email Address!";
        $response["validated"] = false;
        $response["success"] = false;
        $response["error"] = $nameErr;
        //$response = array();
        echo json_encode($response);
    }
    $password = $_POST["password"];
    $status = $_POST["status"];
    $statement = mysqli_prepare($conn, "INSERT INTO driver (name, v_type, l_plate, phone_no, email, password, status) VALUES (?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "sssssss", $name, $v_type, $l_plate, $phone_no, $email, $password, $status); 
    //remember to return s and v_type on db
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;
    $response["validated"] = true;  
    
    echo json_encode($response);
    //print(json_encode($response));
?>