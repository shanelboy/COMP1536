<?php
	//Obtaining user inputs and changes them to lower case
	$first = strtolower($_POST["firstname"]);
	$last = strtolower($_POST["lastname"]);
	$email = strtolower($_POST["email"]);
	
	//Concatenating the user inputs for comparison
	$entry = $first." ".$last." ".$email;
	
	//Grabbing server file information
	$contents = strtolower(file_get_contents('users.txt'));
	
	//Splitting the file information into separate lines
	$line = explode("\n", $contents);	
	
	//Setting $line into an array
	foreach($line as $key => $value){
		//echo "line[".$key."] = ".$value."<br>";
		//Comparing user inputs to server information
		if($entry == $value){
			$status = "true";
			break;
		} else {
			$status = "false";
		}
	}
	
	//Re-direction of user
	if($status == "true"){
		header("Location: http://www.students.bcitdev.com/A00749291/Lab8/confirm.html");
	} else {
		header("Location: http://www.students.bcitdev.com/A00749291/Lab8/fail.html");
	}
?>