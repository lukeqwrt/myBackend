<?php
require_once 'connection.php';

$id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM reservation WHERE id =".$id; 

 if($connect->query($sql) === TRUE) {
	header ("Location: http://localhost/eatwell/admin.php");
} else {
	echo "Error" . $sql . ' ' . $connect->connect_error;
}
 
$connect->close();
?>