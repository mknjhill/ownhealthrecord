<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require('db_connect.php');

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$allergy_name = $mysqli->real_escape_string($_REQUEST['allergy_name']);
$allergy_type = $mysqli->real_escape_string($_REQUEST['allergy_type']);
$id = $mysqli->real_escape_string($_REQUEST['id']);



// Attempt insert query execution
$sql = "INSERT INTO allergy (allergy_name, allergy_type) VALUES ('$allergy_name', '$allergy_type')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
	header('Location: ../medical/allergies.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>
