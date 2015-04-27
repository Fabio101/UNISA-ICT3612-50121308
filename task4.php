<?php
/**
* Author : Fabio Pinto
* Description as per requirements : 

* Using page 385 as a guide, create and use two functions to illustrate two methods to access a variable
from within a function. The outcome should look like the screenshot below:
**/
//Variable with global scope
$sentence = 'The dog ate my homework';

//Method 1 to access global variable from within function
function method1() {
	global $sentence;
	echo $sentence;
}
//Method 2 to access global variable fron within function
function method2() {
	$sentence = $GLOBALS['sentence'];
	echo $sentence;
}

//Printing and function calls to create desired output
echo '<u>Access a global variable from within a function: Method 1</u></br>'; method1();
echo '</br></br><u>Access a global variable from within a function: Method 2</u></br>'; method2();

?>
