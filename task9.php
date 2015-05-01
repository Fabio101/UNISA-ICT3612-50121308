<?php
/**
* Author : Fabio Pinto
* Description as per requiremnets :

*Extend the class:
*1. With a subclass “academic” containing two public properties staffNumber and officeNumber.
*Overwrite the write_information function so that the following sentence is echoed: "Vusi
*Buthelezi is an academic with staff number 12345. He is in office 12." 8 marks

*2. With a class "student" containing two appropriate properties and a write_information function that
*will output the student's information.

**/

//Abstract class as per spec:
abstract class person {
	public $lastName;
	public $firstName;
	abstract protected function write_information();
}

//Extended classes
class Academic extends person {
	
	//Public properties
	public $staffNumber;
	public $officeNumber;

	//Overridden method from parent
	public function write_information() {
		echo $this->firstName.' '.$this->lastName.' is an academic with staff number '.$this->staffNumber.'. He is in office '.$this->officeNumber.'.';
	}
}

class Student extends person {
	
	//public properties
	public $studentNumber;
	public $studentClassNumber;

	//Overridden method from parent
	public function write_information() {
		echo '</br></br>';
		echo '<strong>Student :</strong> '.$this->firstName.' '.$this->lastName.'</br>';
		echo '<strong>Student Number :</strong> '.$this->studentNumber.'</br>';
		echo '<strong>Student Class :</strong> '.$this->studentClassNumber.'</br>'; 
	}
}

//Creation of Academic object and call to overridden method from child class
$newAcademic = new Academic();
$newAcademic->firstName = 'Vusi';
$newAcademic->lastName = 'Buthelezi';
$newAcademic->staffNumber = '12345';
$newAcademic->officeNumber = '12';

$newAcademic->write_information();

//Creation of Student object and call to overridden method from child class
$newStudent = new Student();
$newStudent->firstName = 'Fabio';
$newStudent->lastName = 'Pinto';
$newStudent->studentNumber = '50121308';
$newStudent->studentClassNumber = '123';

$newStudent->write_information();
?>
