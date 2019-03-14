<?php

function minimum ($prvnicislo, $druhecislo){

    if (is_numeric($prvnicislo) && is_numeric($druhecislo))

    { return min($prvnicislo,$druhecislo);}

    else { return false;}
}

$min = minimum ('56',12.3);

if (!$min === false) {

    echo $min;
}
else {echo 'chyba';}



/**
 * Created by PhpStorm.
 * User: zhakupovaa
 * Date: 07.03.2019
 * Time: 20:35
 */