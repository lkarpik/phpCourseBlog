<?php

include 'database.php';

// Create select query
	$query = 'SELECT * FROM shouts ORDER BY id DESC';
	$result = mysqli_query($con, $query);


?>

<!DOCTYPE html>
<html>
	<head>
  		<meta charset="utf-8" />
  		<title>SHOUT IT!</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
	</head>
	<body>
		<div id="container">
			<header>
				<h1>SHOUT IT! Shoutbox</h1>
			</header>
			<div id="shouts">
				<ul>
					<?php while ($row = mysqli_fetch_assoc($result)): ?>

						<li class="shout"><span><?= $row['time']; ?> - </span><strong><?= $row['user']; ?></strong>: <?= $row['message']; ?></li>

					<?php endwhile; ?>
				
				</ul>
			</div>
			<div id="input">
				<form method="post" action="process.php">
					<?php if(isset($_GET['error'])): ?>
					<div class="error">
					<?= $_GET['error']; ?>
					</div>				
					 
					<?php endif; ?>
					<input type="text" name="user" placeholder="Enter Your Name" />
					<input type="text" name="message" placeholder="Enter A Message" />
					<br />
					<input class="shout-btn" type="submit" name="submit" value="Shout It Out" />
				</form>
			</div>
		</div>
	</body>
</html>