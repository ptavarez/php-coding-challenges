<?php
include 'challenges/simpleAdding.php';

if (simpleAdding(4) == 10 &&
    simpleAdding(6) == 21) {
  echo 'Success!!! ';
  echo ' 4 + 3 + 2 + 1 = '.simpleAdding(4);
  echo ' | 6 + 5 + 4 + 3 + 2 + 1 = '.simpleAdding(6);
} else {
  echo 'Err, try again! |';
  echo ' 4 + 3 + 2 + 1 != '.simpleAdding(4);
  echo ' | 6 + 5 + 4 + 3 + 2 + 1 != '.simpleAdding(6);
}
?>
