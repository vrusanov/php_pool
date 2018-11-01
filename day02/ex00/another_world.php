#!/usr/bin/php
<?php
$string = $argv[1];
$pattern = "/[ \t\n]+/";
$array = preg_replace($pattern, ' ', $string);
echo trim($array);