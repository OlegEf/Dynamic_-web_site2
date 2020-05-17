<?php
require_once 'db.php';

if ( isset($_SESSION['user_login']) ) {
	echo $_SESSION['user_login'] . ',dobro pogalovat na stranicu administratora!';
	echo '<br>';
	echo 'vi posehali etu stranicu' .$_COOKIE['page_visit'] .'ras';
	echo "<a href="logout.php">vihod iz akaunta</a>";
}else{
	die('net dostupa k stranice');
}
