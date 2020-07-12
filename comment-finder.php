<?php

$input = file_get_contents("code.php");
$patterns = array(
    $patternWithoutStars = "/\/\/.{1,}$/m",
    $patternWithMultipleStars = "/\/[*]{1,}[^*]{1,}[*]\//s",
    $patternWithStars = "/\/[*]{2,}.{1,}[*]\//s"
);
foreach ($patterns as $pattern) {
    if (preg_match_all($pattern, $input, $matches)) {
        foreach ($matches as $comment) {
            foreach ($comment as $comment) {
                echo($comment . PHP_EOL);
            }
        }
    }
}