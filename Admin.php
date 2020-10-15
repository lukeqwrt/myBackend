
<?php require('./php/get_reservations.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="img/logo.png">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="./css/admin.css">
</head>
<body style="background-color: white;">
	<main>
		<section id="admin">
			<h1>Welcome Admin</h1>
			<h2 style="background-color: goldenrod;">List of Reservations</h2>	
			<table>
				<thead>
					<tr>
						<th>Id</th>
						<th>Customer</th>
						<th>Contacts</th>
						<th>Reserve Seats</th>
						<th>Reservation Date Time</th>
						<th>Reserved On</th>
					</tr>
				</thead>

				<tbody>
					
				
					<?php if(!empty($result) && $result ->num_rows > 0): ?>
					
	                <?php while($row = $result -> fetch_assoc()): ?>
						<tr>
							<td>
								<?php echo $result['id'];?>
							</td>
							<td>
								<?php echo $result['customer_name']; ?>
							</td>
							<td>
								<?php echo $result['contact_number']; ?>
							</td>
							<td>
								<?php echo $result['reserve_seats']; ?>
							</td>
							<td>
								<?php echo $result['reserve_datetime']; ?>
							</td>
							<td>
								<?php echo $result['date_reserved']; ?>
							</td>
							<td>
								<a href="/eatwell/php/Delete.php?id=<?php echo $row['id']?>">Delete</a>
							</td>
						</tr>
					<?php endwhile; ?>
				<?php endif; ?>
			
				</tbody>
			</table>
		</section>
		
	</main>






</body>
</html>