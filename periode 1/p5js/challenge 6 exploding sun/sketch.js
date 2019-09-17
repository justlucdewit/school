function setup(){
	createCanvas(400, 400);

	noStroke();
	background(82, 222, 240);
	sunSize = 30;
}

function draw(){
	sunSize++;
	fill(255, 204, 0);
	ellipse(200, 298, sunSize, sunSize);
	fill(76, 168, 67);
	rect(0, 300, 400, 100);
}