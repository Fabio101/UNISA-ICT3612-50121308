<?php
/**
* Author : Fabio Pinto
* Description as per requiremnets :
* 
* Describe in your own words what inheritance means. 2 marks
* Now, extend the Animal class here above, and add a new function in an extended class that will print out
* an additional line.
**/
//Including the file containing the class we will extend from. Added output buffers to hide the output produced from the task6.php file as it is not required for this task
ob_start();
include_once 'task6.php';
ob_end_clean();

//Creating new subclass extending from Animals
class Domesticated_Animals extends Animals {

	public function __construct($cat, $dog, $bird) {
		//Superclass constructor available in subclass
		parent::__construct($cat, $dog, $bird);
	}

	public function domestic() {
		echo 'They all can be domesticated';
	}
}
//Instanciating a Domesticated_Animals class object
$householdAnimals = new Domesticated_Animals('Maine Coon', 'Boxer', 'Love Bird');

//Echoing the definition of inheritence in HTML
echo '<p><strong>Inheritence is when classes share properties and methods of another parent class and can make use of them as if they were their own.</strong></p>';

//Echo our output for the task
echo 'The animals are a '.$householdAnimals->getDog().' ,a '.$householdAnimals->getCat().' and a '.$householdAnimals->getBird().'.</br>';
echo $householdAnimals->domestic();

?>
