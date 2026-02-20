<?php
function takeNames($name){
    return "Hello " . $name;
}
$result1=takeNames("Apra");
$result2=takeNames("Apraa");
$result3=takeNames("Apraaaa");
echo $result1 , $result2, $result3;
echo "<br>";
echo "<br>";
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
    ],
    [
        "name" => "Emma",
        "age"  => 28,
        "role" => "subscriber"
    ],
    [
        "name" => "David",
        "age"  => 17,
        "role" => "editor"
    ]
];

 foreach($users as $user){
    echo getUserAccess($user);
 }
function getUserAccess($user) {

    if ($user['age'] < 18) {
        return $user['name'] . " is a minor.<br>";

    } elseif ($user['role'] === "admin") {
        return $user['name'] . " has full admin access.<br>";

    } elseif ($user['role'] === "editor") {
        return $user['name'] . " can edit content.<br>";

    } else {
        return $user['name'] . " is a standard user.<br>";
    }
}

?>