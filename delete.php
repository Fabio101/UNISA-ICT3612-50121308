<html>
<head>
<link rel="stylesheet" type="text/css" href="ex.css">
</head>
<body>
<?php

//Rewritten by Fabio Pinto as per specifications

include('config.php');
include('menu.php');
//Pear Mail has been installed and will be used to notify us when a user is deleted
require_once 'Mail.php';

//Simple Mail server Options for the local server
$options = array();
$options['host'] = 'localhost';

//Creating the mailer object
$mailer = Mail::factory('smtp', $options);

//Defining the mail message headers
$headers = array();
$headers['From'] = 'fabio@openmanage.co.za';
$headers['To'] = 'fabio@parallel.co.za, 50121308@mylife.unisa.ac.za';
$headers['Subject'] = 'ICT3612 Task12: Record Deleted!'; 

//Defining the recipent list
$recipients = 'fabio@parallel.co.za, 50121308@mylife.unisa.ac.za';

if(isset($_GET['id'])){
	$id=$_GET['id'];

	//Modifiying query, not using named or question mark parameter by the variable directly
	$query = 'DELETE FROM addd WHERE id= '.$id;

	//Preparing statement
	$statement = $db->prepare($query);
	//executing...
	$statement->execute();

	if($query){
		header('location:index.php');
		//define mail bodyhere as this is if block confirms deletion of the record
		$body = 'Record with ID: '.$id.' has been deleted';

		//Send mail from this block as thisblock confirms deletion of the record
		$mailer->send($recipients, $headers, $body);
	}
}
?>
</body>
</html>
<a href="index.php">Back...<a>
