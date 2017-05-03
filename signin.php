<?php
include_once("db.php");
session_start();
?>
<?php
//	$new_uname = $_POST['uname'];
	
	//$uname = filter_var($new_uname,FILTER_SANITIZE_STRING);
	$uname = $_POST['uname'];
	$pwd= $_POST['pwd'];
	

$sql = "SELECT `functie`.`DENUMIRE` , `angajat`.`NUME` FROM `functie` INNER JOIN `angajat` ON `functie`.`ID` = `angajat`.`IDFUNCTIE` WHERE `angajat`.`USERNAME`= '$uname' AND `angajat`.`PAROLA` = '$pwd'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<h1 align='center'>" . $row["NUME"]. "</h1><br>";
		$functie=$row["DENUMIRE"];
    }
} else {
    echo "Failed to Login";
		echo "<br /><a href='login.php'>Try Again</a>";
}
//echo "<p>Ati fost autentificat ca si " . $functie . " : </p>";
if($functie=="admin") //retrimiteri pe pagini
{//echo "<a href='admin.php'>!Click aici!</a>";
	$_SESSION["admin"] = $uname;
    header("Location: http://localhost/COLECTIV/admin.php");
}
elseif($functie=="hr")
{
	$_SESSION["hr"] = $uname;
	header("Location: http://localhost/COLECTIV/hr.php");
}
elseif($functie=="user")
{
	$_SESSION["user"] = $uname;
	header("Location: http://localhost/COLECTIV/user.php");
}
else
{
	header("Location: http://localhost/COLECTIV/login.php");
}

mysqli_close($conn);
	
?>