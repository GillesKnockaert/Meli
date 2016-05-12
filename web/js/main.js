var collectionItemModule = (function() {
	var imageField = document.getElementById('image_preview');
	var removeLink = document.getElementById('remove_file');
	var mapSelect = document.getElementById('form_map');
	var fileField = document.getElementById('form_file');
	var errorField = document.getElementById('error');
	var posXField = document.getElementById('posX');
	var posYField = document.getElementById('posY');
	var canvas = document.getElementById('mapCanvas');

	function init() {
		var yearFrom = document.getElementById('item_yearfrom').value;
		var posX = document.getElementById('posX').value;
		var posY = document.getElementById('posY').value;
		if (yearFrom != 0) {
			showMap(yearFrom, posX, posY);
		}

		mapSelect.addEventListener('change', function(e) {
			drawImage(e.srcElement.value, canvas);
		});

		removeLink.addEventListener('click', function() {
			fileField.value = "";
			imageField.className = "hidden";
			imageField.removeAttribute('src');
			this.className = "hidden";
		});

		fileField.addEventListener('change', function() {
			previewFile(this, imageField, removeLink, errorField, ['jpg', 'jpeg', 'png']);
		});

		canvas.addEventListener('click', function(evt) {
	        var mousePos = getMousePos(canvas, evt);
	        posXField.value = mousePos.x;
	        posYField.value = mousePos.y;

	        drawImage(mapSelect.options[mapSelect.selectedIndex].value, canvas, mousePos.x, mousePos.y);   
	    }, false);
	}

	function getMousePos(canvas, evt) {
	    var rect = canvas.getBoundingClientRect();
	    return {
	        x: evt.clientX - rect.left,
	        y: evt.clientY - rect.top
	    };
	}

	function drawImage(imagePath, canvas, posX = null, posY = null) {
		var context = canvas.getContext('2d');
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

	function showMap(yearFrom, posX, posY) {
		for (var i = 1; i < mapSelect.options.length; i++) {
			var years = (mapSelect.options[i].text).split(' - ');
			if (yearFrom >= parseInt(years[0]) && yearFrom <= parseInt(years[1])) {
				mapSelect.selectedIndex = i;
				drawImage(mapSelect.options[mapSelect.selectedIndex].value, canvas, posX, posY);
			}
		}
	}

	return {
		init: init
	};
})();

var mapModule = (function() {
	var imageField = document.getElementById('image_preview');
	var fileField = document.getElementById('form_file');
	var removeLink = document.getElementById('remove_file');
	var errorField = document.getElementById('error');

	function init() {
		fileField.addEventListener('change', function() {
			previewFile(this, imageField, removeLink, errorField, ['jpg', 'jpeg', 'png']);
		});

		removeLink.addEventListener('click', function() {
			fileField.value = "";
			imageField.className = "hidden";
			imageField.removeAttribute('src');
			this.className = "hidden";
		});
	}

	return {
		init: init
	};
})();

var mediaModule = (function() {
	var removeLinks = document.getElementsByName('remove_file');
	var imageFields = document.getElementsByName('image_preview');
	var errorFields = document.getElementsByName('error');
	var fileFields = document.querySelectorAll('input[id*="file"]');

	function init() {
		fileFields[0].addEventListener('change', function() {
			previewFile(this, imageFields[0], removeLinks[0], errorFields[0], getAllowedExtensions());
		});
		fileFields[1].addEventListener('change', function() {
			previewFile(this, imageFields[1], removeLinks[1], errorFields[1], getAllowedExtensions());
		});

		removeLinks[0].addEventListener('click', function() {
			fileFields[0].value = "";
			imageFields[0].className = "hidden";
			imageFields[0].removeAttribute('src');
			this.className = "hidden";
		});
		removeLinks[1].addEventListener('click', function() {
			fileFields[1].value = "";
			imageFields[1].className = "hidden";
			imageFields[1].removeAttribute('src');
			this.className = "hidden";
		});

		document.getElementById('form_type').addEventListener('change', function() {
			for (var i = 0; i < fileFields.length; i++) {
				fileFields[i].value = "";
				imageFields[i].removeAttribute('src');
				imageFields[i].className = "hidden";
				removeLinks[i].className = "hidden";
				errorFields[i].className = "hidden";
			}
		});
	}

	return {
		init: init
	};
})();

function previewFile(inputField, imageField, removeLink, errorField, fileTypes) {
    if (inputField.files && inputField.files[0]) {
    	var extension = inputField.files[0].name.split('.').pop().toLowerCase();
    	var isSuccess = isSuccess = fileTypes.indexOf(extension) > -1;

    	if (isSuccess) {
    		removeLink.className = "";
    		errorField.className = "hidden";

    		switch (extension) {
    			case 'jpg':
    			case 'jpeg':
    			case 'png':
    				var reader = new FileReader();
		            reader.onload = function (e) {
		            	imageField.className = "";
		                imageField.setAttribute('src', e.target.result);
		            }
		            reader.readAsDataURL(inputField.files[0]);
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
    		displayError(inputField, imageField, removeLink, errorField, fileTypes);
    	}
    }
}

function displayError(inputField, imageField, removeLink, errorField, allowedTypes) {
	inputField.value = "";
	imageField.removeAttribute('src');
	imageField.className = "hidden";
	removeLink.className = "hidden";
	var errorMessage = "Gelieve een bestand te uploaden van volgende types: ";
	errorMessage += allowedTypes.join(", ");
	errorField.innerHTML = errorMessage;
	errorField.className = "";
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

(function ($) {
	var form = document.querySelectorAll('form');
	
	if (form != null) {
		switch (form[0].id) {
			case 'collection_form':
				collectionItemModule.init();
				break;
			case 'map_form':
				mapModule.init();
				break;
			case 'media_form':
				mediaModule.init();
				break;
		}
	}
})();