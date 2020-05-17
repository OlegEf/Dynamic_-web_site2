<header>
	<nav>
		<?php if (isset($_SESSION['user_login']) ):?>
		<a href="index.php">main</a>	
		<a href="movies.php">films</a>	
		<a href="control.php"></a>	
		<?php else: ?>
			<a href="signin.php">Avtorisovatsa</a>
			<a href="signup.php">saregistrirovatsa</a>
		<?php endif; ?>
	</nav>
</header>



<!-- <form action="logic/reg.php" method="post" >
	<input type="text" name="login" placeholder="Login">
	<input type="password" name="pwd" placeholder="Password">
	<button type="submit" name="button">zaregistrirovatsa</button>
</form>
<a href="signin.php">str avtorizacii</a> -->