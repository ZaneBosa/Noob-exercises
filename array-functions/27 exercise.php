<?php
/**
 * Can you find the needle in the haystack?
 * Write a function findNeedle() that takes an array full of junk but containing one "needle"
 * After your function finds the needle it should return a message (as a string) that says:
 * "found the needle at position " plus the index it found the needle, so:
 * findNeedle(['hay', 'junk', 'hay', 'hay', 'moreJunk', 'needle', 'randomJunk'])
 * // should return "found the needle at position 5"
 */

function findNeedle(array $haystack): string {
$needle = "";
    foreach ($haystack as $needle) {
        if (in_array("needle", $haystack)) {
            echo "found the needle at position " . array_search("needle", $haystack);
        }
        return false;
    }
    return $needle;
}


print_r(findNeedle(['hay', 'junk', 'hay', 'hay', 'moreJunk', 'needle', 'randomJunk']));