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

?>