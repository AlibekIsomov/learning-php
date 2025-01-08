<?php

$business = [
    'name' => 'Laracasts',
    'costs'=> 4,
    'categories' => ["Testing", "PHP", "Javascript"]
];

// foreach($business['categories'] as $category){
//     echo $category . "<br>";
// }

function register($user){
    $user['registered'] = true;
    return $user;
}


require "index.view.php";