#!/usr/bin/php
<?php
if ($argc > 1)
{
    $i = 1;
    while ($i < $argc) {
        $string .= $argv[$i] . " ";
    $i++;
    }
//    echo $string . "\n";
    while (strpos($string, "  ")) {
        $string = str_replace("  ", " ", $string);
    }
    $value = explode(" ", $string);
    $value = array_filter($value);
    sort($value);
    foreach ($value as $item){
        echo "$item\n";
    }
}