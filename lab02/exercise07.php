<?php
function array_not_unique($my_array) {
    $same = array();
    natcasesort($my_array);
    reset($my_array);
    $old_key = NULL;
    $old_value = NULL;

    foreach ($my_array as $key => $value) {
        if ($value === NULL) {
            continue;
        }

        if ($old_value === $value) {
            $same[$old_key] = $old_value;
            $same[$key] = $value;
        }

        $old_value = $value;
        $old_key = $key;
    }

    return $same;
}

// Example
$emails = array(
    "john@example.com",
    "jane@example.com",
    "john@example.com",
    "alice@example.com",
    "bob@example.com",
    "jane@example.com",
    "carol@example.com"
);

$non_unique_emails = array_not_unique($emails);

echo "Non-unique email addresses: <br>";
foreach ($non_unique_emails as $key => $value) {
    echo ("$key: $value <br>");
}
?>
