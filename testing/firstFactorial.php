<?php
  include 'challenges/firstFactorial.php';
  
  if (firstFactorial(4) == 24 &&
      firstFactorial(8) == 40320 &&
      firstFactorial(12) == 479001600) {
    echo 'Factorial of 4 = '.firstFactorial(4).' | ';
    echo 'Factorial of 8 = '.firstFactorial(8).' | ';
    echo 'Factorial of 12 = '.firstFactorial(12).' | ';
  } else {
    echo 'Err, try again! ';
    echo 'Factorial of 4 != '.firstFactorial(4).' | ';
    echo 'Factorial of 8 != '.firstFactorial(8).' | ';
    echo 'Factorial of 12 != '.firstFactorial(12).' | ';
  }
?>
