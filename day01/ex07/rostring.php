#!/usr/bin/php
<?php
if ($argc > 1) {
    $array = explode(" ", $argv[1]);
    $array = array_values(array_filter($array));
    $index = count($array);
    $array[$index] = $array[1];
    unset($array[0]);
    foreach ($array as $item)
        $result .= $item. " ";
    echo trim($result). "\n";
}