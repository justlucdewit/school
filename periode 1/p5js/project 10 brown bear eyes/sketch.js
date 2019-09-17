function setup(){
	createCanvas(400, 400);
	x = 207;
	y = 209;
	noStroke();
	faceSize = 213;

	earSize = faceSize*0.5;
	fill(89, 52, 17);
	ellipse(x-faceSize*2/5, y-faceSize*2/5, earSize, earSize);
	ellipse(x+faceSize*2/5, y-faceSize*2/5, earSize, earSize);

	fill(163, 113, 5);
	ellipse(x, y, faceSize, faceSize)

	fill(0);
	let eyeSize = faceSize/8;
	ellipse(x-faceSize/4, y-faceSize/8, eyeSize, eyeSize);
	ellipse(x+faceSize/4, y-faceSize/8, eyeSize, eyeSize);

	fill(89, 52, 20);
	ellipse(x, y+faceSize/8, faceSize*4/15, faceSize/5);
}

function draw(){

}