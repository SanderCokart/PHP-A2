<?php
Include("include/multiplyrec.php");
Include("include/multiply.php");
Include("include/add.php");
Include("include/subtract.php");
Include("include/factorial.php");
Include("include/reverse.php");





function checkalfa($input){
  if (preg_match("/[^a-z]/", $input)) {
    echo "its a match";
  } else {
    echo "its not a match";
  }
  }

function checknum($input){
  if (is_numeric($input)) {
    echo "your input is numeric";
  } else {
    echo "your input is not numeric";
  }
}

function checkpostcode($input){
  if (preg_match("/^[0-9]{4}[A-Z]{2}/", $input)) {
    echo "your postcode is valid";
  } else {
    echo "your postcode is not valid";
  }
}

function checkphone($input){
  if (preg_match("/^31[0-9]{9}|^06[0-9]{8}/", $input)) {
    echo "your phone number is valid in the netherlands";
  } else {
    echo "your phone number is NOT valid in the netherlands";
  }
}

function checkgender($input){
  if (preg_match("/male|female|other/i", $input)) {
    echo "you are indeed a $input";
  } else {
    echo "I guess you have no gender";
  }
}

function checkemail($input){
  if (preg_match("/^.+@.+\..+/", $input)) {
    echo "your email is valid";
  } else {
    echo "your email is INVALID!";
  }
}

function checkadres($input){
  if (preg_match("/^[a-z]+\s[0-9]+/i", $input)) {
    echo "this adres is valid";
  }else {
    echo "this adres is invalid!";
  }
}

function fib($input){
  if ($input <= 2) {
    return 1;
  }
  return fib($input-1) + fib($input-2);
}


//use echo add,echo subtract, echo multiply(rec), echo devide, echo reverse,
//echo factorial, checkadres, checkgender, checkemail, checkphone, checkpostcode,
//checknum, checkalfa or echo fib
echo factorial(5)
 ?>
