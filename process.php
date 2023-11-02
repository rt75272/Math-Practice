<?php
include_once 'connect_db.php';
include_once 'index.php';

$db_receipt = "";

if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $query = "INSERT INTO math_user_stats(name) 
	 values ('$name')";
	 if($result = pg_query($query)){
		$db_receipt = "Data Added Successfully.";
	 }
	 else{
		$db_receipt = "Error.";
	 }
}
?>