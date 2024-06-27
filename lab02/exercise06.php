<?php
function calculateSumAndAverage($num1, $num2, $num3) {
    $sum = $num1 + $num2 + $num3;
    $average = $sum / 3;
    return array(
        'sum' => $sum,
        'average' => $average
    );
}

// call function
$num1 = 10;
$num2 = 20;
$num3 = 30;

$result = calculateSumAndAverage($num1, $num2, $num3);

echo "Sum: " . $result['sum'] . "\n";
echo "Average: " . $result['average'] . "\n";
?>
