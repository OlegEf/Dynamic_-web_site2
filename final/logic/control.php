<?php

<!DOCTYPE html>
<html lang="en">
    <head>
    	<?php require_once 'parts/head.php';?>
    </head>
    <body>
    	<?php include_once 'parts/header.php';?>
    	<?php if( isset($_SESSION['user_login']) ): ?>
			<h1>Add film</h1>
			<form name="newMovie">
				<label>Name film</label>
				<input type="text" name="newMovie__title" value="">
				<br>
				<label>Genres film</label>
				<select name="newMovie__genres[]" multiple>
					<?php include_once 'logic/get_genres.php'; ?>
				</select>
				<br>
				<button type="submit">
					Dobavit
				</button>

			</form>

    	<?php else: ?>
	    	<?php include_once 'parts/not_auth.php'; ?>
    	<?php endif; ?>
    </body>
</html>
<!-- 035 min pr part2 -->