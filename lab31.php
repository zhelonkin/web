<!DOCTYPE html>
<html>
<head>
  <title>Lab3</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/style.css" />
  <?php include('include/get_date.inc.php'); ?>
</head>
<body>
  <form class="form" action="save_info.php" method="post">
    <div class="headline">Sign Up</div>
    <div class="sub_headline">It's free and always will be.</div>
    <div class="info_block">First Name:
      <input class="text_area" type="text" name="first_name">
    </div>
    <div class="info_block">Last Name:  
     <input class="text_area" type="text" name="last_name">
    </div>
    <div class="info_block">Your Email: 
     <input class="text_area" type="email" name="email">
    </div>
    <div class="info_block">Re-enter Email: 
      <input class="text_area" type="email" name="re_email">
    </div>
    <div class="info_block">New Password:   
      <input class="text_area" type="password" name="password">
    </div>
    <div class="info_block">I am:
      <select class="sex_text" name="sex">
        <option selected hidden>Select Sex:</option>
        <option>male</option>
        <option>female</option>
     </select>
    </div>
    <div class="info_block">Birthday:
      <select class="month_text" name="month">
        <option selected hidden>Month:</option>
        <?= getMonth(); ?>
      </select>
    
      <select class="day_text" name="day">
        <option selected hidden>Day:</option>
        <?= getDay(); ?>
      </select>     
    
      <select class="year_text" name="year">
        <option selected hidden>Year:</option>
       <?= getYear(); ?>
      </select>
    </div>
    <div class="end_line">Why do I need to provide this?</div>
    <input class="button" type="image" src="images/sign_up.png">
  </form>
</body>
</html>