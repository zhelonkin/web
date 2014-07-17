<!DOCTYPE html>
<html>
<head>
  <title>Print User Info</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="../templates/style.css" />
</head>
<body>
  <div class="form">
    <div class="headline">User info</div>
    <ul class="left">
      <li class="info_block first">First Name:</li>
      <li class="info_block all">Last Name:</li>
      <li class="info_block all">Email:</li>
      <li class="info_block all">Sex:</li>
      <li class="info_block all">Birthday:</li>
    </ul>
    <ul class="right">
      <li class="output_text">{$name[0]}</li>
      <li class="output_text">{$name[1]}</li>
      <li class="output_text">{$name[2]}</li>
      <li class="output_text">{$name[5]}</li>
      <li class="output_text">{$name[7]}/{$name[6]}/{$name[8]}</li>
    </ul>
    <div class="clear"></div>
  </div>  
</body>
</html>