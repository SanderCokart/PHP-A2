<?php

function multiplyrec($a, $b) {
 if ($a < 1 || $b < 1) {
 return 0;
 } else {
 return multiplyrec($a-1, $b) + $b;
}
}

 ?>
