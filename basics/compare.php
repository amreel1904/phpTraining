<?php
$a = "Soft";
$b = substr("=-Soft", 1);

echo var_export($a === $b, true) . "\n"; // Compares the contents of the strings
echo var_export($a == $b, true) . "\n";  // Compares the contents of the strings
?>
