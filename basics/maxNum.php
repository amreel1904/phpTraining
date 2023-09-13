<?php
echo "Enter the number of values: ";
$handle = fopen("php://stdin", "r");
$n = (int)fgets($handle);

$maxNumber = PHP_INT_MIN;

for ($i = 0; $i < $n; $i++) {
    echo "Enter a number: ";
    $number = (int)fgets($handle);

    if ($number > $maxNumber) {
        $maxNumber = $number;
    }
}

echo "The greater number is: " . $maxNumber . "\n";
fclose($handle);
?>
