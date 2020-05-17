document.addEventListener('DOMContentLoaded',
function () {
	var movieSection =
	document.querySelector('#movies-sec');
	if(movieSection){
		movieSection.addEventListener('click', sectionHandler);

		function sectionHandler(event){
			if(event.target.classList.contains('movie_watched')){
				if(event.target.classList.contains('movie_del')){
					event.preventDefault()
					var movie ={
					movie.container = event.target.parentNode;
					movie.id = movie.container.getAttribute('data-movie-id');
					movie.title = movie.container.firstElementChild.textContent;

					doAjax({
						method: 'POST',
						url: 'logic/add_movie.php',
						data: 'del_id=' + movie.id, 
						contentType:
						'application/x-www-form-urlencoded'
						,
						callback: delmovie
					});

					function delMovie(response){
						if(response){
							alert('Film'+ movie.title + 'was dellete sucsess!');
							movie.container.nextElementSibling.remove()
							movie.container.remove()
						}else{
							alert('during dellete film somthing wrong hapend');
						}
					}

					}
				}
			}
		}

		=
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

if(document.forms.newMovie){
	document.forms.newMovie.addEventListener('submit', addNewMovie);
	function addNewMovie(event){
		event.preventDefault();
		var formData = new formData(this);
		doAjax({
			method: 'POST',
			url: 'logic/add_movie.php',
			data: formData,
			callback: function(response){
				alert(response);
			}
		});
	}
}

// 