function setup(){
	createCanvas(400, 400);

	let x = 200;
	let y = 200;

	noStroke();
	fill(30, 204, 91);

	ellipse(x, y, 200, 100);
	ellipse(x-50, y-50, 40, 40);
	ellipse(x+50, y-50, 40, 40);

	fill(255);
	ellipse(x-50, y-50, 30, 30);
	ellipse(x+50, y-50, 30, 30);

	fill(0);
	ellipse(x, y, 150, 50);
	rect(x-60, y-50, 10, 10);
	rect(x+55, y-50, 10, 10);
}

function draw(){

}