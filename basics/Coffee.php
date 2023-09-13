<?php
echo "Kopi ka teh?: ";
$handle = fopen("php://stdin", "r");
$drink = strtolower(trim(fgets($handle)));

if ($drink == "kopi") {
    echo "Gula nak?: ";
    $extra = strtolower(trim(fgets($handle)));

    if ($extra == "nak") {
        echo "Harga: RM 1.40\n";
    } else {
        echo "Harga: RM 1.00\n";
    }
} elseif ($drink == "teh") {
    echo "Gula nak?: ";
    $extra = strtolower(trim(fgets($handle)));

    if ($extra == "nak") {
        echo "Harga: RM 1.00\n";
    } else {
        echo "Harga: RM 0.60\n";
    }
} else {
    echo "Final price: RM 0.00\n";
}

fclose($handle);
?>
