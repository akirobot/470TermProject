#!/usr/local/php5/bin/php-cgi

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>LBJLS - Registration</title>
        <link href ="css/reset.css" rel="stylesheet"/>
        <link href = "css/main.css" rel="stylesheet"/>
    </head>
    <body>
        <header>
            <p>Student Project - Not a commercial site</p>
            <h1>
                Long Beach Japanese Language School
            </h1>
            <nav id="navigation">
                <ul>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="schedule.html">Class Schedule</a>
                    </li>
                    <li>
                        <a href="divisions.html">Divisions</a>
                    </li>
                    <li>
                        <a href="registration.php">Register</a>
                    </li>
                </ul>
            </nav>
        </header>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<fieldset>
		<legend>Student Information</legend>
		<p>
			<label for="first_name">First Name</label>
        		<input type="text" name="first_name" id="first_name" required="true"/>
		</p>
	
		<p>
			<label for="last_name">Last Name</label>
        		<input type="text" name="last_name" id="last_name" required="true"/>
		</p>

		<p>
			<label for="middle_name">Middle Name</label>
        		<input type="text" name="middle_name" id="middle_name"/>
		</p>

		<p>
			<label for="email">Email Address</label>
        		<input type="email" name="email" id="email" required="true"/>
		</p>

		<p>
			<label for="birthdate">Date of Birth</label>
        		<input type="date" name="birthdate" id="birthdate" required="true"/>
		</p>

		<p>
			<label for="gender">Gender</label>
        		<input type="radio" name="gender" value="female" required="true">Female
			<input type="radio" name="gender" value="male">Male
		</p>

		<p>
			<label for="home_address">Home address</label>
        		<input type="text" name="home_address" id="home_address" required="true"/>
		</p>

		<p>
			<label for="city">City</label>
        		<input type="text" name="city" id="city" required="true"/>
		</p>

		<p>
			<label for="zipcode">Zipcode</label>
        		<input type="number" name="zipcode" id="zipcode" required="true"/>
		</p>

		<p>
			<label for="primary_phone">Primary Phone Number</label>
        		<input type="text" name="primary_phone" id="primary_phone" required="true"/>
		</p>

		<p>
			<label for="secondary_phone">Secondary Phone Number</label>
        		<input type="text" name="secondary_phone" id="secondary_phone" required="true"/>
		</p>

		<p>
			<label for="text_phone">Phone number that we can send text to communicate</label>
        		<input type="text" name="text_phone" id="text_phone" required="true"/>
		</p>
	</fieldset>
		

	<fieldset>
		<legend>Emergency Contact Information</legend>
		<p>
			<label for="contact_first_name">First Name</label>
        		<input type="text" name="contact_first_name" id="contact_first_name" required="true"/>
		</p>
	
		<p>
			<label for="contact_last_name">Last Name</label>
        		<input type="text" name="contact_last_name" id="contact_last_name" required="true"/>
		</p>

		<p>
			<label for="contact_middle_name">Middle Name</label>
        		<input type="text" name="contact_middle_name" id="contact_middle_name"/>
		</p>

		<p>
			<label for="contact_phone">Phone Number</label>
        		<input type="text" name="contact_phone" id="primary_phone" required="true"/>
		</p>

		<p>
			<label for="contact_relation">Relation to Student</label>
        		<input type="text" name="contact_relation" id="contact_relation" required="true"/>
		</p>
	</fieldset>
	
	<fieldset>
		<legend>Student Background</legend>

		<p>
			<label for="general_school_name">Name of High School/College</label>
        		<input type="text" name="general_school_name" id="general_school_name"/>
		</p>

		<p>
			<label for="education">Have you studied Japanese?</label>
        		<input type="radio" name="education" value="yes" required="true">Yes
			<input type="radio" name="education" value="no">No
		</p>

		<p>
			<label for="education_duration">How long?</label>
        		<input type="text" name="education_duration" id="education_duration"/>
		</p>

		<p>
			<label for="japanese_school_name">Name of School</label>
        		<input type="text" name="japanese_school_name" id="japanese_school_name"/>
		</p>
		
		<p>
			<label for="education_time">When?</label>
        		<input type="text" name="education_time" id="education_time"/>
		</p>

		<p>
			<label for="reference">How did you hear about us?</label>
        		<input type="radio" name="reference" value="school website" required="true">School Website
			<input type="radio" name="reference" value="school facebook">School Facebook
			<input type="radio" name="reference" value="yelp">Yelp
			<input type="radio" name="reference" value="person">Family or Friend
			<input type="radio" name="reference" value="other">Other
			<input type="text" name="reference_other" id="reference_other"/>
		</p>
	
		<p>
			<label for="objective">Your objective, goal, expectation to study Japanese language?</label>
        		<input type="text" name="objective" id="objective"/>
		</p>	
	</fieldset>
		

		<input type="submit" name="submit" value="Submit"> <button type="reset" value="reset">Reset</button>
	</form>
    </body>
    <footer>
        <p>Contact Information:</p>
        <p>Kevin Kobata: <a href="mailto:kobatakevin@gmail.com">kobatakevin@gmail.com</a></p>
        <p>Anthony Lopez: <a href="mailto:alopezz217@gmail.com">alopezz217@gmail.com</a></p>
        <p>Austin Cheng: <a href="mailto:austinjcheng@gmail.com">austinjcheng@gmail.com</a></p>
        <p>Justin Le: <a href="mailto:Justin.Le825@gmail.com">Justin.Le825@gmail.com</a></p>
    </footer>
</html>