const RADIUS = 50;          // Радиус окружности
const MAX_X = 640 - RADIUS; // Максимально допустимая координата x
const MIN_X = RADIUS;       // Минимально допустимая координата x
const MAX_Y = 480 - RADIUS; // Максимально допустимая координата y
const MIN_Y = RADIUS;       // Минимально допустимая координата y
const START_ANGLE = 0;
const END_ANGLE = 2 * Math.PI;

function onWindowLoaded() 
{
    red_circle();
}

function red_circle()
{
    var canvas = document.getElementById('my_canvas'); // Размер canvas - 640*480
    var context = canvas.getContext('2d');  
    var random_x = Math.random(); // Слуйчайная величина в диапазоне (0,1)
    var random_y = Math.random(); // Слуйчайная величина в диапазоне (0,1)
    // Случайно заданная координата x в диапазоне (MAX_X-MIN_X) 
    var x = random_x * (MAX_X-MIN_X) + MIN_X;
    // Случайно заданная координата y в диапазоне (MAX_Y-MIN_Y)   
    var y = random_y * (MAX_Y-MIN_Y) + MIN_Y;
    context.beginPath();
    context.arc(x, y, RADIUS, START_ANGLE, END_ANGLE);
    context.fillStyle = "red";
    context.fill();
}

window.onload = onWindowLoaded;