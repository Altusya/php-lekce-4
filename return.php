<?php

function soucet($a, $b) {
    return $a + $b;
    echo 'konec funkce'; // tento kód se nikdy nevykoná
}
$soucet = soucet(2, 3);
echo $soucet;
/**
 * Created by PhpStorm.
 * User: zhakupovaa
 * Date: 07.03.2019
 * Time: 20:28
 */