<?php

echo "Enter British pounds: ";

$num = (double)readline();

$result = $num * 1.31;

echo "US dollar: $" . number_format($result,3);