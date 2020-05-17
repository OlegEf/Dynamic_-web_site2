document.addEventListener('DOMContentLoaded',
function () {
	var movieSection =
	document.querySelector('#movies-sec');
	if(movieSection){=
	var moreBtn = document.querySelector('#showMore');
	if(moreBtn){
		moreBtn.addEventListener('click',showMoreMovies);
		var lastShownMovie = 0;
		function showMoreMovies(){
			lastShownMovie++;
		doAjax({
			method: 'POST',
			url: 'logic/more_movies.php',
			data: 'last_shown_movie=' + lastShownMovie, contentType:
			'application/x-www-form-urlencoded',
			callback: appenMovie
		});
		function appendMovie(movie){
			movie = JSON.parse(movie);

			if (movie){
				var title = document.createElement('h4');
				var link = document.createElement('a');
				link.href = 'movies.php#movie_' + movie.id;
				link.textContent = movie.title;

				title.appendChild(title);
			}else{
				moreBtn.textContent = 'filmov bolshe net :(';
				moreBtn.setAttribute('disabled', 'disabled');
			}
			}
		}
	}
}