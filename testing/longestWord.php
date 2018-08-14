<?php
  include 'challenges/longestWord.php';
  
  $str = 'Longest word in: ';
  $str1 = 'Hi there little one';
  $str2 = 'My name rhymes with elephant';
  $str3 = 'The longest word in the english langauge is longggg';
  
  if (longestWord($str1) == "little" &&
      longestWord($str2) == "elephant" &&
      longestWord($str3) == "langauge") {
        echo 'Success!!! ';
        echo $str."'$str1' is ".longestWord($str1).' | ';
        echo $str."'$str2' is ".longestWord($str2).' | ';
        echo $str."'$str3' is ".longestWord($str3).' | ';
      } else {
        echo 'Err, try again! ';
        echo $str."'$str1' is not ".longestWord($str1).' | ';
        echo $str."'$str2' is not ".longestWord($str2).' | ';
        echo $str."'$str3' is not ".longestWord($str3).' | ';
    }
?>
