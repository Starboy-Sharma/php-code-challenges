<?php
// 6 kyu - CamelCase Method
// Write simple .camelCase method (camel_case function in PHP, CamelCase in C# or camelCase in Java) for strings. All words must have their first letter capitalized without spaces.
//
// For instance:
//
// camel_case("hello case"); // => "HelloCase"
// camel_case("camel case word"); // => "CamelCaseWord"

function camel_case(string $s): string {
  return implode(array_map('ucfirst', explode(' ', trim($s))));
}

// Alternative solution:
// function camel_case(string $s): string {
//   return str_replace(' ', '', ucwords(trim($s)));
// }

?>
