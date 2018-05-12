#!/usr/local/php5/bin/php-cgi

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>LBJLS - Registration</title>
        <link href ="css/reset.css" rel="stylesheet"/>
        <link href = "css/main.css" rel="stylesheet"/>
	<link rel="stylesheet" href="css/registration.css" />
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
	<form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<h1> Registration </h1>
	<fieldset class="form_panel">
		<legend class="form_heading">Student Information </legend>
		<div class="form_row">
			<div class="form_label">
				<label for="first_name">First Name</label>
			</div>
			<input class="form_field" type="text" name="first_name" id="first_name" required="true"/>
		</div>
		<div class="form_row">
			<div class="form_label">
				<label for="last_name">Last Name</label>
			</div>
			<input class="form_field" type="text" name="last_name" id="last_name" required="true"/>
		</div>
		<div class="form_row">
			<div class="form_label">
				<label for="middle_name">Middle Name</label>
			</div>
			<input class="form_field" type="text" name="middle_name" id="middle_name"/>
		</div>
		<div class="form_row">
			<div class="form_label">
				<label for="birthdate">Date of Birth</label>
			</div>
			<input class="form_field" type="date" name="birthdate" id="birthdate" required="true"/>
		</div>
		<div class="form_row">
			<div class="form_label">
				<label for="gender">Gender: </label>
			</div>
			<div class="form_field">
        			<input type="radio" name="gender" value="female" required="true">Female
				<input type="radio" name="gender" value="male">Male
			</div>
		</div>
		<div class="form_row">
			<div class="form_label">
				<label for="home_address">Home address</label>
			</div>
			<input class="form_field" type="text" name="home_address" id="home_address" required="true"/>
		</div>
		<div class="form_row">
			<div class="form_label">
				<label for="city">City</label>
			</div>
			<input class="form_field" type="text" name="city" id="city" required="true"/>
		</div>
		<div class="form_row">
			<div class="form_label">
				<label for="zipcode">Zipcode</label>
			</div>
			<input class="form_field" type="number" name="zipcode" id="zipcode" required="true"/>
		</div>
		<div class="form_row">
			<div class="form_label">
				<label for="email">Email Address</label>
			</div>
			<input class="form_field" type="email" name="email" id="email" required="true"/>
		</div>
		<div class="form_row">
			<div class="form_label">
				<label for="primary_phone">Primary Phone Number</label>
			</div>
			<input class="form_field" type="text" name="primary_phone" id="primary_phone" required="true"/>
		</div>
		<div class="form_row">
			<div class="form_label">
				<label for="secondary_phone">Secondary Phone Number</label>
			</div>
			<input class="form_field" type="text" name="secondary_phone" id="secondary_phone" required="true"/>
		</div>
		<div class="form_row">
			<div class="form_label">
				<label for="text_phone">Phone number that we can send text</label>
			</div>
			<input class="form_field" type="text" name="text_phone" id="text_phone" required="true"/>
		</div>
	</fieldset>
		

	<fieldset class="form_panel">
		<legend class="form_heading">Emergency Contact Information</legend>
		<div class="form_row">
			<div class="form_label">
				<label for="contact_first_name">First Name</label>
			</div>
			<input class="form_field" type="text" name="contact_first_name" id="contact_first_name" required="true"/>
		</div>
		<div class="form_row">
			<div class="form_label">
				<label for="contact_last_name">Last Name</label>
			</div>
			<input class="form_field" type="text" name="contact_last_name" id="contact_last_name" required="true"/>
		</div>
		<div class="form_row">
			<div class="form_label">
				<label for="contact_middle_name">Middle Name</label>
			</div>
			<input class="form_field" type="text" name="contact_middle_name" id="contact_middle_name"/>
		</div>
		<div class="form_row">
			<div class="form_label">
				<label for="contact_phone">Phone Number</label>
			</div>
			<input class="form_field" type="text" name="contact_phone" id="primary_phone" required="true"/>
		</div>
		<div class="form_row">
			<div class="form_label">
				<label for="contact_relation">Relation to Student</label>
			</div>
			<input class="form_field" type="text" name="contact_relation" id="contact_relation" required="true"/>
		</div>
	</fieldset>
	
	<fieldset class="form_panel">
		<legend class="form_heading">Student Background</legend>
		<div class="form_row">
			<div class="form_label">
				<label for="general_school_name">Name of High School/College</label>
			</div>
			<input class="form_field" type="text" name="general_school_name" id="general_school_name"/>
		</div>
		<div class="form_row">
			<div class="form_label">
				<label for="education">Have you studied Japanese?</label>
			</div>
			<div class="form_field">
				<input type="radio" name="education" value="yes" required="true">Yes
				<input type="radio" name="education" value="no">No
			</div>
		</div>
		<div class="form_row">
			<div class="form_label">
				<label for="education_duration">How long?</label>
			</div>
			<input class="form_field" type="text" name="education_duration" id="education_duration"/>
			
		</div>
		<div class="form_row">
			<div class="form_label">
				<label for="japanese_school_name">Name of School</label>
			</div>
			<input class="form_field" type="text" name="japanese_school_name" id="japanese_school_name"/>
		</div>
		<div class="form_row">
			<div class="form_label">
				<label for="education_time">When?</label>
			</div>
			<input class="form_field" type="text" name="education_time" id="education_time"/>
		</div>
		<div class="form_row">
			<div class="form_label">
				<label for="reference">How did you hear about us?</label>
			</div>
			<input class="form_field" type="text" name="reference" id="reference"/>
		</div>
		<div class="form_row">
			<div class="form_label">
				<label for="objective">Your objective, goal, expectation to study Japanese language?</label>
			</div>
			<input class="form_field" type="text" name="objective" id="objective"/>
		</div>
	</fieldset>
		
	<fieldset class="form_panel">
		<legend class="form_heading">Emergency Treatment Consent (for students under 18)</legend>
		<div class="form_minor_check">
			<input type="checkbox" id="minor_registration" name="minor_registration" value="minor_registration">
			<label for="minor_registration"> The person registering is a minor </label> 
		</div>
		<br>
		<p class="consent_statement">
			AS THE PARENT OR AUTHORIZED REPRESENTATIVE, I HEREBY GIVE CONSENT TO LBJLS TO 
			OBTAIN ALL EMERGENCY MEDICAL OR DENTAL CARE PRESCRIBED BY A DULY LICENSED 
			PHYSICIAN (M.D.),  DENTIST (D.D.S.) OR QUALIFIED MEDICAL PERSONNEL. FOR .  THIS 
			CARE MAY BE GIVEN UNDER WHATEVER CONDITIONS ARE NECESSARY TO PRESERVE THE LIFE, 
			LIMB OR WELL BEING OF THE CHILD NAMED ABOVE.
		</p>
		<br>
		<div class="form_row">
			<div class="form_label">
				<label for="medication_allergy">Does your child have any medication allergies?</label>
			</div>
			<div class="form_field">
				<input type="radio" name="medication_allergy" value="yes" required="true">Yes
				<input type="radio" name="medication_allergy" value="no">No
			</div>
		</div>
		<div class="form_row">
			<div class="form_label">
				<label for="medication_allergy_list">List medication allergies (if any)</label>
			</div>
			<input class="form_field" type="text" name="medication_allergy_list" id="medication_allergy_list"/>
		</div>
		<div class="form_row">
			<div class="form_label">
				<label for="food_allergy">Does your child have any food allergies?</label>
			</div>
			<div class="form_field">
				<input type="radio" name="food_allergy" value="yes" required="true">Yes
				<input type="radio" name="fod_allergyallergy" value="no">No
			</div>
		</div>
		<div class="form_row">
			<div class="form_label">
				<label for="food_allergy_list">List food allergies (if any)</label>
			</div>
			<input class="form_field" type="text" name="food_allergy_list" id="food_allergy_list"/>
		</div>
	</fieldset>
	<div class="form_model_release_check">
			<input type="checkbox" id="model_release" name="model_release" value="model_release">
			<label for="minor_registration"> 
				I hereby grant and assign Long Beach Japanese Language School and its 
				legal representatives the unrestricted right to use and publish for editorial, trade, advertising or 
				any other purpose and in any manner and medium, including website and internet promotion, all photographic, 
				video, and digital images involving the Minor Child and/or Adult designated above. These pictures are, 
				usually obtained during our schools participation at the Long Beach Japanese Cultural Center Festival in 
				June, the summer program in July and August, the international Food Fair during Labor Day weekend, normal 
				classroom time and other like events and activities held on campus. By signing this,  I hereby Long Beach 
				Japanese Language School, and its representatives from all claims and liability relating to said photographs, 
				video, and digital images.
			</label> 
		</div>
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