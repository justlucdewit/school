function randomtxt(txt){
	fill(random(255), random(255), random(255));
	text(txt, random(-20, 400), random(400))
}

function setup(){
	textSize(30);
	createCanvas(400, 400);
	for (let i = 0; i < 1000; i++){
		randomtxt("free money")
	}
	textSize(60);
	fill(0);
	text("get free \nmoney now!", 20, 60)
}

function draw(){

}

