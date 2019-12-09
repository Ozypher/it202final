<html>
<head>
</head>
<body>
<?php
include_once("partials/header.php");
include_once("helpers/functions.php");
?>

<section>Welcome back, <?php get_username();?>.
<?php if(is_admin()): ?>
	<h4>Welcome Back Game Master</h4>
<?php endif;?>

</section>
<section>
<header>Quests Ending Soon</header>
<p>Quest One</p>
<p>Quest Two</p>
<p>Quest Three</p>
<p>...</p>
</section>
</body>
</html>