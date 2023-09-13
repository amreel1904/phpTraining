<?php
echo "Enter the count of numbers: ";
$handle = fopen("php://stdin", "r");
$n = (int)fgets($handle);

$maxNumber = PHP_INT_MIN;
$minNumber = PHP_INT_MAX;

for ($i = 0; $i < $n; $i++) {
    echo "Enter number " . ($i + 1) . ": ";
    $number = (int)fgets($handle);

    if ($number > $maxNumber) {
        $maxNumber = $number;
    }

    if ($number < $minNumber) {
        $minNumber = $number;
    }
}

echo "The greater number is: " . $maxNumber . "\n";
echo "The smallest number is: " . $minNumber . "\n";

fclose($handle);
?>
