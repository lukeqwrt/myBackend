<?php 
	require_once 'connection.php';

	if($_POST) {

		$customer_name= $_POST['customer_name'];
		$contact = $_POST['contact'];
		$reserve_seats = $_POST['reserve_seats'];
		$date_time = $_POST['reserve_date'].' '.$_POST['reserve_time']; 

	 
	    $sql = "INSERT INTO reservation (customer_name, contact_number, reserve_seats, reserve_datetime) VALUES ('$customer_name', '$contact', '$reserve_seats', '$date_time')";


	    if($connect->query($sql) === TRUE) {

	    	$reservation_id = mysqli_insert_id($connect);
	        header("Location: success.php?id=".$reservation_id);
	    } else {
	        echo "Error " . $sql . ' ' . $connect->connect_error;
	    }
	 
	    $connect->close();
	}
?>