<html>
<head>
<link rel="stylesheet" type="text/css" href="ex.css">
</head>
<body>
<?php

//Rewritten by Fabio Pinto as per specifications

include('config.php');
include('menu.php');

if(isset($_POST['submit'])){
	//Removed sanitation as PDO prepared statements eliminate the need
	$name = ($_POST['name']);
	$age = ($_POST['age']);

	//Using named parameters in query 
	$query = "INSERT INTO addd VALUES('', :name, :age)";
	$statement = $db->prepare($query);

	//Binding Named parameters to variables 
	$statement->bindValue(':name', $name);
	$statement->bindValue(':age', $age);
	
	$statement->execute();

	if($query){
		header("location:index.php");
	}
}
?>
<fieldset style="width:300px;">
<form method="post" action="">
Name: <input type="text" name="name"><br>
Age: <input type="text" name="age"><br>
<br>
<input type="submit" name="submit">
</form>
</fieldset>
</body>
</html>
<a href="index.php">Back...<a>
