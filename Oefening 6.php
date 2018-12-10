<?php

$string = "helllllllllo";
$char = "l";
echo CountChar($string, $char);

function CountChar($fstring, $fchar){
    return substr_count($fstring, $fchar);
}

 ?>
