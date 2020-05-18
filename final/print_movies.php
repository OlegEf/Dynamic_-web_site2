<?php
require_once 'db.php';
$sql = 'SELECT movies.id, movies.title,
movies.duration, GROUP_CONCAT (genres.genre SEPARATOR
", ") AS genres
FROM movies INNER JOIN movies_genres
ON movies.id = movies_genres.movie_id
INNER JOIN genres
ON movies_genres.genre_id = genres.id
GROUP BY movies.id, movies.title, movies.duration';

$result = $pdo->query($sql);
while( $movie = result->fetch(PDO::FETCH_OBJ)):
?>
	<div class="movie__container" id=<?php echo
	'movie_' . $movie->id ?> data-movie-id=<?php echo
	$movie->id ?>>
		<h3 class="movie__title"><?php echo
		$movie->title ?></h3>
		<h4> class="movie__genre"<?php echo
		$movie->genres ?></h4>
		<h4 class="movie__duration">Duration film:
		<?php echo $movie->duration ?></h4>
	</div>
	<hr>
<?php endwhile; ?>
