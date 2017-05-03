<?php
mysql_connect("localhost","root","");
$db = mysql_select_db("companymanagement");
if(!$db)
{
	echo "not connected";
}
?>


<!DOCTYPE HTML>
<html>
<head>
	<title>Adauga Angajat</title>
	<meta http-equiv="Content-Type" content="text/html;-charset=iso-8859-1">
</head>

<body>

<form method="POST">
	<input type="text" name="id" placeholder="id">
	<input type="text" name="username" placeholder="username">
	<input type="text" name="parola" placeholder="*****">
	<input type="text" name="nume" placeholder="nume">
	<input type="text" name="cnp" placeholder="cnp">
	<input type="text" name="telefon" placeholder="telefon">
	<input type="text" name="email" placeholder="email">
	<input type="text" name="functie" placeholder="functie">
	<input type="submit" name="done">
</form>

<?php

if(isset($_POST['done']))
{
$id = $_POST['id'];
$username = $_POST['username'];
$parola = $_POST['parola'];
$nume = $_POST['nume'];
$cnp = $_POST['cnp'];
$telefon = $_POST['telefon'];
$email = $_POST['email'];
$functie = $_POST['functie'];

$insert = mysql_query("INSERT INTO angajat VALUES('$id','$username','$parola','$nume','$cnp','$telefon','$email','$functie','0')");

if(!$insert)
{
	echo mysql_error();
}
else
{
	echo "Bagat! FICAT !";
}
}
?>
</body>

</html>
