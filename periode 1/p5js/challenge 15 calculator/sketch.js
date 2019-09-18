function add(num1, num2) {
    return num1 + num2;
}

function subtract(num1, num2) {
    return num1-num2;
}

function multiply(num1, num2) {
    return num1*num2;
}

function divide(num1, num2) {
    return num1/num2;
}

function setup(){
	createCanvas(400, 400);
}

function draw(){
	fill(255, 0, 0);
	text("15 + 3 is " + add(15, 3), 10, 20);
	text("15 - 3 is " + subtract(15, 3), 10, 50);
	text("15 * 3 is " + multiply(15, 3), 10, 80);
	text("15 / 3 is " + divide(15, 3), 10, 110);

	text("8 + 4 is " + add(8, 4), 10, 170);
	text("8 - 4 is " + subtract(8, 4), 10, 200);
	text("8 * 4 is " + multiply(8, 4), 10, 230);
	text("8 / 4 is " + divide(8, 4), 10, 260);
}