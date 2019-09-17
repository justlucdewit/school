let x = 0;
let y = 0;

function setup(){
	createCanvas(400, 400);
	
	fill(255, 242, 0);

}

function draw(){
	background(29, 40, 115);
	ellipse(x, y, 10, 10);

	x++;
	y++;
}