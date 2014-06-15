<!DOCTYPE html>
<html>
    <head>
        <title>Lab3</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
    <form action="lab31Action.php" method="get"
        enctype="application/x-www-form-urlencoded">
        <div class="sign_up">Sign Up</div>
        <div class="It">It's free and always will be.</div>
        <div class="info_block">First Name: 
            <input class="text_area" type="text" name="first_name">
        </div>
        <div class="info_block">Last Name:  
            <input class="text_area" type="text" name="last_name">
        </div>
        <div class="info_block">Your Email: 
            <input class="text_area" type="text" name="email">
        </div>
        <div class="info_block">Re-enter Email: 
            <input class="text_area" type="text" name="re_mail">
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
                <option value="01">Jan</option>
                <option value="02">Feb</option>
                <option value="03">Mar</option>
                <option value="04">Apr</option>
                <option value="05">May</option>
                <option value="06">Jun</option>
                <option value="07">Jul</option>
                <option value="08">Aug</option>
                <option value="09">Sep</option>
                <option value="10">Oct</option>
                <option value="11">Nov</option>
                <option value="12">Dec</option>
            </select>
            
            <select class="day_text" name="day">
                <option selected hidden>Day:</option>
                <?php
                  for ( $day = 1; $day < 31; $day++ )
                  { ?>
                    <option><?php echo $day; ?></option>
                <?php  }  ?>
            </select>     
            
            <select class="year_text" name="year">
                <option selected hidden>Year:</option>
                <?php
                  for ( $year = 1900; $year < 2014; $year++ )
                  { ?>
                    <option><?php echo $year; ?></option>
                <?php  }  ?> 
            </select>
        </div>
        <div class="Why_do">Why do I need to provide this?</div>
        <input class="button" type="image" src="images/sign_up.png">
    </form>
    </body>
</html>

