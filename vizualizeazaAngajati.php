<?php
$conn = new mysqli('localhost', 'root' , '' , 'companymanagement');
if($conn->connect_error) {
	die("Connection error");
}

$result = $conn->query("SELECT nume, username, CNP FROM angajat");
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()){
		echo $row['nume'] . " ";
		echo $row['username'] . "<br>";
		echo $row['CNP'] . "<br>";
		};
	};
?>