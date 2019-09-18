function drawFish(){
	var centerX = random(300);
	var centerY = random(300);
	var bodyLength = random(100, 200);
	var bodyHeight = random(50, 150);
	var bodyColor = color(random(255), random(255), random(255));

	fill(bodyColor);
	// body
	ellipse(centerX, centerY, bodyLength, bodyHeight);
	// tail
	var tailWidth = bodyLength/4;
	var tailHeight = bodyHeight/2;
	triangle(centerX-bodyLength/2, centerY,
	         centerX-bodyLength/2-tailWidth, centerY-tailHeight,
	         centerX-bodyLength/2-tailWidth, centerY+tailHeight);
	// eye
	fill(33, 33, 33);
	ellipse(centerX+bodyLength/4, centerY, bodyHeight/5, bodyHeight/5);
}

function setup(){
	createCanvas(400, 400);
	noStroke();
	background(89, 216, 255);

	for(let i = 0; i < 100; i++){
		drawFish();
	}
}