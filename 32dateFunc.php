<?php
//1. set the default timezone to use.
// https://raw.githubusercontent.com/leon-do/Timezones/main/timezone.json
date_default_timezone_set('Asia/Kolkata');
// date_default_timezone_set('UTC');
// ----


//2. get the default timezone.
// if (date_default_timezone_get()) {
//     echo 'date_default_timezone_set: ' . date_default_timezone_get() . '<br />';
// }
// echo "Today's date is :";
// $today = date("d/m/y"); 
// echo $today;
// ----

// 3. date
// Prints the day
// echo date("l") . "<br>";

// Prints the day, date, month, year, time, AM or PM
// echo date("l j \of F Y h:i:s A");
// echo date("N");

// $today = date("F j, Y, g:i a");                 
// echo $today ;
// $today = date("m/d/y");                         
// $today = date("j, n, Y");                       
// $today = date("Ymd");                           
// $today = date('h-i-s, j-m-y');     
// echo $today ;
// $today = date('\i\t \i\s \t\h\e jS \d\a\y.');   
// echo $today ;
// $today = date("D M j G:i:s T Y");               
// echo $today ;
// $today = date('H:m:s \m \i\s\ \m\o\n\t\h');     
// $today = date("H:i:s");                         
// $today = date("Y-m-d H:i:s");  
//---


//4. oops method - DateTime Class
$dateTime = new DateTime();
$currentDate = $dateTime->format('Y-m-d H:i:s');
echo"Current date and time: $currentDate";

// $dateTime = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
// $currentTime = $dateTime->format('H:i:s');
// echo"Current date and time: $currentTime";

// //5. The time() - function returns the current time in seconds since the Unix Epoch.
// $currentTimestamp = time();
// echo"Current Unix timestamp: " . $currentTimestamp;
// ---

// //6. strtotime() - This function parses a string into a Unix timestamp.
// $dateString = "2023-10-15 15:30:00";
// $timestamp = strtotime($dateString);
// echo"Unix timestamp for $dateString: " . $timestamp;
// ---

// //7. mktime() - This function returns the Unix timestamp for a date.
// $timestamp = mktime(12, 30, 0, 10, 15, 2023);
// echo"Unix timestamp for October 15, 2023, 12:30 PM: " . $timestamp;
// ---


// //8. checkdate() - This function validates a Gregorian calendar date.
// $month = 2;
// $day = 29;
// $year = 2024;
// if (checkdate($month, $day, $year)) {
//     echo"The date is valid: $year-$month-$day";
// } else {
//     echo"The date is not valid: $year-$month-$day";
// }
// ---

// //9. getdate() - The getdate() function returns date/time information in form of an array.
// $dateInfo = getdate();
// print_r($dateInfo);
// ---

// //10. gettimeofday() - This function returns the current time in form of an array.
// $dateInfo = gettimeofday();
// echo $dateInfo;
// ---

// //11. gmdate() formats a GMT/UTC date/time.
// $utcDate = gmdate('Y-m-d H:i:s');
// echo"UTC date and time: $utcDate";
// ---

// //12. idate() - function formats a local time/date according to local settings.
// $date = idate('m'); 
// echo"Current hour: $date";
// ---

// //13. microtime() returns the current Unix timestamp with microseconds.
// $microtime = microtime(true);
// echo"Current Unix timestamp with microseconds: $microtime";
// ---

// //14. strftim() - his function parses a time/date generated.
// $dateString = '2023-10-15 15:30:00';
// $format = 'Y-m-d H:i:s';
// $date = DateTime::createFromFormat($format, $dateString);
// echo"Parsed Date: " . $date->format($format);
// ---

// //15.  date_add() function adds days, months, years, hours, minutes, and seconds to a date.
// $date = new DateTime('2023-10-15');
// $date->add(new DateInterval('P3D')); // Add 3 days
// echo"New Date: " . $date->format('Y-m-d');

// //16. date_create() - This function returns a new DateTime object.
// $date = date_create('2023-10-15');
// echo"Created Date: " . date_format($date, 'Y-m-d');
// ---  

// //17. date_diff() - returns the difference between two DateTime objects.
// $date1 = new DateTime('2023-10-15');
// $date2 = new DateTime('2023-10-20');
// $interval = $date1->diff($date2);
// echo"Difference: " . $interval->format('%R%a days');
// ---  

