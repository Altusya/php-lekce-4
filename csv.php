<?php

$handle = fopen('objednavky.csv', 'r');

if ($handle !== false) {

    while (($line = fgets($handle, 4096)) !== false) {
        //var_dump($line);
        $exploded = explode(';', $line);

        foreach ($exploded as $item)

        echo "$item |"; // zde se vypíše jeden řádek souboru
    }
    fclose($handle);
}
/**
 * Created by PhpStorm.
 * User: zhakupovaa
 * Date: 07.03.2019
 * Time: 18:58
 */