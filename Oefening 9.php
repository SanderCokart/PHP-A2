<?php

$f = faculteit(6);
echo "De faculteit is $f <br />\n";

function faculteit($getal) {

 if ($getal == 0) {
   return 1 ;
} else if ($getal == 1) {
   return $getal;
 } else {
   echo " getal = $getal <br />\n" ;
   $getal = $getal * faculteit($getal-1); // getal wordt getal
 }
 return $getal;
}
