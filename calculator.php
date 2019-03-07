<?php


$option_ = $_POST['option'];//selected option comes in from HTML FILE
$firstfield_ = $_POST['firstfield'];//this is the first numeric entry
$secondfield_ = $_POST['secondfield'];//this is the second numeric entry

if (empty($firstfield_)) {
  $firstfield_=0;
}

if (empty($secondfield)) {
  $secondfield=0;
}

//these are all the functions for add, devide, factorial, multiply, multiplyrec, reserve, subtract
Include("include/multiplyrec.php");
Include("include/multiply.php");
Include("include/devide.php");
Include("include/add.php");
Include("include/subtract.php");
Include("include/factorial.php");
Include("include/reverse.php");

choice($option_, $firstfield_,$secondfield_);

function choice($option, $firstfield, $secondfield){
switch ($option) {
  case 'add':
    echo add($firstfield,$secondfield);
    break;

  case 'subtract':
    echo subtract($firstfield,$secondfield);
    break;

  case 'multiply':
    echo multiply($firstfield,$secondfield);
    break;

  case 'devide':
    echo devide($firstfield,$secondfield);
    break;

  case 'factorial':
    echo factorial($firstfield|$secondfield);
    break;

  case 'fibonacci':
    echo fibonacci($firstfield|$secondfield);
    break;

  case 'reverse':
    echo reverse($firstfield|$secondfield);
    break;

  case 'multiplyrec':
    echo multiplyrec($firstfield|$secondfield);
    break;

    default:
    echo "something went wrong...sorry";
    break;
  }
}

 ?>
