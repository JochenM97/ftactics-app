var keyframes_json = JSON.parse(decodeURIComponent(data));

var keyframes_json_length = keyframes_json[4].length;

var countLayers = 1;

for(var i=keyframes_json_length; i>1; i--)
{
	countLayers += 1;
	var pushLayer = "layer_" + countLayers;
	layersArray.push(pushLayer);

	pushLayer = new Konva.Layer();
	pushLayer.visible(false);
	pushLayer.name("layer_" + countLayers);
	stage.add(pushLayer);

	var frameElement = document.createElement('span');
	frameElement.className = "frame"; 
	frameElement.id = "frame_layer_" + i;

	var referenceNode = allFrames[activeFrame-1];
	referenceNode.parentNode.insertBefore(frameElement, referenceNode.nextSibling);

	allFrames[activeFrame].addEventListener('click', onFrameClick.bind(this, allFrames[activeFrame]), false);

	amountBluePlayers.push(5); // 5 blauwe spelers toevoegen
	amountRedPlayers.push(5); // 5 rode spelers toevoegen
	amountFootballs.push(1); // 5 ballen toevoegen
}
for (var i = 0; i < allFrames.length; i++) 
{
    allFrames[i].innerHTML = i+1;
}

for(var i=0; i<keyframes_json[4].length; i++) 
{
	var keyframes_json_i_length = keyframes_json[4][i].length;

	for(var y=0; y<keyframes_json_i_length; y++)
	{
		var currentLayerName = "." + layersArray[i];
		var curentLayerToAdd = stage.find(currentLayerName);
		var currentLayerIndex = i;
		var typeObject = keyframes_json[4][i][y][2];
		var setPositionX = keyframes_json[4][i][y][0];
		var	setPositionY = keyframes_json[4][i][y][1];

		switch(typeObject)
		{
		case ("red-player"):
			var playerNumberText = keyframes_json[4][i][y][3];

		  	var redPlayer = new Konva.Rect({
		        fill: '#FFAA00',
				opacity: 1,
				cornerRadius: 2,
				width: 10,
				height: 10,
			});

			var playerNumber = new Konva.Text({
		        text:
		          playerNumberText,
		        fontSize: 8,
		        fontFamily: 'BebasNeue',
		        fill: '#FFF',
		        align: 'center',
		        verticalAlign: 'bottom',
		        width: 10,
		        height: 10,
		    });

		    var rPlayerGroup = new Konva.Group({
				x: setPositionX,
				y: setPositionY,
				draggable: true,
				name: 'canvas-object',
				stroke: "#BA7C00",
				strokeEnabled: false,
				strokeWidth: 1,
				objectType: 'red-player',
			});

			rPlayerGroup.add(redPlayer);
			rPlayerGroup.add(playerNumber);

			rPlayerGroup.strokeEnabled = false;

		  	rPlayerGroup.selected = false;

			rPlayerGroup.dragBoundFunc(function(pos) {
			  var newY = pos.y > stage.height()-((stage.height()/150)*redPlayer.getAttr("height")) ? stage.height()-((stage.height()/150)*redPlayer.getAttr("height")) : (pos.y < 0 ? 0 : pos.y);
			  var newX = pos.x > stage.width()-((stage.width()/100)*redPlayer.getAttr("width")) ? stage.width()-((stage.width()/100)*redPlayer.getAttr("width")) : (pos.x < 0 ? 0 : pos.x);
			  return {
			    x: newX,
			    y: newY
			  };
			});

			rPlayerGroup.on('click', function() 
			{
				onObjectClick(rPlayerGroup);
			});

			rPlayerGroup.on('tap', function() 
			{
				onObjectClick(rPlayerGroup);
			});

			rPlayerGroup.on('mouseenter', function() 
			{
				stage.container().style.cursor = 'move';
			});

			rPlayerGroup.on('mouseleave', function() 
			{
				stage.container().style.cursor = 'default';
			});

			curentLayerToAdd.add(rPlayerGroup);
			curentLayerToAdd.draw();
			amountRedPlayers[i] -= 1;
			availableRedPlayers.innerHTML = amountRedPlayers[i];
			break;
		case ("blue-player"):
			var playerNumberText = keyframes_json[4][i][y][3];

    		var bluePlayer = new Konva.Rect({
		        fill: '#00E2DE',
				opacity: 1,
				cornerRadius: 2,
				width: 10,
				height: 10,
			});

			var playerNumber = new Konva.Text({
		        text:
		          playerNumberText,
		        fontSize: 8,
		        fontFamily: 'BebasNeue',
		        fill: '#FFF',
		        align: 'center',
		        verticalAlign: 'bottom',
		        width: 10,
		        height: 10,
		    });

		    var bPlayerGroup = new Konva.Group({
				x: setPositionX,
				y: setPositionY,
				draggable: true,
				name: 'canvas-object',
				stroke: "#00A5A2",
				strokeEnabled: false,
				strokeWidth: 1,
				objectType: 'blue-player',
			});

			bPlayerGroup.add(bluePlayer);
			bPlayerGroup.add(playerNumber);

		  	bPlayerGroup.selected = false;

			bPlayerGroup.dragBoundFunc(function(pos) {
			  var newY = pos.y > stage.height()-((stage.height()/150)*bluePlayer.getAttr("height")) ? stage.height()-((stage.height()/150)*bluePlayer.getAttr("height")) : (pos.y < 0 ? 0 : pos.y);
			  var newX = pos.x > stage.width()-((stage.width()/100)*bluePlayer.getAttr("width")) ? stage.width()-((stage.width()/100)*bluePlayer.getAttr("width")) : (pos.x < 0 ? 0 : pos.x);
			  return {
			    x: newX,
			    y: newY
			  };
			});

			bPlayerGroup.on('click', function() 
			{
				onObjectClick(bPlayerGroup);
			});

			bPlayerGroup.on('tap', function() 
			{
				onObjectClick(bPlayerGroup);
			});

			bPlayerGroup.on('mouseenter', function() 
			{
				stage.container().style.cursor = 'move';
			});

			bPlayerGroup.on('mouseleave', function() 
			{
				stage.container().style.cursor = 'default';
			});

			curentLayerToAdd.add(bPlayerGroup);
			curentLayerToAdd.draw();
			amountBluePlayers[i] -= 1;
			availableBluePlayers.innerHTML = amountBluePlayers[i];

			break;
		case ("ball"):
    		var ball = new Konva.Rect(
			{
				x: setPositionX,
				y: setPositionY,
		        fill: '#FFF',
				draggable: true,
				name: 'canvas-object',
				opacity: 1,
				cornerRadius: 5,
				width: 8,
				height: 8,
				stroke: "rgba(185,194,210,0.5)",
				strokeEnabled: false,
				strokeWidth: 2,
				objectType: 'ball',
			});

		  	ball.selected = false;

			ball.dragBoundFunc(function(pos) 
			{
			  var newY = pos.y > stage.height()-((stage.height()/150)*ball.getAttr("height")) ? stage.height()-((stage.height()/150)*ball.getAttr("height")) : (pos.y < 0 ? 0 : pos.y);
			  var newX = pos.x > stage.width()-((stage.width()/100)*ball.getAttr("width")) ? stage.width()-((stage.width()/100)*ball.getAttr("width")) : (pos.x < 0 ? 0 : pos.x);
			  return {
			    x: newX,
			    y: newY
			  };
			});

			ball.on('click', function() 
			{
				onObjectClick(ball);
			});

			ball.on('tap', function() 
			{
				onObjectClick(ball);
			});

			ball.on('mouseenter', function() 
			{
				stage.container().style.cursor = 'move';
			});

			ball.on('mouseleave', function() 
			{
				stage.container().style.cursor = 'default';
			});

			curentLayerToAdd.add(ball);
			curentLayerToAdd.draw();
			
			amountFootballs[i] -= 1;
			availableFootballs.innerHTML = amountFootballs[i];
			break;
		}
	}
}