// // 18. date_format() - This function returns a date formatted according to a given format.
// $date = new DateTime('2023-10-15');
// $formattedDate = date_format($date, 'l, F j, Y');
// echo"Formatted Date: " . $formattedDate;
// ---  

// // 19. date_modify() - This function alters the timestamp of a DateTime object.
// $date = new DateTime('2023-10-15');
// $date->modify('+3 days');
// echo"Modified Date: " . $date->format('Y-m-d');
// ---  

// //20. date_offset_get() - returns the timezone offset from GMT of the given DateTime object.
// $date = new DateTime('2023-10-15', new DateTimeZone('America/New_York'));
// $offset = $date->getOffset();
// echo"Time Zone Offset: " . $offset;
// ---  

// //21. date_parse() - returns an associative array with detailed info about a given date.
// $dateString = '2023-10-15 15:30:00';
// $dateInfo = date_parse($dateString);
// print_r($dateInfo);

// //22. date_sub() - function subtracts days, months, years, hours, minutes, and seconds from a date.
// $date = new DateTime('2023-10-15');
// $interval = new DateInterval('P3D'); // Subtract 3 days
// $date->sub($interval);
// echo"New Date: " . $date->format('Y-m-d');


// //23. date_days_in_month() - returns the number of days in a month for a given year and calendar. Note: this function is provided by the Calendar extension, which may not be enabled by default in all PHP installations.
// $year = 2023;
// $month = 2; // February
// $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
// echo"Days in February 2023: $daysInMonth";

// //24. date_date_set() - This sets the date to a specified value.
// $date = new DateTime();
// $date->setDate(2023, 10, 15); // Set the date to October 15, 2023
// echo"Set Date: " . $date->format('Y-m-d');

// //25. date_interval_format() - formats the interval.
// $interval = new DateInterval('P2Y3M4DT5H6M7S'); // A sample interval
// $formattedInterval = $interval->format('%Y years, %M months, %D days');
// echo"Formatted Interval: " . $formattedInterval;
 
?>


<!-- Description
format	Required. Specifies the format of the outputted date string. The following characters can be used:
d - The day of the month (from 01 to 31)
D - A textual representation of a day (three letters)
j - The day of the month without leading zeros (1 to 31)
l (lowercase 'L') - A full textual representation of a day
N - The ISO-8601 numeric representation of a day (1 for Monday, 7 for Sunday)
S - The English ordinal suffix for the day of the month (2 characters st, nd, rd or th. Works well with j)
w - A numeric representation of the day (0 for Sunday, 6 for Saturday)
z - The day of the year (from 0 through 365)
W - The ISO-8601 week number of year (weeks starting on Monday)
F - A full textual representation of a month (January through December)
m - A numeric representation of a month (from 01 to 12)
M - A short textual representation of a month (three letters)
n - A numeric representation of a month, without leading zeros (1 to 12)
t - The number of days in the given month
L - Whether it's a leap year (1 if it is a leap year, 0 otherwise)
o - The ISO-8601 year number
Y - A four digit representation of a year
y - A two digit representation of a year
a - Lowercase am or pm
A - Uppercase AM or PM
B - Swatch Internet time (000 to 999)
g - 12-hour format of an hour (1 to 12)
G - 24-hour format of an hour (0 to 23)
h - 12-hour format of an hour (01 to 12)
H - 24-hour format of an hour (00 to 23)
i - Minutes with leading zeros (00 to 59)
s - Seconds, with leading zeros (00 to 59)
u - Microseconds (added in PHP 5.2.2)
e - The timezone identifier (Examples: UTC, GMT, Atlantic/Azores)
I (capital i) - Whether the date is in daylights savings time (1 if Daylight Savings Time, 0 otherwise)
O - Difference to Greenwich time (GMT) in hours (Example: +0100)
P - Difference to Greenwich time (GMT) in hours:minutes (added in PHP 5.1.3)
T - Timezone abbreviations (Examples: EST, MDT)
Z - Timezone offset in seconds. The offset for timezones west of UTC is negative (-43200 to 50400)
c - The ISO-8601 date (e.g. 2013-05-05T16:34:42+00:00)
r - The RFC 2822 formatted date (e.g. Fri, 12 Apr 2013 12:01:05 +0200)
U - The seconds since the Unix Epoch (January 1 1970 00:00:00 GMT) -->

