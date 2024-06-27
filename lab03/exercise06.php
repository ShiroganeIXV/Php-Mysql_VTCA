<?php
function to_uppercase($string) {
    return strtoupper($string);
}

function to_lowercase($string) {
    return strtolower($string);
}

function first_char_uppercase($string) {
    return ucfirst($string);
}

function words_first_char_uppercase($string) {
    return ucwords($string);
}

// Example
$input_string = "hello world!";

echo "Original string: " . $input_string . "<br>";
echo "Uppercase: " . to_uppercase($input_string) . "<br>";
echo "Lowercase: " . to_lowercase($input_string) . "<br>";
echo "First character uppercase: " . first_char_uppercase($input_string) . "<br>";
echo "Words first character uppercase: " . words_first_char_uppercase($input_string) . "<br>";
?>
