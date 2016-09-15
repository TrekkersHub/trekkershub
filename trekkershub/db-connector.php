<?php 

function getDBConnection(){
	$server_name = "localhost:3306";
	$user_name = "vikram";
	$password = "pass@123";
	$db_name = "TrekkersHub";
	// Create connection
	$conn = new mysqli($server_name, $user_name, $password, $db_name);

	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	#echo "Connected successfully";
    #error_log(print_r("Connected successfully", TRUE));
    return $conn;
}

?>