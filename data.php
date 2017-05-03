<?php
$conn = new mysqli('localhost', 'root' , '' , 'companymanagement');
if($conn->connect_error) {
	die("Connection error");
}
session_start();

$user=$_SESSION["admin"];
//echo "Sunt in data.php";
//echo $user;

$result = $conn->query("SELECT nume,email,CNP FROM angajat WHERE username='$user'");
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()){
		echo $row['email'] . "<br>";
		$email=$row['email'];
		echo $row['nume'] . "<br>";
		$nume=$row['nume'];
		echo $row['CNP'] . "<br>";
		$cnp=$row['CNP'];
		};
	};
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="style1.css">
	</head>
	<body>
		<div id="col12">
		<div class="box boxFirst">
			<div class="content">
			
				<h2>Date personale</h2> 
				<ul>
				<li>Nume: &nbsp<?php echo $nume;?></li>
				<li>CNP: &nbsp<?php echo $cnp;?></li>
				<li>Email: &nbsp<?php echo $email;?></li>
				</ul>
		
			</div>
			<div class="roundedBorder-left"></div>
			<div class="roundedBorder-right"></div>
		</div>
		</div>
	</body>
</html>