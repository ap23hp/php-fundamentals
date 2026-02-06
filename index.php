<?php

$name="Apra";
$learning="I am learning php";
$year=2026;
echo "Hi, My name is $name and $learning in $year.";
$skills = ["PHP", "WordPress", "Git", "JavaScript"];

echo "My skills are:<br>";

foreach ($skills as $skill) {
    echo "- $skill<br>";
}

echo "<h2>Using h2 heading tag</h2>";
  echo "<ul>";
foreach($skills as $skill){
  
    echo "<li> $skill</li>";
}
echo "</ul>";

$user=[
    "name"=> "Apra",
    "role"=>"php developer",
    "year"=> 2026
];

foreach( $user as $key=> $value){
    echo "$key : $value<br>";
}

$userObject=new stdClass();
$userObject->name="abc";
$userObject->learning = "PHP & WordPress";
$userObject->year = 2026;

foreach($userObject as $key=>$value){
    echo  "<p> $key : $value<br></p>";
}


class User {
    public $namee;
    public $learning;
    public $year;
}

$user1 = new User();
$user1->namee = "Apra";
$user1->learning = "PHP & WordPress";
$user1->year = 2026;

$user2 = new User();
$user2->namee = "Tina";
$user2->learning = "PHP";
$user2->year = 2025;

echo $user1->namee . "<br>";
echo $user2->namee;



?>