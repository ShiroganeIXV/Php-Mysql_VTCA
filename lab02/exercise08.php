<form action="index.php" method="POST">
    <label for="string">Enter a string:</label>
    <input type="text" id="string" name="string" required>
    <input type="submit" value="Submit" name="submit">
</form>

<?php
// Function to check if a string is a palindrome
function check_palindrome($string) {
    // clean
    $cleaned_string = str_replace(' ', '', strtolower($string));

    // Check
    if ($cleaned_string == strrev($cleaned_string)) {
        return 1; // The string is a palindrome
    } else {
        return 0; // The string is not a palindrome
    }
}

// Example
if (isset($_POST['submit'])) {
    $string = $_POST['string'];
    if (check_palindrome($string)) {
        echo "<p>'$string' <strong>IS</strong> a palindrome.</p>";
    } else {
        echo "<p>'$string' is <strong>NOT</strong> a palindrome.</p>";
    }
}





?>
