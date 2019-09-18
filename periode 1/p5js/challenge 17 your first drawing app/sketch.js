function setup(){
	createCanvas(400, 400);
	noStroke();
	fill(247, 243, 0);
}

function draw(){
	if (mouseIsPressed){
		ellipse(mouseX, mouseY, 5, 5);
	}
}