var init = function(){

var canvas = document.getElementById('canvas');

window.addEventListener('message', function(e){

	if( e.origin !== Presenter.baseurl ) {
		console.warn('nope.')
		return;
	}

	var src = e.data;

	if( ! src ) {
		canvas.innerHTML = '';
		return;
	}

	var img = document.createElement('img');

	img.onload = function(){

		canvas.innerHTML = '';
		
		canvas.appendChild(img);

	};

	img.src = src;

});


};

window.addEventListener('load', init);
