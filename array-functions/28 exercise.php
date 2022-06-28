<?php
/**
 * The first input array is the key to the correct answers to an exam,
 * like ["a", "a", "b", "d"]. The second one contains a student's submitted answers.
 *
 * The two arrays are not empty and are the same length.
 * Return the score for this array of answers, giving +4 for each correct answer,
 * -1 for each incorrect answer, and +0 for each blank answer,
 * represented as an empty string (in C the space character is used).
 *
 * If the score < 0, return 0.
 *
 * Example:
 *
 * checkExam(["a", "a", "b", "b"], ["a", "c", "b", "d"]); // => 6
 * checkExam(["a", "a", "c", "b"], ["a", "a", "b", ""]); // => 7
 * checkExam(["a", "a", "b", "c"], ["a", "a", "b", "c"]); // => 16
 * checkExam(["b", "c", "b", "a"], ["", "a", "a", "c"]); // => 0
 */

function checkExam(array $examAnswers, array $examSubmitted): int
{
    $correctAnswersValue = 4;
    $incorrectAnswersValue = -1;

    $incorrectAnswers = array_diff_assoc($examSubmitted, $examAnswers);
    $points = (count($examAnswers) - count($incorrectAnswers)) * $correctAnswersValue;
    $points += (count($incorrectAnswers) - (count($examSubmitted) - count(array_filter($examSubmitted)))) * $incorrectAnswersValue;

    return max($points, 0);

}

print_r(checkExam(["a", "a", "b", "b"], ["a", "c", "b", "d"]) . PHP_EOL); // => 6
print_r(checkExam(["a", "a", "c", "b"], ["a", "a", "b", ""]) . PHP_EOL); // => 7
print_r(checkExam(["a", "a", "b", "c"], ["a", "a", "b", "c"]) . PHP_EOL); // => 16
print_r(checkExam(["b", "c", "b", "a"], ["", "a", "a", "c"]) . PHP_EOL); // => 0