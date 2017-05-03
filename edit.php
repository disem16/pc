<?php
mysql_connect("localhost","root","");
$db = mysql_select_db("companymanagement");
if(!$db)
{
	echo "not connected";
}

$id = $_GET['id'];


if(isset($_POST['done']))
{
$username = $_POST['username'];
$parola = $_POST['parola'];
$nume = $_POST['nume'];
$cnp = $_POST['cnp'];
$telefon = $_POST['telefon'];
$email = $_POST['email'];
$functie = $_POST['functie'];

$edit = mysql_query("UPDATE angajat SET 'username'='$username','parola'='$parola','nume'='$nume','cnp'='$cnp','telefon'='$telefon', 'email'='$email','functie'='$functie' WHERE id='$id' ");

if(!$edit)
{
	echo mysql_error();
}
else
{
	echo "Bagat! FICAT !";
}
}
?>

<form method="POST">
	
	<input type="text" name="username" placeholder="username">
	<input type="text" name="parola" placeholder="*****">
	<input type="text" name="nume" placeholder="nume">
	<input type="text" name="cnp" placeholder="cnp">
	<input type="text" name="telefon" placeholder="telefon">
	<input type="text" name="email" placeholder="email">
	<input type="text" name="functie" placeholder="functie">
	<input type="submit" name="done">
</form>