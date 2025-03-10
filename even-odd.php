<?php
do {
    echo "Please enter a number: ";
    $num = trim(fgets(STDIN));

    if (!is_numeric($num)) {
        echo "Invalid input. Please enter a valid number.\n";
        continue;
    }

    if ($num % 2 == 0) {
        echo "The number is even\n";
    } else {
        echo "The number is odd\n";
    }

    echo "Do you want to check another number? (y/n): ";
    $repeat = trim(fgets(STDIN));
} while (strtolower($repeat) == 'y');
