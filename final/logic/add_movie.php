<?php
require_once 'db.php';

$movie_duration = 
getNakedInput($_POST['newMovie__duration']);
$movie_title =
getNakedInput($_POST['newMovie__tittle']);

if( empty($movie_duration) || empty($movie_title) || !isset($_POST['newMovie__genres']) ){
	die('pleese, fill all fields');
}
try{
	$pdo->beginTransacton();
	$sql_movie = 'INSERT INTO movies(title, duration)
	VALUES(:title, :duration)';
	$PARAMS = [
		':title' => $movie_title,
		':duration' => $movie_duration,
	];

$stmt_movie = $pdo->prepare($sql_movie);
$stmt_movie ->execute($params);
$last_id = $pdo->lastInsertId();

$genre_param = [];
$rows = [];

foreach ($_POST['newMovie__genres'] as $genre) {
	array_push($genre_param, $last_id, $genre);
	$str = '(?, ?)';
	array_push($rows, $str);
	# code...
}

$sql_genres = 'INSERT INTO newMovie__genres(movie_id,
genre_id) VALUES' . implode($rows, ',');

$stmt_genres = $pdo->prepare($sql_genres);
$stmt_genres ->execute($genre_param);

$pdo->commit();

echo 'new film add success!'


}catch(PDOExeption $e)
	echo 'During adding film apear eror:'.$e->getMessage();
	$pdo->rollBack();
}
// function getNakedInput($input){
// 	return htmlentities(trim($input)) ;
// }
