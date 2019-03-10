<?php

$handle = fopen('soubor.txt', 'r');

if ($handle) {//check ze to neni false
    //echo fgets ($handle, 4096); vyvedet pervuyu stroku

    while (($line = fgets($handle, 4096)) !== false) {
        echo $line; // zde se vypíše jeden řádek souboru
       //mozno cerez html vyvesti po strokam kak v txt: echo '<br>';

    }
    fclose($handle);
}


/**
 * Created by PhpStorm.
 * User: zhakupovaa
 * Date: 07.03.2019
 * Time: 18:52
 */