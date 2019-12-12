<div class="topnav">
  <a href="courselist.php">Quests</a>
  <a href="logout.php">Logout</a>
  <a class="active" href="dashboard.php">Home</a>
  <a href="createcourse.php">Create a Quest</a>
</div> 

<html>
<head>
</head>
<body>
<?php
include_once("partials/header.php");
include_once("helpers/functions.php");
?>

<section>Welcome backs.
<?php if(is_admin()): ?>
	<h4>Welcome Back Game Master</h4>
<?php endif;?>

</section>
<section>
<header>Quests Ending Soon</header>
<p>The end of the semmester is here!</p>
<p>Come back next semmester for a new campaign</p>
<p>Merry Christmas</p>
<p>...</p>
</section>
</body>
</html>