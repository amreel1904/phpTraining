<?php
$handle = fopen("php://stdin", "r");
echo "Enter a food item: ";
$food = strtolower(trim(fgets($handle))); // Convert to lowercase for case-insensitive matching

switch ($food) {
    case "apple":
    case "cili":
        echo "makanan\n";
        break;

    case "timun":
    case "karet":
        echo "sayur\n";
        break;

    default:
        echo "No record\n";
}

fclose($handle);
?>
