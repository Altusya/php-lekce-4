<?php

function maximum($prvnicislo, $druhecislo)
{
if (is_numeric($prvnicislo) && is_numeric($druhecislo)) {

    echo max($prvnicislo, $druhecislo); echo'<br>';
}
    else {echo 'chyba';}
}

maximum(304,560);
maximum(7.2,7.1);
maximum(23,23);
maximum(253,'x');


/**
 * Created by PhpStorm.
 * User: zhakupovaa
 * Date: 07.03.2019
 * Time: 20:01
 */