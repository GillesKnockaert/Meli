var canvas;
var context;
var posXField;
var posYField;

(function ($) {
	posXField = document.getElementById('posX');
	posYField = document.getElementById('posY');

	var submit = document.find('form').find(':submit');
	console.log(submit);

	var mapSelect = document.getElementById('form_map');
	mapSelect.addEventListener('change', function(e) {
		drawImage(e.srcElement.value);
	});

	canvas = document.getElementById('mapCanvas');
	context = canvas.getContext('2d');

	canvas.addEventListener('click', function(evt) {
        var mousePos = getMousePos(canvas, evt);
        posXField.value = mousePos.x;
        posYField.value = mousePos.y;

        drawImage(mapSelect.options[mapSelect.selectedIndex].value, mousePos.x, mousePos.y);   
    }, false);

	drawImage(mapSelect.options[0].value);
})()

function getMousePos(canvas, evt) {
    var rect = canvas.getBoundingClientRect();
    return {
        x: evt.clientX - rect.left,
        y: evt.clientY - rect.top
    };
}

function drawImage(imagePath, posX = null, posY = null) {
	context.clearRect(0, 0, canvas.width, canvas.height);

	var image = new Image();
	image.src = '/' + imagePath;
	image.onload = function(){
		var hRatio = canvas.width  / image.width;
	    var vRatio = canvas.height / image.height;
	    var ratio  = Math.min(hRatio, vRatio);
	    var centerShift_x = (canvas.width - image.width * ratio) / 2;
	    var centerShift_y = (canvas.height - image.height * ratio) / 2;  
	    context.clearRect(0, 0, canvas.width, canvas.height);
	    context.drawImage(image, 0, 0, image.width, image.height, centerShift_x, 
	    			  centerShift_y, image.width * ratio, image.height * ratio);  

	    if (posX != null && posY != null) {
			context.beginPath();
	        context.arc(posX, posY, 5, 0, 2 * Math.PI);
	        context.fillStyle = "#9999ff";
	        context.fill();
	        context.strokeStyle = "#0000ff";
	        context.stroke();
		}
	}
}