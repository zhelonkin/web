<DOCTYPE html>
<html>
    <head>
	    <title>signup</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css">
	</head>
	
	<body>
	  <h1>Sign Up</h1>
	  <p>It's free and always will be</p>
	  <form action="/signup2.php" method="post"
		      enctype="text/plain">
		    <label>First name:</label>
			<input type="text" name="first_name" />
			<br />
			<label>Last name:</label>
			<input type="text" name="last_name" />
			<br />
			<label>Your Email:</label>
			<input type="text" name="email" />
			<br />
			<label>Re-enter Email:</label>
			<input type="text" name="re_email" />
			<br />
			<label>New password:</label>
			<input type="text" name="password" />
			<br />
			<label>I am:</label>
			<select><option>Select sex</option>
			<option>male</option>
			<option>female</option>
			</select>
			<br />
			<label>Birthday:</label>
			<select name="month_of_birth"><option hidden selected>Month:</option>
			<option value="1">Jan</option>
			<option value="2">Feb</option>
			<option value="3">March</option>
			<option value="4">April</option>
			<option value="5">May</option>
			<option value="6">June</option>
			<option value="7">July</option>
			<option value="8">August</option>
			<option value="9">September</option>
			<option value="10">October</option>
			<option value="11">November</option>
			<option value="12">December</option>
			</select>
			<select name="day_of_birth"><option hidden selected>Day:</option>
			<?php
			    for ($day = 1; $day <= 31; ++$day)
				{
			?>
				    <option><?=$day;?></option>
			<?php
			    }
			?>
			</select>
			<select name="year_of_birth"><option hidden selected>Year:</option>
			<?php
				for ($year = 1900; $year <= 2014; ++$year)
				{
			?>
					<option><?=$year;?></option>
			<?php
				}
			?>
			</select>
			<br />
			<div><span>Why do I need to provide this?</span></div>
			<div class="sign_up_button"><input type="image" src="images/sign_up_button.png" /></div>
		</form>
	  
	</body>
</html>