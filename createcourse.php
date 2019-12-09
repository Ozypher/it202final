<?php
include_once("partials/header.php");
include_once("helpers/functions.php");
?>

<form method="POST" style="display: inline-grid;">
	<input type="text" name="name" placeholder="Quest"/>
	<input type="text" name="section" placeholder="Payment"/>
	<textarea name="description" placeholder="Description of Quest"></textarea>
	<input type="submit" value="SUBMIT QUEST"/>
</form>


<?php
if(isset($_POST['name']) && isset($_POST['section']) && isset($_POST['description'])){
	
	$name = $_POST['name'];
	$section = $_POST['section'];
	$desc = $_POST['description'];
	
	require("config.php");
	$conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
	$db = new PDO($conn_string, $username, $password);
	$sql = "INSERT INTO quests (name, section, description)
			VALUES (:name, :section, :description)";
	$stmt = $db->prepare($sql);
	$r = $stmt->execute(array(":name"=>$name, ":section"=>$section, ":description"=>$desc));
	echo ($r)?"Quest created":"Quest not created";
}
?>