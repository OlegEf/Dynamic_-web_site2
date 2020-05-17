<?php
require_once 'db.php';

$login = trim( $_POST['login']);
$pwd = trim( $_POST['pwd']);
if( !empty($login) && !empty($pwd) ){

// proverka
	//d.t
$sql_check = 'SELECT EXISTS( SELECT login FROM users WHERE login =:login )';

$stmt_check = $pdo->prepare($sql_check);
$stmt_check->execute([':login' => $login] );

// $stmt_check->fetchColumn() //d.cd
// $start_check->fetchColumn()

if( $stmt_check ->fetchColumns()){
	die('polsovatel s takim loginom uge suhestvuet');
}

$pwd = password_hash($pwd, PASSWORD_DEFAULT);

$sql = 'INSERT INTO users(login, password) VALUES(:login,:pwd)';

$params = ['login' => $login, ':pwd' => $pwd ];
$stmt = $pdo->prepare($sql);
$stmt->execute($params);

echo 'vi uspehno zaregestrirovalis!'
 
