<?php
$conn = new mysqli('localhost', 'root' , '' , 'companymanagement');
if($conn->connect_error) {
	die("Connection error");
}
?>

<table border="2">
<tr>
<th>Id</th>
<th>Username</th>
<th>Nume</th>
<th>Cnp</th>
<th>Telefon</th>
<th>Email</th>

</tr>


<?php
//$record = mysql_query("SELECT * FROM 'angajat' ");
$result = $conn->query("SELECT id, username, nume, cnp, telefon, email  FROM angajat");

if($result->num_rows > 0) {
while($row = $result->fetch_assoc()){
	?>
	<tr>

	<td><?php echo $row['id'];?></td>
	<td><?php echo $row['username'];?></td>
	<td><?php echo $row['nume'];?></td>
	<td><?php echo $row['cnp'];?></td>
	<td><?php echo $row['telefon'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><a href="edit.php?id=<?php echo $row['id'];?>"> Edit</a></td>
	<td><a href = "delete.php?id= <?php echo $row['id']; ?> " > Delete</a></td>
	</tr>
	
<?php
};
}
?>
</table>