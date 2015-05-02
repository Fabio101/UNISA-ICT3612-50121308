<?php
/**
* Author: Fabio Pinto
* Description as per requirements: 

* Create a function of your choice that will accept an associative array as the parameter, and that will print
* the key/value pairs.

*Create the array and call the function. 
**/
//Function 
function task_2(&$assoc_array) {
	
	//some bolded title
	echo '<strong>Key => Value :</strong></br><hr>';	

	//Print out of assoc array key/value pairs
	foreach($assoc_array as $key => $value) {
		echo $key.' => '.$value.'</br>'; 
	}
}

//Array decalration and population
$assoc_array = array('sky' => 'blue', 'grass' => 'green', 'clouds' => 'white');
//Call to function
task_2($assoc_array)
?>
</br><a href="index.html">Back...<a>
