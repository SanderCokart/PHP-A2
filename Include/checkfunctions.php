<?php

function checkalfa($input){
  if (preg_match("/[a-z]{1,}/i", $input)) {
    return "its a match";
  } else {
    return "its not a match";
  }
  }

function checknum($input){
  if (preg_match("/[0-9]{1,}/", $input)) {
    return "your input is numeric";
  } else {
    return "your input is not numeric";
  }
}

function checkpostcode($input){
  if (preg_match("/^[0-9]{4}[A-Z]{2}$/i", $input)) {
    return "your postcode is valid";
  } else {
    return "your postcode is not valid";
  }
}

function checkphone($input){
  if (preg_match("/^06[0-9]{8}$/", $input)) {
    return "your phone number is valid mobile number in the netherlands";
  } else {
    return "your phone number is NOT valid mobile in the netherlands";
  }
}

function checkgender($input){
  if (preg_match("/^male\b$|^female\b$|^other\b$|^trans\b$|^trap\b$/i", $input)) {
    return "you are indeed a $input";
    if ($input == "trap") {
      return "<br>greetings from lars";
    }
  } else {
    return "I guess you have no gender";
  }
}

function checkemail($input){
  if (preg_match("/^.+@.+\..+/", $input)) {
    return "your email is valid";
  } else {
    return "your email is INVALID!";
  }
}

function checkadres($input){
  if (preg_match("/^[a-z]+\s[0-9]{1,4}$/i", $input)) {
    return "this adres is valid";
  }else {
    return "this adres is invalid!";
  }
}

 ?>
