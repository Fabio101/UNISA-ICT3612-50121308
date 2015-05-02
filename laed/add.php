<html>
<head>
<link rel="stylesheet" type="text/css" href="ex.css">
</head>
<body>
<?php
include('config.php');
include('menu.php');
if(isset($_POST['submit'])){
$name=mysql_real_escape_string($_POST['name']);
$age=mysql_real_escape_string($_POST['age']);
$query1=mysql_query("insert into addd values('','$name','$age')");
if($query1){
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