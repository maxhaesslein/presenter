var init = function(){

var target = document.getElementById('target');

window.addEventListener('message', function(e){

	console.log(event.origin);

	target.textContent = event.data;

});


};

window.addEventListener('load', init);
