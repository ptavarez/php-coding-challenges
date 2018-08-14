Have the function longestWord($sen) take the $sen parameter being passed and
return the largest word in the string. If there are two or more words that
are the same length, return the first word from the string with that length.
Ignore punctuation and assume sen will not be empty.

<?php
function longestWord($sen) {
  // Code here
}

$str1 = 'Hi there little one';
$str2 = 'My name rhymes with elephant';
$str3 = 'The longest word in the english langauge is longggg';

echo longestWord($str1) . " "; // => little
echo longestWord($str2) . " "; // => elephant
echo longestWord($str3) . " "; // => langauge
?>
