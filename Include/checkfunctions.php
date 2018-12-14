<?php

function checkalfa($input){
  if (preg_match("/[^a-z]/", $input)) {
    echo "its a match";
  } else {
    echo "its not a match";
  }
  }

function checknum($input){
  if (preg_match("/[0-9]/", $input)) {
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
  if (preg_match("/^31[0-9]{9}|^06[0-9]{8}|^0591\s?[0-9{6}]/", $input)) {
    echo "your phone number is valid in the netherlands";
  } else {
    echo "your phone number is NOT valid in the netherlands";
  }
}

function checkgender($input){
  if (preg_match("/^male\b|^female\b|^other\b|^trans\b|^trap\b/i", $input)) {
    echo "you are indeed a $input";
    if ($input == "trap") {
      echo "<br>greetings from lars";
    }
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
  if (preg_match("/^[a-z]+\s[0-9]{6}$/i", $input)) {
    echo "this adres is valid";
  }else {
    echo "this adres is invalid!";
  }
}

 ?>
