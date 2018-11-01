<?php
function ft_is_sort($src)
{
    $tmp = $src;
    sort($tmp);
    return($tmp === $src);
}
