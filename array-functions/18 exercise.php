<?php
/** Turn an array of voter objects into a count of how many people voted.
 *
 * function totalVotes(arr) {
 * // your code here
 * }
 * const voters = [
 * { name: "Bob", age: 30, voted: true },
 * { name: "Jake", age: 32, voted: true },
 * { name: "Kate", age: 25, voted: false },
 * { name: "Sam", age: 20, voted: false },
 * { name: "Phil", age: 21, voted: true },
 * { name: "Ed", age: 55, voted: true },
 * { name: "Tami", age: 54, voted: true },
 * { name: "Mary", age: 31, voted: false },
 * { name: "Becky", age: 43, voted: false },
 * { name: "Joey", age: 41, voted: true },
 * { name: "Jeff", age: 30, voted: true },
 * { name: "Zack", age: 19, voted: false },
 * ];
 * console.log(totalVotes(voters)); // 7
 */

$voters = [
  [ "name" => "Bob", "age" => 30, "voted" => true ],
  [ "name" => "Jake", "age" => 32, "voted" => true ],
  [ "name" => "Kate", "age" => 25, "voted" => false ],
  [ "name" => "Sam", "age" => 20, "voted" => false ],
  [ "name" => "Phil", "age" => 21, "voted" => true ],
  [ "name" => "Ed", "age" => 55, "voted" => true ],
  [ "name" => "Tami", "age" => 54, "voted" => true ],
  [ "name" => "Mary", "age" => 31, "voted" => false ],
  [ "name" => "Becky", "age" => 43, "voted" => false ],
  [ "name" => "Joey", "age" => 41, "voted" => true ],
  [ "name" => "Jeff", "age" => 30, "voted" => true ],
  [ "name" => "Zack", "age" => 19, "voted" => false ],
];

function totalVotes(array $voters): int {
    $votes = array_map(function ($voters) {
        if($voters["voted"] === true) {
            return 1;
        } else {
            return 0;
        }
    }, $voters);
    return array_sum($votes);
}

print_r(totalVotes($voters));