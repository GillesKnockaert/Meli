var canvas;
var context;
var imageField;
var posXField;
var posYField;

(function ($) {
	var form = document.querySelectorAll('form');
	
	if (form != null) {
		switch (form[0].id) {
			case 'collection_form':
				executeCollectionItemCode();
				break;
			case 'map_form':
				executeMapCode();
				break;
			case 'media_form':
				executeMediaCode();
				break;
		}
	}
})()

function executeCollectionItemCode() {
	posXField = document.getElementById('posX');
	posYField = document.getElementById('posY');
	imageField = document.getElementById('image_preview');

	var mapSelect = document.getElementById('form_map');
	mapSelect.addEventListener('change', function(e) {
		drawImage(e.srcElement.value);
	});

	var fileField = document.getElementById('form_file');
	fileField.addEventListener('change', function() {
		previewFile(this, ['jpg', 'jpeg', 'png']);
	});

	document.getElementById('remove_file').addEventListener('click', function() {
		fileField.value = "";
		imageField.className = "hidden";
		imageField.removeAttribute('src');
		this.className = "hidden";
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
}

function executeMapCode() {
	imageField = document.getElementById('image_preview');

	var fileField = document.getElementById('form_file');
	fileField.addEventListener('change', function() {
		previewFile(this, ['jpg', 'jpeg', 'png']);
	});

	document.getElementById('remove_file').addEventListener('click', function() {
		fileField.value = "";
		imageField.className = "hidden";
		imageField.removeAttribute('src');
		this.className = "hidden";
	});
}

function executeMediaCode() {
	imageField = document.getElementById('image_preview');
	var fileFields = document.querySelectorAll('input[id*="file"]');

	for (var i = 0; i < fileFields.length; i++) {
		fileFields[i].addEventListener('change', function() {
			previewFile(this, getAllowedExtensions());
		});
	}

	var removeLinks = document.getElementsByName('remove_file');
	console.log(removeLinks);
	document.getElementById('remove_file').addEventListener('click', function() {
		fileField.value = "";
		imageField.className = "hidden";
		imageField.removeAttribute('src');
		this.className = "hidden";
	});

	document.getElementById('form_type').addEventListener('change', function() {
		for (var i = 0; i < fileFields.length; i++) {
			fileFields[i].value = "";
		}
		imageField.removeAttribute('src');
		imageField.className = "hidden";
		document.getElementById('remove_file').className = "hidden";
	});
}

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

function previewFile(input, fileTypes) {
    if (input.files && input.files[0]) {
    	var extension = input.files[0].name.split('.').pop().toLowerCase();
    	var isSuccess = isSuccess = fileTypes.indexOf(extension) > -1;

    	if (isSuccess) {
    		document.getElementById('remove_file').className = "";
    		document.getElementById('error').className = "hidden";

    		switch (extension) {
    			case 'jpg':
    			case 'jpeg':
    			case 'png':
    				var reader = new FileReader();
		            reader.onload = function (e) {
		            	imageField.className = "";
		                imageField.setAttribute('src', e.target.result);
		            }
		            reader.readAsDataURL(input.files[0]);
    				break;
				case 'mp3':
					imageField.removeAttribute('src');
					imageField.className = "hidden";
					break;
				case 'mp4':
					imageField.removeAttribute('src');
					imageField.className = "hidden";
					break;
    		}
    	} else {
    		displayError(input, fileTypes);
    	}
    }
}

function displayError(input, allowedTypes) {
	input.value = "";
	imageField.removeAttribute('src');
	imageField.className = "hidden";
	document.getElementById('remove_file').className = "hidden";
	var errorMessage = "Gelieve een bestand te uploaden van volgende types: ";
	errorMessage += allowedTypes.join(", ");
	document.getElementById('error').innerHTML = errorMessage;
	document.getElementById('error').className = "";
}

function getAllowedExtensions() {
	var typeSelect = document.getElementById('form_type');
	var selectedType = typeSelect.options[typeSelect.selectedIndex].value;
	var types = [];

	switch (selectedType) {
		case 'audio':
			types = ['mp3'];
			break;
		case 'video':
			types = ['mp4'];
			break;
		case 'foto':
			types = ['jpg', 'jpeg', 'png'];
			break;
	}

	return types;
}