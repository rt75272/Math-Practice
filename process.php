<?php
	include_once 'connect_db.php';
	include_once 'index.php';

	$db_receipt = "";
	$name = "";

	# Add user's first and last name to the database.
	if(isset($_POST['save'])) {
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$query = "INSERT INTO math_user_stats(first_name, last_name) values ('$first_name', '$last_name')";

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

				<p method="post" action="process.php" id="score" name="score">Current score: 0</p>
				<p id="current_player">
					<?php echo "<h6><i>Playing as " . $first_name . " " . $last_name . "</i></h6>"?>
				</p>

			</div>
		</div>

		<script src="math.js"></script>
	</body>
</html>
