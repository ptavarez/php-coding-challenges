# PHP Coding Challenges
A repo to store daily coding challenges.

### Instructions
1. Fork and clone this repository.
2. Change into new directory.
3. Create and checkout a new branch to work on.

#### Testing

*For MacOS*

1. In the terminal, go to the route of this repo
2. To test a specific challenge, enter the following:
  `php testing/<challengeName>.php`

## Challenges
- [Check Numbers](challenges/checkNums.php)
  - Have the function checkNums($num1,$num2) take both parameters being passed and return the string true if num2 is greater than num1, otherwise return the string false. If the parameter values are equal to each other then return the string -1.
- [First Factorial](challenges/firstFactorial.php)
  - Have the function firstFactorial($num) take the $num parameter being passed and return the factorial of it (e.g. if $num = 4, return (4 * 3 * 2 * 1)). For the test cases, the range will be between 1 and 18 and the input will always be an integer.
- [First Reverse](challenges/firstReverse.php)
  - Have the function firstReverse($str) take the $str parameter being passed and return the string in reversed order. For example: if the input string is "Hello World and Coders" then your program should return the string sredoC dna dlroW olleH.
- [Longest Word](challenges/longestWord.php)
  - Have the function longestWord($sen) take the $sen parameter being passed and
  return the largest word in the string. If there are two or more words that
  are the same length, return the first word from the string with that length.
  Ignore punctuation and assume sen will not be empty.
- [Simple Adding](challenges/simpleAdding.php)
  - Have the function simpleAdding($num) add up all the numbers from 1 to $num. For example: if the input is 4 then your program should return 10 because 1 + 2 + 3 + 4 = 10. For the test cases, the parameter num will be any number from 1 to 1000.
