function onWindowLoaded() 
{
  red_circle();
}

function red_circle()
{
  var canvas = document.getElementById('my_canvas'); // Размер canvas - 640*480
  var context = canvas.getContext('2d');
  const radius = 50;          // Радиус окружности
  const max_x = 640 - radius; // Максимально допустимая координата x
  const min_x = radius;       // Минимально допустимая координата x
  const max_y = 480 - radius; // Максимально допустимая координата y
  const min_y = radius;       // Минимально допустимая координата y
  var random_x = Math.random(); // Слуйчайная величина в диапазоне (0,1)
  var random_y = Math.random(); // Слуйчайная величина в диапазоне (0,1)
  // Случайно заданная координата x в диапазоне (max_x-min_x) 
  var x = random_x * (max_x-min_x) + min_x;
  // Случайно заданная координата y в диапазоне (max_y-min_y)   
  var y = random_y * (max_y-min_y) + min_y;
  context.beginPath();
  context.arc(x, y, radius, 0, 2*Math.PI);
  context.fillStyle = "red";
  context.fill();
}

window.onload = onWindowLoaded;