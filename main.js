/*jshint browser: true*/


var clickedimage = document.querySelector('#imagelink');

var currentImage = function (){
	<?php echo 'var msg = "'.json_encode($_SESSION['username2']).'";';
	console.log("asd");
	console.log($_SESSION['username2']);
}


clickedimage.addEventListener('click', curentImage);