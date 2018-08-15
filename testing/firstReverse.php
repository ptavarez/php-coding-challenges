<?php
include 'challenges/firstReverse.php';

$str = 'Hello World and Coders';
$revStr = 'sredoC dna dlroW olleH';

if (firstReverse($str) == $revStr) {
  echo 'Success!!! ';
  echo $str.' reversed = '.$revStr;
} else {
  echo 'Err, try again! ';
  echo $str.' reversed != '.firstReverse($str);
}
?>
