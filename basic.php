<?php

$name = "Apra";
$age = 29;
$string = "Apra";
$integer = 29;
$float = 2.34;
$boolean = false;
$array = ["apple", "banana"];
$city = "Delhi";
$isWorking = true;
$skills = ["PHP", "WordPress"];

$profile = "My name is $name. I am $age years old. ";
$profile .= "I live in $city. ";
$profile .= "Working status: " . ($isWorking ? "Yes" : "No") . ". ";
$profile .= "My skills are $skills[0] and $skills[1].";

echo $profile;
echo $string;
echo "<br>";
echo $integer;
echo "<br>";

var_dump($string, $float);
echo "<br><br>";

echo "My name is " . $string . ". ";
echo "My age is " . $integer . " years old. ";
echo "It is " . ($boolean ? "true" : "false") . " that I smoke. ";
echo "I like " . $array[0] . " and " . $array[1] . ".";

var_dump($integer === "29");
var_dump($integer == "29");
// // echo prints values.
// Dot (.) is used to join strings.
// // var_dump() shows detailed information (type + value).
// true prints as 1.
// false prints nothing.
// Better to convert booleans into readable text when displaying.
//var_dump() always returns null.
// // gettype() only shows the type.
// == compares values after type conversion.

// === compares both value and type.

// Loose comparison can cause unexpected results.

// Strict comparison is safer and preferred in professional development.
// There are two types of functions:

// 1️⃣ Functions that RETURN a value
// 2️⃣ Functions that PRINT directly

// var_dump() belongs to the second category.

// It prints.
// It does not return useful data.
echo '<br>';
echo '<br>';
echo "User Access Control System";

$age1=23;

$isLoggedIn=true;
echo '<br>';
echo '<br>';
$role = "editor"; 
 if(!$isLoggedIn){
echo 'Please login first.';
 } else if( $isLoggedIn && $role==="admin"){
    echo "Full access granted.";
 } else if($isLoggedIn && $role==="editor"){
    if($age1>=21){
        echo "Editor with publishing rights.";
    }else {
        echo "Editor with limited rights.";
    } 
    
    }
    else if($isLoggedIn && $role==="subscriber"){
if($age1>=18){
echo "Subscriber access";
} else {
    echo "Too young for subscription";
}
    }
  else {
    echo "Invalid role";
 }
?>