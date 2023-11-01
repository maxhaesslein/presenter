var init = function(){

var popup = false;

var button = document.getElementById('openPopup');

button.addEventListener('click', function(){

	popup = window.open('popup.php', 'Presenter Popup');

	button.remove();

});


var sendMessage = function(){

	if( ! popup ) return;

	var radio = this,
		name = radio.name,
		value = radio.value;

	popup.postMessage(value);
}

for( var radio of document.querySelectorAll('input[type="radio"]') ) {
	radio.addEventListener('change', sendMessage);
}


};

window.addEventListener('load', init);
