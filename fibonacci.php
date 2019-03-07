<?php
$amount = $_POST['fibonacci'];

function fibonacci($number) {//recursive fibonacci
    if ($number < 0) {
        return NULL;
    } elseif ($number === 0) {
        return 0;
    } elseif ($number === 1 || $number === 2) {
        return 1;
    } else {
        return fibonacci($number-1) + fibonacci($number-2);
    }
}

echo 'the answer is ' . fibonacci($amount) . '<br><br>';

echo "the sequance is: ";

for ($i=0; $i <= $amount; $i++) {
    if ($i == $amount) {
        echo fibonacci($i) . '<br><br>';
    }else {
        echo fibonacci($i) . ', ';
    }
}

for ($i=0; $i <= $amount; $i++) {
        echo "Element " . $i . ' = ' . fibonacci($i) . '<br>';
}

?>
