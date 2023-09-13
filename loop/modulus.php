<?php
echo "Enter count: ";
$handle = fopen("php://stdin", "r");
$n = (int)fgets($handle);

$cD2 = 0;
$cD3 = 0;
$cD4 = 0;

for ($i = 0; $i < $n; $i++) {
    echo "Enter an integer number: ";
    $number = (int)fgets($handle);

    if ($number % 2 === 0) {
        $cD2++;
    }
    if ($number % 3 === 0) {
        $cD3++;
    }
    if ($number % 4 === 0) {
        $cD4++;
    }
}

$percentageDivBy2 = ($cD2 * 100.0) / $n;
$percentageDivBy3 = ($cD3 * 100.0) / $n;
$percentageDivBy4 = ($cD4 * 100.0) / $n;

echo "Percentages:\n";
echo "Divisible by 2: " . number_format($percentageDivBy2, 2) . "%\n";
echo "Divisible by 3: " . number_format($percentageDivBy3, 2) . "%\n";
echo "Divisible by 4: " . number_format($percentageDivBy4, 2) . "%\n";

fclose($handle);
?>
