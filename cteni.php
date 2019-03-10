<?php

$handle = @fopen('muj-soubor.txt', 'r');
if ($handle === false) {
    echo 'Soubor se nepodařilo otevřít!';
} else {
// Zde můžeme pracovat s otevřeným souborem
    fread ($handle,'ahoj lidi');

    fclose($handle);
}
/**
 * Created by PhpStorm.
 * User: zhakupovaa
 * Date: 07.03.2019
 * Time: 18:21
 */