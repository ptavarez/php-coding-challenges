<?php
include 'challenges/checkNums.php';

if (checkNums(4, 4) === '-1' &&
    checkNums(5,4) === 'false' &&
    checkNums(4,5) === 'true') {
      echo 'Success!!! ';
      echo '$num1 = 4 & $num2 = 4, so return -1 | ';
      echo '$num1 = 5 & $num2 = 4, so return false | ';
      echo '$num1 = 4 & $num2 = 5, so return true | ';
    } else {
      echo 'Error, try again!';
    }
?>
