<?php
// variables - a container that holds data
// string, float, integer, boolean

// Strings
$userName = "Sentry Malagueña";
$favoriteFood = "Salad";
$email = "sentry@thankYou.com";

// Integers
$age = 15;
$userNumber = "3301";

// Float numbers
$gpa = 1.33;
$price = 3.33;

// boolean
$isEmployed = true;
$isOnline = true;

// null
$total = null;
echo "<h1>User {$userNumber} - GPA {$gpa}</h1>";
echo "<p>STATUS - Online: {$isOnline}   Employed: {$isEmployed}</p>";
echo "<h1>Hello I am, {$userName}! Currently {$age} years old!</h1>";
echo "<p>My favorite food is {$favoriteFood}</p>"; 
echo "<p>My email address is: {$email}</p>";
echo "<p>Product price is \$${price}</p>"
?>