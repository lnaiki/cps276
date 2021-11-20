<?php

echo time(); // DISPLAYS E.G."1229509316"
echo "<br>";

//set timezone to detroit time: 
date_default_timezone_set('America/Detroit');

//The mktime() function returns a timestamp based on up to six-time/date arguments, (hour, minute, second, month, day of month, year)
echo mktime( 14, 32, 12, 1, 6, 1972 ); //displays timestamp for 2:32:12pm on january 6, 1972
echo "<br>";
echo mktime( 10, 0, 0 ); //displays timestamp representing 10am on current date. 
echo "<br>";

echo "<br>";
echo "******** strtotime() ********"; 
$timestamp = strtotime("15th September 2006 3:12pm");
echo $timestamp;
echo "<br>";

echo "<br>";
echo "******** getDate() ********";
echo "<br>";
 // DISPLAYS"JOHN LENNON WAS BORN ON 9 OCTOBER, 1940"
$johnLennonsBirthday = strtotime("October 9, 1940");
$d = getdate( $johnLennonsBirthday );
echo "John Lennon was born on " . $d["mday"] ." " . $d["month"] .", " .$d["year"];
echo "<br>";
//DISPLAYS THE CURRENT TIME IN HOURS AND MINUTES
$t = getDate();
echo "The current time is" . $t["hours"] .":". $t["minutes"];

//Extract a single date or time component from a timestamp.
echo "<br>";
echo "<br>";
echo "******** iDate() ********";
echo "<br>";
$d = strtotime("February 18, 2000 7:49am");
// DISPLAYS"THE YEAR 2000 IS A LEAP YEAR."
echo "The year " . idate("Y", $d );
echo " is " . ( idate("L", $d ) ?"":"not") ." a leap year<br>";
// DISPLAYS"THE MONTH IN QUESTION HAS 29 DAYS."
echo " The month in question has " . idate("t", $d ) ." days<b>";

echo "<br>";
echo "<br>";

echo "******** date() convert a timestamp to a date string ********";
echo "<br>";
$d = strtotime("March 28, 2006 9:42am");
// DISPLAYS"THE 28TH OF MARCH, 2006, AT 9:42 AM"
echo date("\T\h\e jS \o\\f F, Y, \a\\t g:i A", $d );
echo "<br>";
echo "<br>";

echo "******** checkdate() checks for valid date using month #(1-21) and day # (1-31) ********";
echo "<br>";
echo checkdate( 2, 31, 2009 )."<br>"; // DISPLAYS""(FALSE) (nothing)
echo checkdate( 2, 28, 2009 )."<br>"; // DISPLAYS"1"(TRUE)
?>