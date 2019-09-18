let bodyX = 200;
let bodyY = 220;
let bodyW = 118;
let bodyH = bodyW/2;

function setup(){
	createCanvas(400, 400);
}

function draw(){
	background(207, 254, 255);
	fill(240, 209, 36);
	ellipse(bodyX+60, bodyY, 40, 40);
	ellipse(bodyX, bodyY, bodyW, 106);
	ellipse(bodyX, bodyY-70, bodyH, 47);

	fill(242, 89, 0);
	ellipse(bodyX-19, bodyY-56, 50, 20);

	fill(0);
	ellipse(bodyX-25, bodyY-80, 20, 20);
	ellipse(bodyX-11, bodyY-80, 20, 20);
}

