#!/usr/bin/php
<?php
if ($argc != 2) {
    exit (1);
}
if (($file = file_get_contents($argv[1]))) {
    preg_match_all("/(<a.*title=)(\".*\")(.*>.*<\/a>)/i", $file, $mat);
    foreach ($mat[2] as $val) {
        $upp = strtoupper($val);
        $file = str_replace($val, $upp, $file);
    }
    preg_match_all("/(<a[^<]*>)([^<]*<)/", $file, $mat);
    foreach ($mat[2] as $val) {
        $upp = strtoupper($val);
        $file = str_replace($val, $upp, $file);
    }
    echo $file;
}
?>