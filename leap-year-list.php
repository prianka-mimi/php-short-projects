<?php

echo "\n=============This program will check if a year is a leap year or not====================\n";

do {
    $yearList = readline("Do you want to check a list of years? (list/l) or a specific year? (year/y) or exit? (exit/e): ");

    if ($yearList == 'list' || $yearList == 'l') {
        $startYear = readline('Please enter the starting year: ');
        $endYear = readline('Please enter the ending year: ');
        echo "\nThe list of leap years from $startYear to $endYear:\n";
        for ($i = $startYear; $i <= $endYear; $i++) {
            if ($i % 4 == 0 && $i % 100 != 0 || $i % 400 == 0) {
                echo "$i\n";
            } else {
                continue;
            }
        }
    } elseif ($yearList == 'year' || $yearList == 'y') {
        $specificYear = readline('Please enter a year: ');
        if ($specificYear % 4 == 0 && $specificYear % 100 != 0 || $specificYear % 400 == 0) {
            echo "\nThe year $specificYear is a leap year.\n";
        } else {
            echo "\nThe year $specificYear is not a leap year.\n";
        }
    } elseif ($yearList == 'exit' || $yearList == 'e') {
        exit;
    } else {
        echo "Invalid input. Please enter a valid input.\n";
    }

    $again = readline("Again? (yes(y)/no(n)): ");
} while ($again == 'yes' || $again == 'y');
