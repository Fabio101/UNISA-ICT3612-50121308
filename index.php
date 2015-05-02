<html>
<head>
<link rel="stylesheet" type="text/css" href="ex.css">
</head>
<body>
<?php

//Rewritten by Fabio Pinto as per required specification
//Silencing output from includes
ob_start();
include('config.php');
ob_end_clean();
include('menu.php');

//Modified Quesries to database table;
$query = 'SELECT id, name, age FROM addd';

//Preparing the statement
$statement = $db->prepare($query);
$statement->execute();

//Fetching all results from statement
$rows = $statement->fetchAll();

echo "<table><tr><td>Name</td><td>Age</td><td></td><td></td>";

//Foreach loop to loop through all the results and build the table with the data
foreach ($rows as $row) {
	echo "<tr><td>".$row['name']."</td>";
	echo "<td>".$row['age']."</td>";
	echo "<td><a href='edit.php?id=".$row['id']."'>Edit</a></td>";
	echo "<td><a href='delete.php?id=".$row['id']."'>Delete</a></td><tr>";
}
?>
</ol>
</table>
</body>
</html>
<a href="menu.php">Back...<a>
</br><iframe src="index.txt" height="400" width="1200">
 <p>Your browser does not support iframes.</p></iframe>
