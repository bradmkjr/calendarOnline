<!DOCTYPE html>
<html>
	<head>
		<title> Calendar online </title>
		<h1> Welcome to Kyle's Online Calendar </h1>
		<link rel="stylesheet" href="calendarStyle.css">
		<script src="calendarScript.js"></script>
	</head>
	<meta http-equiv="refresh" content="1" > 
	<body>
	<p> You ever wonder what time it is 
	<i> at the current moment? </i> now you will know </p>
	
	<?php
		#Last modified on 9/27/2018
		//****************************************************************************
		
		date_default_timezone_set('America/New_York'); #Eastern Standard Time
		$timeZone = date("e");
		$month = date("F");
		$day = date("l");
		$date = date("d");
		$dateSuff = date("S");
		$dayYear = date("z");
		$year = date("Y");
		$hours = date("g");
		$minutes = date("i");
		$seconds = date("s");
		
		echo "The time zone is set to " . $timeZone . "<br>";
		echo "Today is " . $day . "<br> " . $month .		
		", the " . $date . $dateSuff . "<br>
		The Year " . $year . "<br>
		Day " . $dayYear . " of the year <br>
		The time is " . $hours . ":" . $minutes . " and " . $seconds . " seconds";
	?>
	
	</body>
</html>
