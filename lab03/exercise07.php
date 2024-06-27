<?php
    function random_string($length = 5) {
        $chars = 'bcdfghjklmnpqrstvwxyzAEIOU';
        $result = '';
        $x = 0;

        while ($x < $length) {
            if ($x % 2) {
                // Append a vowel (characters from positions 19 to 23 in the string)
                $result .= $chars[mt_rand(19, 23)];
            } else {
                // Append a consonant (characters from positions 0 to 18 in the string)
                $result .= $chars[mt_rand(0, 18)];
            }
            $x++;
        }

        return $result;
    }

    // example
    echo random_string();
?>
