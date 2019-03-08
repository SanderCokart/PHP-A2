<?php
    Include("include/checkfunctions.php");


    $check = $_POST['check'];//the item to check from the form
    $option = $_POST['option'];//the option that determines what you want to check


    switch ($option) {//this switch will check what sort of check you want to do
        case 'checkgender':
          echo checkgender($check);
          break;

        case 'checkalfa':
          echo checkalfa($check);
          break;

        case 'checknum':
          echo checknum($check);
          break;

        case 'checkpostcode':
          echo checkpostcode($check);
          break;

        case 'checkphone':
          echo checkphone($check);
          break;

        case 'checkemail':
          echo checkemail($check);
          break;

        case 'checkadres':
          echo checkadres($check);
          break;

        default:
            echo "something went wrong.....try again please";
            break;
    }
 ?>
