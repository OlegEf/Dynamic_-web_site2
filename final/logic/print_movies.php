<h3>
	<!--  -->
$movie->title; ?></h3>
<h4 class="movie__genre"><?php echo
 $movie->genres; ?> </h4>
<h4 class="movie__duration">Duration film:
	<?php echo $movie->duration; ?> </h4>

<?php if( isset($_COOKIE['watched']) &&
array_key_exists($movie->id, 
$_COOKIE['watched']) ):?>
<button class="movie__watched movie__watched_active" >(Saw)</button>


<?php else: ?>
<button class="movie__watched" >(Don't saw)</button>
<?php endif; ?>

<button type="button" class="movie_del" >Dellete</button>
</div>
<hr>
<?php endwhile; ?>
