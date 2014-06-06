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
		<div>It's free and always will be.</div>
		<div>First Name:
            <input class="text_area" type="text" name="first_name" /><div>
		<div>Last Name: 
            <input class="text_area" type="text" name="last_name" /><div>
		<div>Your Email:
            <input class="text_area" type="text" name="email" /><div>
		<div>Re-enter Email:
            <input class="text_area" type="text" name="re_email" /><div>
		<div>New Password:
            <input class="text_area" type="text" name="password" /><div>
		<div>I am:
            <select name="sex">
                <option selected hidden>Select sex:</option>
                <option>male</option>
                <option>female</option>
            </select><div>
		<div>Birthday:
      
        <select class="list" name="Month">
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
        
        <select class="list" name="Day">
            <option selected hidden>Day:</option>
            <?php
              for ( $day = 1; $day < 31; $day++ )
              { ?>
                <option><?php echo $day; ?></option>
            <?php  }  ?>
        </select>     
        
        <select class="list" name="Year">
            <option selected hidden>Year:</option>
            <?php
              for ( $year = 1900; $year < 2014; $year++ )
              { ?>
                <option><?php echo $year; ?></option>
            <?php  }  ?> 
        </select></div>
      
		<div>Why do I need to provide this?<div>
        <button class="button"></button>
	</form>
	
	
	</body>
</html>