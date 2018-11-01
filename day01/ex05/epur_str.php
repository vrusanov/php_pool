#!/usr/bin/php
<?php
if ($argc > 1)
{
    $array = explode(" ", $argv[1]);
    $array = array_values(array_filter($array));
    foreach ($array as $item) {
        $tmp .= $item." ";
    }
    $tmp = trim($tmp, ' ');
    $tmp .= "\n";
    print $tmp;
}