
<?php

$services = ["Solar Installation", "Electrical Wiring", "Maintenance", "EV Charger Setup"];
print_r($services);
$count=1;
 echo "<h2> These are our services</h2>";
foreach($services as $service){
    
    echo $count. ". ". $service . "<br>" ;
    $count=$count+1;
}

// Post-increment ($count++) Use the current value first Then increment
// Example:
// $count = 5;
// echo $count++;
// Output:5
// After that, $count becomes 6.
// Pre-increment (++$count) Increment first
// Then use the new value
// Example:
// $count = 5;
// echo ++$count;
// Output:6
?>

