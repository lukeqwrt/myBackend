<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/index.css">
</head>
<body>
	<div class="success">
		<div class="wrapper">
			<h2>
				You have successfully reserved!	
			</h2>
			<p>We will contact you for verification</p>
			<p>This is your transaction ID</p>
			<p class="highlight">
				<?php echo 'transid#000'.$_GET['id'];?>
			</p>

			<a href="index.php">Return To Home</a>
		</div>
	</div>
</body>
</html>
