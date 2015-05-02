<?php
/**
* Author : Fabio Pinto
* Description as per requirements :

* Create a class named Animals, that when called, will access the properties of the class and produce the
* output here below. The class must have a constructor and get and set methods.
**/

class Animals {

	//Classes properties 
	private $cat;
	private $dog;
	private $bird;

	//Constructor method when new objects of this class are instantiated. Parameters are optional.
	public function __construct($cat = NULL, $dog = NULL, $bird = NULL) {
		$this->cat = $cat;
		$this->dog = $dog;
		$this->bird = $bird;
	}

	//Getter methods of the Aanimalks properties
	public function getCat() {
		return $this->cat;
	}

	public function getDog() {
		return $this->dog;
	}

	public function getBird() {
		return $this->bird;
	}

	//Setter methods for the Animals properties
	public function setCat($cat) {
		$this->cat = $cat;
	}

	public function setDog($dog) {
		$this->dog = $dog;
	}

	public function setBird($bird) {
		$this->bird = $bird;
	}
}

//New object from the Animals class.
$pettingZoo = new Animals("Tabby Cat", "Jack Russel Terrior", "Budgie");

//Different new object from Animals class demonstrating not setting properties with the contructor but rather with the setter methods of the class.
$animalFarm = new Animals();
$animalFarm->setCat('British Short Hair');
$animalFarm->setDog('Maltese Poodle');
$animalFarm->setBird('Bald Eagle');

//Echoing the pettingZoo objects properties
echo 'The animals are a '.$pettingZoo->getDog().' ,a '.$pettingZoo->getCat().' and a '.$pettingZoo->getBird().'.';

echo '</br></br>';

//Echoing the animalFarm objects properties
echo 'The animals are a '.$animalFarm->getDog().' ,a '.$animalFarm->getCat().' and a '.$animalFarm->getBird().'.';

?>
</br><a href="index.html">Back...<a>
