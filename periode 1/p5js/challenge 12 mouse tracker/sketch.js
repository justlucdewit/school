function setup(){
	createCanvas(400, 400);
	fill(255, 0, 255);
}

function draw(){
	background(255);
	ellipse(mouseX, mouseY, 12, 12);
	var label = mouseX+" , "+mouseY;
	text(label, mouseX+20, mouseY);
}