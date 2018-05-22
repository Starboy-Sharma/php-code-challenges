<?php
// 7 kyu - Coding Meetup #4 - Higher-Order Functions Series - Find the first Python developer
// You will be given an array of objects (associative arrays in PHP) representing data about developers who have signed up to attend the next coding meetup that you are organising. The list is ordered according to who signed up first.
//
// Your task is to return one of the following strings:
//
// < firstName here >, < country here > of the first Python developer who has signed up; or
// There will be no Python developers if no Python developer has signed up.
// For example, given the following input array:
//
// $list1 = [
//   [
//     "first_name" => "Mark",
//     "last_name" => "G.",
//     "country" => "Scotland",
//     "continent" => "Europe",
//     "age" => 22,
//     "language" => "JavaScript"
//   ],
//   [
//     "first_name" => "Victoria",
//     "last_name" => "T.",
//     "country" => "Puerto Rico",
//     "continent" => "Americas",
//     "age" => 30,
//     "language" => "Python"
//   ],
//   [
//     "first_name" => "Emma",
//     "last_name" => "B.",
//     "country" => "Norway",
//     "continent" => "Europe",
//     "age" => 19,
//     "language" => "Clojure"
//   ]
// ];
// your function should return Victoria, Puerto Rico.
//
// Notes:
//
// The input array will always be valid and formatted as in the example above.

$list1 = [
  [
    "first_name" => "Mark",
    "last_name" => "G.",
    "country" => "Scotland",
    "continent" => "Europe",
    "age" => 22,
    "language" => "JavaScript"
  ],
  [
    "first_name" => "Victoria",
    "last_name" => "T.",
    "country" => "Puerto Rico",
    "continent" => "Americas",
    "age" => 30,
    "language" => "Python"
  ],
  [
    "first_name" => "Emma",
    "last_name" => "B.",
    "country" => "Norway",
    "continent" => "Europe",
    "age" => 19,
    "language" => "Clojure"
  ]
];


function get_first_python($a) {
  foreach($a as $l) {
    if($l["language"] === "Python") {
      return $l['first_name']. ', ' .  $l['country'];
    }
  }
  return 'There will be no Python developers';
}


// Alternative Solution:
// function get_first_python($a) {
//   $key = array_search('Python',array_column($a, 'language'));
//   return ($key === false) ? 'There will be no Python developers' : $a[$key]['first_name'].', '.$a[$key]['country'];
// }

?>