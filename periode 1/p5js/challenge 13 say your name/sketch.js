function sayHi(){
	let textX = random(0, 300);
	let textY = random(0, 300);
	text("Hiiii, " + yourName, textX, textY);
}

function setup(){
	createCanvas(400, 400);
	yourName = "Luke";
	fill(255, 0, 0);
	textSize(30);

	sayHi();
	sayHi();
	sayHi();
	sayHi();
	sayHi();
	sayHi();
	sayHi();
}

function draw(){

}