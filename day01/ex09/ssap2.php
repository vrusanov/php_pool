#!/usr/bin/php
<?php
function is_alpha($str){
    $str = str_split(strtolower($str));
    foreach ($str as $char) {
        if (ord($char) < 97 || ord($char) > 122)
            return (false);
    }
    return (true);
}
function sort_2($a, $b)
{
    $a = strtolower($a);
    $b = strtolower($b);
    if (is_alpha($a))
        $val_a = 1;
    else if (is_numeric($a))
        $val_a = 2;
    else
        $val_a = 3;
    if (is_alpha($b))
        $val_b = 1;
    else if (is_numeric($b))
        $val_b = 2;
    else
        $val_b = 3;
    if ($val_a != $val_b)
        return ($val_a - $val_b);
    return (strcmp($a, $b));
}
function sort_1($a, $b)
{
    if ($a === $b)
        return (0);
    $i = 0;
    while ($i < strlen($a) && $i < strlen($b))
    {
        if (sort_2($a[$i], $b[$i]) > 0)
            return (1);
        else if (sort_2($a[$i], $b[$i]) < 0)
            return (-1);
        $i++;
    }
    if ($i < strlen($a))
        return (1);
    else if ($i < strlen($b))
        return (-1);
}
function ft_split($str) {
    $tab = explode(" ", $str);
    $tab = array_values(array_filter($tab));
    return ($tab);
}
$tab = $argv;
unset($tab[0]);
$tab = array_values($tab);
$tab2 = array();
foreach ($tab as $key => $value) {
    $tab2 = array_merge($tab2, ft_split($value));
}
usort($tab2, "sort_1");
foreach ($tab2 as $value) {
    echo $value."\n";
}