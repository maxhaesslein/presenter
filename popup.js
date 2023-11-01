var init = function(){

var canvas = document.getElementById('canvas');

window.addEventListener('message', function(e){


	var src = e.data;

	if( ! src ) {
		canvas.innerHTML = '';
		return;
	}


	src = 'images/'+src;

	var img = document.createElement('img');

	img.onload = function(){

		canvas.innerHTML = '';
		
		canvas.appendChild(img);

	};

	img.src = src;

});


};

window.addEventListener('load', init);
