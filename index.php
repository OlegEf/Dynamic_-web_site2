<?php

<!DOCTYPE html>
<html lang="en">
    <head>
    	<?php require_once 'parts/head.php';?>
    </head>
    <body>
    	<?php include_once 'parts/header.php';?>
    	<?php if( isset($_SESSION['user_login']) ): ?>
			<h1>Welcome,<?php echo $_SESSIION['user_login']?></h1>
			<a href="logic/logout.php">Log out</a>
			<br>
			<h3>Last add film</h3>
    	<?php include_once 'logic/last_movie.php'; ?>
		<hr>
		<button type="button" id="showMore">Show more</button>

    	<?php else: ?>
	    	<?php include_once 'parts/not_auth.php'; ?>
    	<?php endif; ?>
    </body>
</html>
<!-- 035 min pr part2 -->