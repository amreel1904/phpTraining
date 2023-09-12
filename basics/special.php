<?php
echo "Enter a number: ";
$handle = fopen("php://stdin", "r");
$n = (int)fgets($handle);

for ($num = 1; $num <= $n; $num++) {
    $sum = 0;
    $digits = $num;

    while ($digits > 0) {
        $sum += $digits % 10;
        $digits = (int)($digits / 10);
    }

    if ($digits == 0 && $sum == 3) {
        echo $num . " True\n";
    }
}
fclose($handle);
?>
