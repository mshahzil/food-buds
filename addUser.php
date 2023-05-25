<?php
//including the database connection file
include_once("config.php");

//checking email
if(isset($_POST['checkemail']) && isset($_POST['email'])){
    $email = $_POST['email'];
    $sql = "SELECT email FROM user WHERE email = '".$email."';";
    $query_result = $mysqli->query($sql);
    //echo json_encode($query_result);
    $Nrows = mysqli_num_rows($query_result);
    echo json_encode($Nrows);   
}

//add student
if(isset($_POST['stduser']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pass'])) {	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass =  $_POST['pass'];
	
	
			
	//insert data to database	
	$query = "INSERT INTO user (name, email, pass) VALUES ('$name','$email', '$pass')";
        
    if($mysqli->query($query)){
        echo json_encode("OK");
    }
    else{
        echo json_encode("Failed");
    }
		
	
	
	$mysqli->close();
}
?>