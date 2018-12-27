<?php
		#Last modified on 9/27/2018
		//****************************************************************************
		
		date_default_timezone_set('America/New_York'); #Eastern Standard Time

		// Set the time to a variable to ensure all date functions are based off same value
		$currentTime = time();

		$timeZone = date( "e", $currentTime );
		$month = date( "F", $currentTime );
		$day = date( "l", $currentTime );
		$date = date( "d", $currentTime );
		$dateSuff = date( "S", $currentTime );
		$dayYear = date( "z", $currentTime );
		$year = date( "Y", $currentTime );
		$hours = date( "g", $currentTime );
		$minutes = date( "i", $currentTime );
		$seconds = date( "s", $currentTime );
		
		$results = "The time zone is set to " . $timeZone . "<br>";
		$results = "Today is " . $day . "<br> " . $month .		
		", the " . $date . $dateSuff . "<br>
		The Year " . $year . "<br>
		Day " . $dayYear . " of the year <br>
		The time is " . $hours . ":" . $minutes . " and " . $seconds . " seconds";

		// return time as json object
		echo json_encode( $results );
