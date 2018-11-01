#!/usr/bin/php
<?php
if ($argc > 1){
    unset($argv[0]);
    foreach ($argv  as $item)
        echo $item."\n";
}