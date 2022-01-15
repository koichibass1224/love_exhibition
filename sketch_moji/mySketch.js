let blocks = [];
let graphics;
let letters = "愛　＝　◯◯展";
let counter = 0;
let char;


var canvas;

function canvasSetup(){
}

function windowResized(){
    resizeCanvas(windowWidth, windowHeight);
    canvasSetup();
}

function setup() {
    canvas = createCanvas(windowWidth, windowHeight);
    canvas.style('z-index','-1');
    canvas.style('opacity','0.3');
    canvasSetup();

	colorMode(HSB, 360, 100, 100, 100);
	graphics = createGraphics(width, height);
	graphics.noStroke();
	for (let i = 0; i < width * height * 3 / 100; i++) {
		let x = random(width);
		let y = random(height);
		let w = random(3);
		let h = random(3);
		let a = random(TWO_PI);
		graphics.fill(random(255), 30);
		graphics.push();
		graphics.translate(x, y);
		graphics.rotate(a);
		graphics.ellipse(0, 0, w, h);
		graphics.pop();
	}
	matter.init();
	platform = matter.makeBarrier(width / 2, height, width, 100);

}

function makeNekodearu(x, y, d) {
	tSize = random(d / 4, d);
	textSize(tSize);
	textFont("serif");
	char = letters.substr(counter++%letters.length, 1).toUpperCase();
	let b = matter.makeSign(char, x, y);
	b.textSize = tSize;
	blocks.push(b);
}

function mousePressed() {
	makeNekodearu(mouseX, mouseY, random(width / 10));
}

function draw() {
	clear();

	fill(0);
	noStroke();
	platform.show();

	if (frameCount % 10 == 0) {
		let d = random(width/10,width / 5);
		let x = random(d/2,width-d/2);
		let y = random(d/2,height / 8-d/2);
		makeNekodearu(x, y, d);
	}



	for (let i = blocks.length - 1; i >= 0; i--) {
		let b = blocks[i];
		// print(b);
		let p = b.body.position;
		push();
		translate(p.x, p.y, 0);
		rotate(b.body.angle);
		fill(0, 0, 0);
		textAlign(CENTER, CENTER);
		textStyle(BOLD);
		textSize(b.textSize);
		text(b.text, 0, 0);
		pop();
		if (b.isOffCanvas()) {
			matter.forget(b);
			blocks.splice(i, 1);
		}
	}
	push();
	let g = get();
	clear();
	background(0, 0, 90);
	image(graphics, 0, 0);
	drawingContext.shadowColor = color(0, 0, 0, 33);
	drawingContext.shadowBlur = width / 40;
	drawingContext.shadowOffsetX = width / 100;
	drawingContext.shadowOffsetY = width / 50;
	image(g, 0, 0);
	pop();
}