<?php

$driver = 'mysql';
$host = 'localhost';
$db_name = 'dynweb';
$db_user = 'admin';
$db_pass = '123';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try{
	$pdo = new
	PDO("$driver:host=$host;dbname=$db_name;charset=$charset", $db_user, $db_pass, $options);
}catch(PDOExeption $e){
	die("nemogu podkluhitsa k base dannih");
}
	// if( isset($_COOKIE['page_visit']) ){
	// 	setcookie('page_visit',++$_COOKIE['page_visit'],time()+5);
	// }else{
	// 	setcookie('page_visit',1,time()+5);
	// 	$_COOKIE['page_visit']=1;
	// }



// $result = $pdo->query('SELECT * FROM movies');


// $row = $result->fetch(PDO::FETCH_ASSOC);
// while( $row = $result->fetch(PDO::FETCH_ASSOC) ){
// 	echo 'film' . $row['title'] . 'dlitsa' . $row['duration'].'min<br>';
// }
// echo '<pre>';
// var_dump($rows_pos);

// #XSS
// $user_input='<script> some ma h</script>script>';
// $safe_input=htmlentities($user_input);

// echo $safe_input;
