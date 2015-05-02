<?php
/**
* Author : Fabio Pinto
* Description as per requiremnets :

*a) Consider the regular expression image below. Identify the sub-patterns 1-4.

*b) Code a regular expression to match a South African email address.

**/
//Identifcation of sub-patterns
echo '<strong>Sub-pattern 1:</strong> The caret character negates the characters following it in the regex. Thus, any characters minus the characters in the regex will match.</br>';
echo '<strong>Sub-pattern 2:</strong> The curly braces signify a pattern that must repeat from 3 to 16 times in the regex.</br>';
echo '<strong>Sub-pattern 3:</strong> The square brackets indicate a character class with the use of meta-characters within it, in this case the dash which creates a range between the characters "a" to "z" and the digits "0" to "9". WHilst the dash is a meta-character, when placed at the end of the characters of a character class, it represents the actual dash character.</br>';
echo '<strong>Sub-pattern 4:</strong> The Dollar symbol indicates that all patterns before it in regex must occur at the end of the string in which the regex is being matched up to.</br>';

//Regex to match South African email address
class SA_Email {

	//Public method to test regex
	static public function validate_SAEmail($input) {

		$SAEmail_regex = "/^[^.]+[[:alnum:]_!#$%&\'*+\/=?^`{|}~-]+[^.]+@[a-z0-9.-]+(.co.za)$/";
		
		$validSAEmail = preg_match($SAEmail_regex, $input);
		return $validSAEmail;
	}
}

//Echo the regex

echo "</br><strong>South African Email Address regular expression: </strong> /^[^.]+[[:alnum:]_!#$%&\'*+\/=?^`{|}~-]+[^.]+@[a-z0-9.-]+(.co.za)$/</br>";

//call to method and some basic output to tell us if the emai lis valid or not
echo '</br>'; 

$myEmail = 'fabio@cv.openmanage.co.za';
$callMethod = SA_Email::validate_SAEmail($myEmail);

if ($callMethod == 1) {
	echo '<strong>'.$myEmail.'</strong> is a valid South African email address.';
}
else {
	echo '<strong>'.$myEmail.'</strong> is not a valid South African email address.';
}

?>
