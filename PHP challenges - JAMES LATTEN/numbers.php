<?php       

/*
 * This file is my (James Latten's) first PHP script. It is my personal interpretation of the challenge instructions for the 'PHP Numbers' task.
 *
 * @author: James Latten
 */



/* 

Based on the knowledge gained please create a PHP program that does the following:
Takes 4 numeric values
- adds the values together and outputs the answer
- subtracts the values and outputs the answer
- multiplies the values and outputs the answer
- divides the values and outputs the answer
- combination of the above and outputs the answer


notes: echo = print to screen, // = REF, forward slash *      * forward slash = open and close a large block of REF. 
Example of a "Doc Block", a specific implementation of a large REF block: 

*/


// Takes 4 numeric values- adds the values together and outputs the answer


echo "The following will find the sum of four numbers of your choice. ";
$num1 = (int)readline('Enter your first number now:');
echo "The first number that you entered was ($num1). "; 
$num2 = (int)readline('Enter your second number now:');
echo "The second number that you entered was ($num2). " ; 
$num3 = (int)readline('Enter your third number now:');
echo "The third number that you entered was ($num3). "; 
$num4 = (int)readline('Enter your fourth number now:');
$sum = $num1 + $num2 +$num3 + $num4;
echo "\nThe fourth number that you entered was ($num4), and the sum of your four numbers is ($sum).\n\n"; 


// Takes 4 numeric values- multiplies the values and outputs the answer


echo "The following will find the product of four numbers of your choice. ";
$num1 = (int)readline('Enter your first number now:');
echo "The first number that you entered was ($num1). "; 
$num2 = (int)readline('Enter your second number now:');
echo "The second number that you entered was ($num2). " ; 
$num3 = (int)readline('Enter your third number now:');
echo "The third number that you entered was ($num3). "; 
$num4 = (int)readline('Enter your fourth number now:');
$product = $num1 * $num2 * $num3 * $num4;
echo "\nThe fourth number that you entered was ($num4), and the product of your four numbers is ($product).\n\n";


//Takes 4 numeric values- subtracts the values and outputs the answer


echo "The following will calculate the result of subtracting four numbers of your choice from the value 100. ";
$num1 = (int)readline('Enter your first number now:');
echo "The first number that you entered was ($num1). "; 
$num2 = (int)readline('Enter your second number now:');
echo "The second number that you entered was ($num2). " ; 
$num3 = (int)readline('Enter your third number now:');
echo "The third number that you entered was ($num3). "; 
$num4 = (int)readline('Enter your fourth number now:');
$result = 100 - $num1 - $num2 - $num3 - $num4;
echo "\nThe fourth number that you entered was ($num4), and the result of subtracting your four numbers from 100 is ($result).\n\n";


// Takes 4 numeric values- divides the values and outputs the answer


echo "The following will calculate the result of sequentially dividing four numbers of your choice. \n";
echo "Example: Your first number will be divided by your second number, then the quotient from this will be divided by your third number, \n and finally the quotient from that will be divided by your fourth number to give a final answer.\n";
$num1 = (int)readline('Enter your first number now:');
echo "The first number that you entered was ($num1). "; 
$num2 = (int)readline('Enter your second number now:');
echo "The second number that you entered was ($num2). " ; 
$num3 = (int)readline('Enter your third number now:');
echo "The third number that you entered was ($num3). "; 
$num4 = (int)readline('Enter your fourth number now:');
$division = $num1 / $num2 / $num3 / $num4;
echo "\nThe fourth number that you entered was ($num4), and the result of sequentially dividing your four numbers is ($division).\n\n";


// Takes 4 numeric values- [performs a] combination of the above [all four arithmatic operations] and outputs the answer. NB: Since only three arithmatic operations can be performed with four numbers, I have arbitrarily chosen addition, multiplication, and subtraction in this section.


echo "The following will calculate the result of performing three arithmatic operations on four numbers of your choice. \n";
echo "DETAIL: Your 2nd number will be added to your 1st, the sum of these will be multiplied by your 3rd,\n and finally your 4th number will be subtracted from the product obtained previously to give a final answer. \n";
$num1 = (int)readline('Enter your first number now:');
echo "The first number that you entered was ($num1). "; 
$num2 = (int)readline('Enter your second number now:');
echo "The second number that you entered was ($num2). "; 
$num3 = (int)readline('Enter your third number now:');
echo "The third number that you entered was ($num3). "; 
$num4 = (int)readline('Enter your fourth number now:');
$temp1 = $num1 + $num2 ;
$temp2 = $temp1 * $num3;
$mixed = $temp2 - $num4;
echo "\nThe fourth number that you entered was ($num4), and the result of performing the arithmetic operations is ($mixed).\n\n";

echo "END OF PROGRAM \n"


// Although I am unsure whether my interpretation of the challenge instructions was correct, I hope that the code which I have prodced here shows that I have understood how to use PHP regardless of whether the final output makes much sense in terms of its usefulness in a 'real world' situation =)


  /*

Notes on how I believe this code could be improved upon:

I would like the script to wait for a user to hit the RETURN key before moving from one core segment to the next (IE: after each output has been computed and "echoed" to the screen) 
I would like the 'final answers' for each segment to be displayed to the user in a red colour - for aesthetics.

  */



?>