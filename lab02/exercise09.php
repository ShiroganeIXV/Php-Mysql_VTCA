<form action="index.php" method="POST">
    <label for="string">Enter a string:</label>
    <input type="text" id="string" name="string" required>
    <input type="submit" value="Submit" name="submit">
</form>

<?php
function is_str_lowercase($str1) {
    $sc = 0;

    while ($sc < strlen($str1)) {
        if (ord($str1[$sc]) >= ord('A') && ord($str1[$sc]) <= ord('Z')) {
            return false; 
        }
        $sc++; // Move to the next character
    }

    return true; // Return true if no uppercase letters are found
}

// Example
if (isset($_POST['submit'])) {
    $string = $_POST['string'];
    if (is_str_lowercase($string)) {
        echo "<p>'$string' <strong>IS</strong> all in lowercase.</p>";
    } else {
        echo "<p>'$string' is <strong>NOT</strong> all in lowercase.</p>";
    }
}
?>
