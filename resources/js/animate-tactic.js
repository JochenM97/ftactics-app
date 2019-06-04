var keyframes_json = JSON.parse(decodeURIComponent(data));

var scaleX = keyframes_json[2];
var scaleY = keyframes_json[3];

var field = document.getElementById("field");

var interfaceElementsHeight = 180;

var mqls = [ // list of window.matchMedia() queries
    window.matchMedia("(max-width: 767px)"),
    window.matchMedia("(min-width: 768px)"),
    window.matchMedia("(min-width: 1025px)"),
]
 
function mediaqueryresponse(mql) {
  if(mqls[2].matches)
  {
    interfaceElementsHeight = 260;
  }
  else if(mqls[1].matches)
  {
    interfaceElementsHeight = 240;
  }
  else
  {
    interfaceElementsHeight = 180;
  }
}
 
for (var i=0; i<mqls.length; i++){ // loop through queries
    mediaqueryresponse(mqls[i]) // call handler function explicitly at run time
    mqls[i].addListener(mediaqueryresponse) // call handler function whenever the media query is triggered
}

var stageWidth = 100;
var stageHeight = 150;
var scale;

function fitStageIntoParentContainer() 
{
  var container = document.querySelector('#stage-parent');
  var field = document.querySelector('#field');

  var containerWidth = container.offsetWidth;;
  var containerHeight;
  if(container.offsetHeight == 0)
  {
    containerHeight = window.innerHeight-interfaceElementsHeight; // aanpassen op basis van toolbox height en nav height (berekenen)
  }
  else
  {
    containerHeight = container.offsetHeight-interfaceElementsHeight;
  }

  var scaleTest = containerHeight / stageHeight; 
  
  var scaleTestWidth = containerWidth / stageWidth;

  if(container.offsetWidth > (containerHeight/1.5))
  {
    // als canvas kleiner is als breedte scherm word de canvas op basis v height gescaled
    scale = containerHeight / stageHeight;

    field.style.width = stageWidth * scale + "px";
    field.style.height = stageHeight * scale + "px";
  }
  else
  {
    // als canvas even groot wordt als breedte scherm word de canvas op basis v width gescaled
    containerWidth= containerWidth*0.9;
    scale = containerWidth / stageWidth;

    field.style.width = stageWidth * scale + "px";
    field.style.height = stageHeight * scale + "px";
    //stage.scale({ x: scale, y: scale });
    //stage.draw();
  }
}


fitStageIntoParentContainer();
// adapt the stage on any window resize
//window.addEventListener('resize', fitStageIntoParentContainer);
var object_ids = [];

var all_layers = keyframes_json[4];
for(var i=0; i<all_layers.length; i++)
{
	var layer = all_layers[i];
	
	for(var y=0; y<layer.length; y++)
	{
		var layer_object = layer[y];
		var typeObject = layer_object[2];
		var layer_object_id;

		switch(typeObject)
		{
			case ("red-player"):
				var objectNumber = layer_object[3];
				layer_object_id = typeObject + "-" + objectNumber;
			break;
		case ("blue-player"):
				var objectNumber = layer_object[3];
				layer_object_id = typeObject + "-" + objectNumber;

			break;
		case ("ball"):
				layer_object_id = typeObject;
			break;
		}

		if(object_ids.includes(layer_object_id))
		{

		}
		else
		{
			object_ids.push(layer_object_id);
		}
	}
}

var x_positions = [];
var y_positions = [];
for(var i=0; i<object_ids.length; i++)
{
	x_positions[i] = [];
	y_positions[i] = [];
}

for(var y=0; y<all_layers.length; y++)
{
	var layer = all_layers[y];

	for(var z=0; z<layer.length; z++)
	{
		var layer_object = layer[z];
		var typeObject = layer_object[2];
		var layer_object_id;

		switch(typeObject)
		{
		case ("red-player"):
			var objectNumber = layer_object[3];
    		layer_object_id = typeObject + "-" + objectNumber;
			break;
		case ("blue-player"):
    		var objectNumber = layer_object[3];
    		layer_object_id = typeObject + "-" + objectNumber;
			break;
		case ("ball"):
    		layer_object_id = typeObject;
			break;
		}

		var index = object_ids.indexOf(layer_object_id);
		x_positions[index].push(scale*layer_object[0]);
		y_positions[index].push(scale*layer_object[1]);
	}
}

var tl = anime.timeline({
  easing: 'easeOutExpo',
  duration: 750
});

for(var i=0; i<object_ids.length; i++)
{
	var newObject = document.createElement('span');

	if(object_ids[i] == "ball")
	{
		newObject.id = object_ids[i];
		newObject.className = "football";
		newObject.style.width = 8*scale + "px";
	  	newObject.style.height = 8*scale + "px";
	  	newObject.style.left = x_positions[i][0] + "px";
	  	newObject.style.top = y_positions[i][0] + "px";
	  	field.appendChild(newObject); 
	}
	else if(object_ids[i].slice(0,-2) == "red-player")
	{
		newObject.id = object_ids[i];
		newObject.className = "red-player";
		newObject.style.width = 10*scale + "px";
	  	newObject.style.height = 10*scale + "px";
	  	newObject.style.left = x_positions[i][0] + "px";
	  	newObject.style.top = y_positions[i][0] + "px";
	  	newObject.innerHTML = object_ids[i].slice(-1);
	  	field.appendChild(newObject); 
	}
	else if(object_ids[i].slice(0,-2) == "blue-player")
	{
		newObject.id = object_ids[i];
		newObject.className = "blue-player";
		newObject.style.width = 10*scale + "px";
	  	newObject.style.height = 10*scale + "px";
	  	newObject.style.left = x_positions[i][0] + "px";
	  	newObject.style.top = y_positions[i][0] + "px";
	  	newObject.innerHTML = object_ids[i].slice(-1);
	  	field.appendChild(newObject); 
	}

	var target = document.getElementById(object_ids[i]);
	var object_frames = [];
	var timeline_framesX = [];
	var timeline_framesY = [];
	for(var y=1; y<x_positions[0].length; y++)
	{
		object_frames.push({translateX: (x_positions[i][y]-x_positions[i][0]), translateY: (y_positions[i][y]-y_positions[i][0]), duration: 1000},);
	    timeline_framesX.push(x_positions[i][y]-x_positions[i][0]);
	    timeline_framesY.push(y_positions[i][y]-y_positions[i][0]);
	}

	var backToX = x_positions[i][object_frames.length-1]-x_positions[i][0];

	object_frames.push({translateX: 0, translateY: 0, duration: 2000},);
  	
	anime({
		targets: target,
		keyframes: object_frames,
		easing: 'linear',
		loop: true
	});
  
  /*
  this.tl.add({
    targets: target,
    translateX: timeline_framesX,
    translateY: timeline_framesY,
    duration: 400,
    offset: '0'
  });
  */
}

function countSteps() {

}