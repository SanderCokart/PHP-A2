<?php

echo vermenigvuldig(8, 5). "<br>";
echo("4 * 3 = " . vermenigvuldig(4, 3) . "<br>");
echo("6 * 5 = " . vermenigvuldig(6, 5). "<br>");
echo("6 * 5 = " . vermenigvuldig(3, 8). "<br>");
echo("6 * 5 = " . vermenigvuldig(9, 2). "<br>");
echo("6 * 5 = " . vermenigvuldig(5, 7). "<br>");

function vermenigvuldig($aantalkeer, $getal) {
 //vermenigvuldigen is herhaalt optellen
 if ($aantalkeer == 0) {
 return 0;
 } else if ($aantalkeer == 1) {
 return $getal;
 } else {
 return vermenigvuldig($aantalkeer-1, $getal) + $getal;
 }
}



 ?>
