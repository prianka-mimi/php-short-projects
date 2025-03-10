<?php

do {
    $year = readline("Please enter a year: ");

    if (!is_numeric($year)) {
        echo "Invalid input. Please enter a valid year.\n";
        continue;
    }

    if ($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0) {
        echo "The year is a leap year.\n";
    } else {
        echo "The year is not a leap year.\n";
    }

    $year = readline("Do you want to check another year? (yes/no): ");
} while ($year == 'y' || $year == 'yes');
