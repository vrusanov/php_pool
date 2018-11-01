#!/usr/bin/php
<?PHP
function ft_valid($array){
    $patterns_month = '/(January|March|May|July|August|October|December)/';
    if (preg_match('/(February)/', $array[2])){
        if ($array[3] % 4 == 0 && $array[1] < 30)
            return 0;
        elseif ($array[1] > 28)
            return 1;
    }
    elseif ($array[1] == 31) {
            if ((preg_match($patterns_month, $array[2]))) {
                return 0;
            }
            else
                return 1;
        }
    return 0;
}

if ($argc > 1) {
    $full = '/^(Lundi|Mardi|Mercredi|Jeudi|Vendredi|Samedi|Dimanche|Monday|Tuesday|Wednesday|Thursday|Friday|Saturday|Sunday) (0[1-9]|1[0-9]|2[0-9]|3[01]|[1-9]) (Janvier|Février|Mars|Avril|Mai|Juin|Juillet|Août|Septembre|Octobre|Novembre|Décembre) [0-9]{4} ([0-1]?[0-9]|[2][0-3]):([0-5][0-9])(:[0-5][0-9])?$/i';
    if (!(preg_match($full, $argv[1]))) {
        echo "Wrong Format\n";
        return 0;
    }
    $temp = explode(' ', $argv[1]);
    $patterns = array('/janvier/i', '/[Ff]évrier/', '/[Mm]ars/', '/[Aa]vril/', '/[Mm]ai/', '/[Jj]uin/',
        '/[Jj]uillet/', '/[Aa]oût/', '/[Ss]eptembre/', '/[Oo]ctobre/', '/[Nn]ovembre/', '/[Dd]écembre/');
    $replace = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $temp = preg_replace($patterns, $replace, $temp);
    unset($temp[0]);
    if (ft_valid($temp)){
        exit ("Wrong Format\n");
    }
    $tmp_str = implode(" ", $temp);
    date_default_timezone_set('Europe/Paris');
    $seconds = strtotime($tmp_str);
    if (isset($seconds))
        echo $seconds."\n";
    else {
        echo "Wrong Format\n";
        return 0;
    }
}
?>
