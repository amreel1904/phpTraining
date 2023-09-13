<?php

$min = PHP_INT_MAX;
$max = PHP_INT_MIN;

echo "Enter integers (type 'END' to finish):\n";

while (true) {
    $input = readline();

    if ($input === "END") {
        break;
    }

    $number = intval($input);

    if ($number < $min) {
        $min = $number;
    }

    if ($number > $max) {
        $max = $number;
    }
}

if ($min === PHP_INT_MAX && $max === PHP_INT_MIN) {
    echo "No numbers were entered.\n";
} else {
    echo "Smallest number: " . $min . "\n";
    echo "Largest number: " . $max . "\n";
}
?>
