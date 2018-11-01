<?php
function ft_split($str){
    $array = explode(' ', $str);
    sort($array);
    $array = array_values(array_filter($array));
    return $array;
}
