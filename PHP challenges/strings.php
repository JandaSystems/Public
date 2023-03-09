<?php

/*
 * This file is my (James Latten's) second PHP script. It is my personal interpretation of the challenge instructions for the 'PHP Strings' task.
 *
 * @author: James Latten
 */

/*
Based on the knowledge gained please create a PHP program that does the following:
- Transform a string to all uppercase letters
- Transform a string to all lowercase letters
- Make a string's first character uppercase
- Make a string's first character of all the words uppercase
*/



//- Transform a string to all uppercase letters

// For user input

$part1 = readline('Type a sentence using lowercase characters: ');
 
// For console output & carriage return
 
echo strtoupper ($part1); echo "\n";



// Transform a string to all lowercase letters

// For user input

$part2 = readline('Type a sentence using uppercase characters: ');

// For console output & carriage return

echo strtolower ($part2); echo "\n";



//Make a string's first character uppercase

// For user input

$part3 = readline('Type another sentence using lowercase characters: ');

// For console output & carriage return

echo ucfirst ($part3); echo "\n";



//Make a string's first character of all the words uppercase

// For user input

$part4 = readline('Type an extra sentence using lowercase characters: ');

// For console output & carriage return

echo ucwords ($part4); echo "\n";

echo "\n END OF PROGRAM \n"



?>