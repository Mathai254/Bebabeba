<?php

    $conn = mysqli_connect("localhost","root","");
        
    if(!$conn)
    {
        die('Could not connect: '.mysql_error());
    }   
    mysqli_select_db($conn,"bebabeba2");


    //$v_type = $_POST[0]["v_type"];
    $postData = json_decode(file_get_contents('php://input'));
    $v_type = $postData[0]->v_type;
    $sql = "SELECT driver_id, latitude, longitude FROM driver WHERE v_type = '".$v_type."'";
    $result = mysqli_query($conn, $sql);

    $response = array();

    while($row = mysqli_fetch_array($result))
    {
        //$response["success"] = true;
        array_push($response, array("driver_id"=>$row["driver_id"], "latitude"=>$row["latitude"], 
            "longitude"=>$row["longitude"]));
    }

    echo json_encode($response);
?>