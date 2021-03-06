<?php
/** Make an array of strings of the names.
 *          function namesOnly(arr) {
 *          // your code here
 *          }
 *
 *          console.log(
 *          namesOnly([
 *          {
 *          name: "Angelina Jolie",
 *          age: 80,
 *          },
 *          {
 *          name: "Eric Jones",
 *          age: 2,
 *          },
 *          {
 *          name: "Paris Hilton",
 *          age: 5,
 *          },
 *          {
 *          name: "Kayne West",
 *          age: 16,
 *          },
 *          {
 *          name: "Bob Ziroll",
 *          age: 100,
 *          },
 *          ])
 *          );
 *      // ["Angelina Jolie", "Eric Jones", "Paris Hilton", "Kayne West", "Bob Ziroll"]
 */

$persons = [
    [
        'name' => 'Angelina Jolie',
        'age' => 80
    ],
    [
        'name' => 'Eric Jones',
        'age' => 2
    ],
    [
        'name' => 'Paris Hilton',
        'age' => 5
    ],
    [
        'name' => 'Kayne West',
        'age' => 16
    ],
    [
        'name' => 'Bob Ziroll',
        'age' => 100
    ]
  ];

function namesOnly($persons) {
    return $persons['name'];
}

print_r(array_map("namesOnly",$persons));
// var_dump(array_map("namesOnly",$persons));