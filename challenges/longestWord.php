Have the function longestWord($sen) take the $sen parameter being passed and
return the largest word in the string. If there are two or more words that
are the same length, return the first word from the string with that length.
Ignore punctuation and assume sen will not be empty.

<?php
  function longestWord($sen) {
    $words = explode(' ', $sen);
    
    $longestWord = '';
    
    foreach ($words as $word) {
        if (strlen($word) > strlen($longestWord)) {
            $longestWord = $word;
        }
    }
    return $longestWord;
  }
?>
