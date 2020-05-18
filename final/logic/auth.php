<?php
<?php
require_once 'db.php';

$login = trim( $_POST['login']);
$pwd = trim( $_POST['pwd']);
if( !empty($login) && !empty($pwd) ){

$sql = 'SELECT login, password FROM users WHERE login =:login';

$stmt = $pdo->prepare($sql);
$stmt->execute($params);

$user = $stmt->fetch(PDO::FETCH_OBJ);

	if($user){
		if( password_verify($pwd, $user->password) ){
			header('Location: admin.php');
		}else{
			echo 'nevernii login ili parol';
	}else{
		echo 'nevernii login ili parol';
	}

}else{
	echo 'pogaluista sapolnite vse polya';
}
	// }else{
	// 	echo 'nevernii login ili parol';
	// }


// $pwd = password_hash($pwd, PASSWORD_DEFAULT);

// $sql = 'INSERT INTO users(login, password) VALUES(:login,:pwd)';
// $params = ['login' => $login, ':pwd' => $pwd ];

// $stmt = $pdo->prepare($sql);
// $stmt->execute($params);

// echo 'vi uspehno zaregestrirovalis!'

// }else{
// 	echo 'pogaluista ,zapolnite all fields';
// }
// $