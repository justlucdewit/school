function setup(){
	createCanvas(400, 400);
}

function draw(){
	fill(mouseX, mouseY, 0);
	stroke(0);
	ellipse(mouseX, mouseY, 50, 50);
}