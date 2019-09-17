function setup(){
	createCanvas(400, 400);
	noStroke();
	leftX = 143;
	rightX = 211;
	sunRadius = 100;
}

function draw(){
	background(184, 236, 255);
	fill(255, 170, 0);
	ellipse(200, 100, sunRadius, sunRadius);

	fill(255);
	ellipse(leftX, 150, 126, 97);
	ellipse(leftX+62, 150, 70, 60);
	ellipse(leftX-62, 150, 70, 60);

	ellipse(rightX, 150, 126, 97);
	ellipse(rightX+62, 150, 70, 60);
	ellipse(rightX-62, 150, 70, 60);

	rightX += 1;
	leftX -= 1;
	sunRadius += 2;
}