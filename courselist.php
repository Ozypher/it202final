<div class="topnav">
  <a class="active" href="courselist.php">Quests</a>
  <a href="logout.php">Logout</a>
  <a href="dashboard.php">Home</a>
  <a href="createcourse.php">Create a Quest</a>
</div> 

<?php
include_once("partials/header.php");
include_once("helpers/functions.php");
require("config.php");
$conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
$db = new PDO($conn_string, $username, $password);
$sql = "SELECT * from quests LIMIT 10";
$stmt = $db->prepare($sql);
$r = $stmt->execute();
$results = $stmt->fetchAll();
?>

<?php foreach($results as $index=>$row): ?>
<article style="border: 1px solid black;">
	<header>
		<?php echo $row['name'];?>-
		<b><?php echo $row['section'];?></b>
	</header>
	<p>
		<?php echo $row['description'];?>
	</p>
</article>
<?php endforeach;?>