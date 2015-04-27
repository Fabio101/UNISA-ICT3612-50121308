<?php
/**
* Author : Fabio Pinto
* Description as per requirements : 

Code a function that will show a form with a drop-down list when called. The function will accept 6
parameters:
• to define the target of the form
• to define the method of the form
• to give the select tag a name
• to add 3 option values and the text that will appear to the drop-down list.

Call the function.
**/
//Function that generates the form  
function task_1($target, $method, $selection, $option1 = NULL, $option2 = NULL, $option3 = NULL) {

	//count thr number of arguments passed in function call
	$count_args = func_num_args();
	
	//determine if arguments are greater than the number of mandatory arguments, if yes then populate array with arguments for use later
	if ($count_args > 3) {
		$options = func_get_args();
	}	

	//Generate form
	echo '<html>';
	echo '<form action="task1.php" method='.$method.' target='.$target.'>';
	echo 'Make a selection: <select name='.$selection.'>';
		//Generate drop down list from optional arguments.
		for($i = 3; $i < $count_args; $i++) {
			echo '<option value="'.$options[$i].'">'.$options[$i].'</option>';
		}
	echo '</select><br>';
  	echo '<input type="submit" value="Select">';
	echo '</form>';
	echo '</html>';
}

//Call to function
task_1("_blank", "GET", "Cars", "Volkswagen", "BMW", "Mercedes Benz");
?>
