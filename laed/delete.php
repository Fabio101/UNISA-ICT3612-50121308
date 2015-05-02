<html>
<head>
<link rel="stylesheet" type="text/css" href="ex.css">
</head>
<body>
<?php
include('config.php');
include('menu.php');
if(isset($_GET['id'])){
$id=$_GET['id'];
$query1=mysql_query("delete from addd where id='$id'");
if($query1){
header('location:index.php');
}
}
?>
</body>
</html>