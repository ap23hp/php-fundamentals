<?php
for ($i = 1; $i <= 10; $i++) {
  echo "The number is: $i <br>";
}

$i = 20;   // initialization

while ($i >=2 ) {   // condition
if( $i % 2==0){
 echo "The number is: $i <br>";

}
     $i--;   // decrement  
}

    $lang=['PHP','WordPress','React','MySQL'];
     foreach($lang as $language){
        echo "I am Leraning " . $language ." <br>";
     }

     $marks=[45, 78, 92, 60, 30];
     foreach($marks as $mark){
        if($mark >= 50){
            echo "Passs";
        } else{
            echo "Fail";
        }
     }
echo "<br>";
echo "<br>";
echo "Associative arrays";
    $users = [
    [
        "name" => "John",
        "age"  => 35,
        "role" => "admin"
    ],
    [
        "name" => "Sarah",
        "age"  => 22,
        "role" => "editor"
    ],
    [
        "name" => "Mike",
        "age"  => 16,
        "role" => "subscriber"
    ]
];
echo "<br>";
// Counters (declared before loop)
$adminCount = 0;
$minorCount = 0;
$standardCount = 0;

foreach ($users as $user) {

    if ($user['age'] < 18) {
        $minorCount++;
        echo $user['name'] . " is a minor.<br>";

    } elseif ($user['role'] === "admin") {
        $adminCount++;
        echo $user['name'] . " has full admin access.<br>";

    } elseif ($user['role'] === "editor") {
        echo $user['name'] . " can edit content.<br>";

    } else {
        $standardCount++;
        echo $user['name'] . " is a standard user.<br>";
    }
}

echo "<br>------ Summary ------<br>";
echo "Total Admins: " . $adminCount . "<br>";
echo "Total Minors: " . $minorCount . "<br>";
echo "Total Standard Users: " . $standardCount . "<br>";

?>