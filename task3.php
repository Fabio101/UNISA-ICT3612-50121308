<?php
/**
* Author : Fabio Pinto
* Description of requirements:

* Using page 383 as a guide, as well as two sentences ("The dog ate my homework" and "I lied about
* that"), create two functions to illustrate the difference between an argument passed by value and an
* argument passed by reference. The outcome should look like the screenshot below.
**/
//Function that demonstrates passing arguments by reference 
function byref(&$sentence) {

	$sentence = 'I lied about that'; 
}
//Fucntion that demonstrates passing arguments by value
function byval($sentence) {

	$sentence = 'I lied about that';
}
//Variable that will be passed to functions
$sentence = "The dog ate my homework";

//Construction and calling of functions to produce the desired output
echo '<u>Passsing by value</u></br>';
echo $sentence.' -> '; byval($sentence); echo $sentence.'</br>';

echo '</br><u>Passing by reference</u></br>';
echo $sentence.' -> '; byref($sentence); echo $sentence;

?>
