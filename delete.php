<?php
mysql_connect("localhost","root","");
$db = mysql_select_db("companymanagement");
if(!$db)
{
	echo "not connected";
}

echo $id = $_GET['id'];

$del = mysql_query("DELETE FROM angajat WHERE id = '$id' ");
if(!$del)
{
	echo mysql_error();
}
else
{
	echo "Sters! FICAT !";
}//echo "Deleted";

header("location:vizualizeazaAngajatiVarianta2.php");
?>