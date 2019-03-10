
<?php /*
$handle = @fopen('muj-soubor.txt', 'r');
if ($handle === false) {
    echo 'Soubor se nepodařilo otevřít!';
} else {
// Zde můžeme pracovat s otevřeným souborem
   fwrite($handle,'ahoj lidi');

    fclose($handle);
}


/**
 * Created by PhpStorm.
 * User: zhakupovaa
 * Date: 07.03.2019
 * Time: 18:09
 */

/* function
vypisPozdrav();
function vypisPozdrav() {
    echo 'Ahoj!';
}
vypisPozdrav();
vypisPozdrav();*/


function vypisPozdrav($denniDoba, $osloveni) {
echo "Dobré $denniDoba, $osloveni!";
}
$denniDoba = 'ráno';

vypisPozdrav($denniDoba, 'Karle');
// vypíše: Dobré ráno, Karle!