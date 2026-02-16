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

class Book{
public $title;
public $author;
public $price;

public function __construct($title,$author,$price){
 $this->title=$title;
  $this->author=$author;
   $this->price=$price;
   
}
 public function getSummary() {
        return "Book: $this->title | Author: $this->author | Price: $this->price";
    }

    public function getDiscountedPrice($percent){
     return $this->price - ($this->price * $percent / 100);

    }
}


$book1 = new Book("Atomic Habits", "James Clear", 399);
echo $book1->getSummary();
echo $book1->getDiscountedPrice(10);

 $students = [
    'apra' => ['age' => 25, 'city' => 'Delhi'],
    'john' => ['age' => 30, 'city' => 'Mumbai'],
    'sara' => ['age' => 22, 'city' => 'Bangalore']
];

foreach($students as $name_slug => $city_slug){
    echo $name_slug. "lives in " .$city_slug['city']. "" ;
}


 function milani_get_all_cities() {
        return   [ 'vancouver' => [
            'name' => 'Vancouver',
            'phone' => '604-456-8888',
            'province' => 'British Columbia'
        ],
        'calgary' => [
            'name' => 'Calgary',
            'phone' => '403-399-9999',
            'province' => 'Alberta'
        ],
        'edmonton' => [
            'name' => 'Edmonton',
            'phone' => '780-999-3333',
            'province' => 'Alberta'
           ]   ];
    }
    

$all_cities = milani_get_all_cities();

function milani_get_provinces() {
 $cities=milani_get_all_cities();
     $provinces = [];  // ← Create empty array to collect provinces
    foreach( $cities as $city_name => $city_info){
         $provinces[] = $city_info['province'];  // ← Add to array
    }
     return array_unique($provinces);  // ← Return after loop + remove duplicates

}
$all_provinces = milani_get_provinces();
print_r($all_provinces);  // Shows array structure

foreach($all_provinces as $province){
    echo "📍 " . $province . "<br>";
}

function get_alberta_cities() {
    $all_cities = milani_get_all_cities();
    
    $alberta_cities = [];  // ← Empty array to collect
    
    foreach($all_cities as $city_slug => $data) {
        if($data['province'] === 'Alberta') {
            $alberta_cities[$city_slug] = $data;  // ← ADD to array (not replace!)
            //               ↑ key          ↑ value
        }
    }
    
    return $alberta_cities;
}

// Display
echo "<h2>Cities in Alberta:</h2>";
$alberta = get_alberta_cities();

foreach($alberta as $city_name => $city_info) {
    echo "📍 " . $city_info['name'] . " (" . $city_info['phone'] . ")<br>";
}



?>
