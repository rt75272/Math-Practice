<?php
	include_once 'connect_db.php';
	include_once 'index.php';

	$db_receipt = "";
	$name = "";

	# Insert username to psql database.
	if(isset($_POST['save'])) {
		$name = $_POST['name'];
		$query = "INSERT INTO math_user_stats(name) values ('$name')";
		
		if($result = pg_query($query)) {
			$db_receipt = "Data Added Successfully.";
		}
		else {
			$db_receipt = "Error.";
		}
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Math Practice</title>
		<link rel="stylesheet" href="main.css" />
	</head>
	<body>
		<div class="container">
			<div class="center">
				<h3>Math Practice</h3>
				<div id="problem"></div>
					<input type="text" id="userAnswer" placeholder="Your Answer" autofocus>
					</br>
					<button id="btn" onclick="checkAnswer()">Check Answer</button>
				<div id="feedback"><span id="hide">hi</span></div>

				<p id="debug"><span id="hide">bye</span></p>
	<!-- 
				<form method="post" action="process.php">
					Name:<br>
					<input type="text" name="name">
					<br>
					<input type="submit" name="save" value="submit">
				</form> -->
				<p id="score">Current score: 0</p>
				<p id="current_player">
					<?php echo "<h6><i>Playing as " . $name . "</i></h6>"?>
				</p>

			</div>
		</div>

		<script src="math.js"></script>
	</body>
</html>
