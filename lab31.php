<!DOCTYPE html>
<html>
    <head>
        <title>Lab3</title>
		<meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
	<form action="lab31.php" method="get"
		enctype="application/x-www-form-urlencoded">
		<div class="sign_up">Sign Up</div>
		<div class="It">It's free and always will be.</div>
		<p>First Name: <input class="text_area" type="text" name="first_name"></p>
		<p>Last Name:  <input class="text_area" type="text" name="last_name"></p>
        <p>Your Email: <input class="text_area" type="text" name="email"></p>
		<p>Re-enter Email: <input class="text_area" type="text" name="re_email"></p>
		<p>New Password:   <input class="text_area" type="text" name="password"></p>
		<p>I am:
            <select class="sex_text" name="sex">
                <option selected hidden>Select sex:</option>
                <option>male</option>
                <option>female</option>
            </select>
        </p>
		<p>Birthday:
        <select class="month_text" name="Month">
            <option selected hidden>Month:</option>
            <option value="1">Jan</option>
            <option value="2">Feb</option>
            <option value="3">Mar</option>
            <option value="4">Apr</option>
            <option value="5">May</option>
            <option value="6">Jun</option>
            <option value="7">Jul</option>
            <option value="8">Aug</option>
            <option value="9">Sep</option>
            <option value="10">Oct</option>
            <option value="11">Nov</option>
            <option value="12">Dec</option>
        </select>
        
        <select class="day_text" name="Day">
            <option selected hidden>Day:</option>
            <?php
              for ( $day = 1; $day < 31; $day++ )
              { ?>
                <option><?php echo $day; ?></option>
            <?php  }  ?>
        </select>     
        
        <select class="year_text" name="Year">
            <option selected hidden>Year:</option>
            <?php
              for ( $year = 1900; $year < 2014; $year++ )
              { ?>
                <option><?php echo $year; ?></option>
            <?php  }  ?> 
        </select>
        </p>
		<div class="Why_do">Why do I need to provide this?</div>
        <input class="button" type="image" src="images/sign_up.png">
	</form>
	</body>
</html>