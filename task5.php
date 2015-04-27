<?php
/**
* Author : Fabio Pinto
* Description as per requirements : 

*Earlier, you created a function to display a form with a drop-down list. Using page 389 as a guide, adapt
*that function so that it uses a variable parameter list. That is, in the previous form, the number of
*parameters was fixed (two to set the target and the method, one to set the name of the form, and the
*other three to set the select options).

*In this task, the number of parameters passed to the function will vary. Specifically, the number of
*parameters passed will determine the number of drop-down list choices available.

*Contrary to the previous task, here the target and method is set. For this task, the function you are
*required to code, will create a drop-down list as shown in the screenshot below (you must code your
*OWN drop-down list options!). Note the first option needs to be (Select a …..).

**/
//Function that generates the form with variable parameter list 
function task_5() {

	//list parameters into array
	$params = func_get_args();
	//Count parameters passed
	$num_params = func_num_args();

	//Generate form
	echo '<html>';
	echo '<form action="task1.php" method=GET target=_blank>';
	echo 'Make a selection: <select name='.$params[0].'>';
		//Generate drop down list from parameters not exceeding the length of the parameter list.
		for($i = 1; $i < $num_params.length; $i++) {
			echo '<option value="'.$params[$i].'">'.$params[$i].'</option>';
		}
	echo '</select><br>';
  	echo '<input type="submit" value="Select">';
	echo '</form>';
	echo '</html>';
}

//Call to function
task_5("Months", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
?>
