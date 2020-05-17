<?php

<!DOCTYPE html>
<html lang="en">
    <head>
    	<?php require_once 'parts/head.php';?>
    </head>
    <body>
    	<?php include_once 'parts/header.php';?>
    	<?php if( isset($_SESSION['user_login']) ): ?>
			<h1> dobr pogal,<?php echo $_SESSIION['user_login']?></h1>
			<a href="logic/logout.php">viiti ikaunta</a>
			<br>
			<h3>poslednii dobavl film</h3>
    	<?php else: ?>
    	<?php include_once 'parts/not_auth.php'; ?>
    	<?php endif; ?>
    </body>

// $a =123;
// define('LEET',1337);
// $str1='hj';
// $str2='ww';
// $er=$str1 . ' ' .$str2;
// echo $er;
