<?php
/**
* Author : Fabio Pinto
* Description as per requiremnets :

* Using the above code as a guide, create your own Animal class. The class should contain, at minimum, 2
* static methods and 2 static properties. Access these methods/properties.
**/

//Class
class Animals {

	//Static properties
	static public $dog = "Spaniel";
	static public $cat = "Tabby";

	//Static methods
	static public function dogBark($dog) {
		echo 'The '.$dog.' barks like "<strong>BOW BOW BOW WOOO BOW BOW BOW!</strong>"';
	}

	static public function catMeow() {
		echo 'MEOW MEOW MEOW MEEEE';
	}
}
//Accessing the static properties and methods
echo 'The dog is a ' .Animals::$dog . '</br>';
echo 'The cat is a ' .Animals::$cat . '</br></br>';

Animals::dogBark(Animals::$dog = 'Boxer');

echo '</br></br>';

Animals::catMeow();
?>
