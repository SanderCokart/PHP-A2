<?php
    Include("include/checkfunctions.php");


    $check = $_POST['check'];
    $option = $_POST['option'];


    switch ($option) {
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
            // code...
            break;
    }
 ?>
