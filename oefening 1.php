<?php

MakeSquare(5,5);

function MakeSquare($rows = 1, $columns = 1){

for ($i = 0; $i < $rows;){
    $j = 0;
    for($j = 0; $j < $columns;){
        echo "+";
        $j++;
    }
    echo "<br>";
  $i++;
  }
}
?>
