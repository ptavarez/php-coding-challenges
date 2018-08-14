Have the function firstFactorial($num) take the $finum parameter being passed and
return the factorial of it (e.g. if $num = 4, return (4 * 3 * 2 * 1)). For the
test cases, the range will be between 1 and 18 and the input will always be an
integer.

<?php
  function firstFactorial($num) {
    // Code here
  }
  
  if (firstFactorial(4) == 24 &&
      firstFactorial(8) == 40320 &&
      firstFactorial(12) == 479001600) {
    echo 'Factorial of 4 = '.firstFactorial(4).' | ';
    echo 'Factorial of 8 = '.firstFactorial(8).' | ';
    echo 'Factorial of 12 = '.firstFactorial(12).' | ';
  } else {
    echo 'Err, try again! ';
  }
?>
