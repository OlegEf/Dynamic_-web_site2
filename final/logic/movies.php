<?php require_once 'logic/db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once 'parts/head.php'; ?>
</head>
<body>
	<?php include_once 'parts/header.php'; ?>

	<?php if( isset($_SESSION['user_login']) ): ?>

		<section id="movies-sec">
	    	<?php include_once 'logic/print_movies.php'; ?>
		</section>	

	<?php else: ?>
    	<?php include_once 'parts/not_auth.php'; ?>
	<?php endif; ?>
</body>
</html>
