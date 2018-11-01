#!/usr/bin/php
<?php

while (1) {
    echo "Enter the number: ";

    $tmp = fgets(STDIN);

    $tmp = substr($tmp, 0, -1);

    if (feof(STDIN)) {
        echo "\n";
        exit(0);
    }
    if (is_numeric($tmp)){
        if (abs($tmp % 2) == 0)
            echo "The number " .$tmp. " is even\n";
        else
            echo "The number " .$tmp. " is odd\n";
    }
    else
        echo "'".$tmp."'"." is not number\n";
}