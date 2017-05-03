<?php
//echo "esti pe pagina Administratotului";
session_start();
//print_r($_SESSION);
$user = $_SESSION["admin"];
//echo "sunt in admin.php";
//echo $user;

?>
<html>
<head>
	<!-- Parte de meniu -->
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
		<meta charset="utf-8">
		<title>CompanyManagement</title>
		<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
		<link href="iconic.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="prefix-free.js"></script>
	
	<!--Parte de functii folosite in cod -->
	<script type="text/javascript" src="jquery.js"> </script>
	<script type="text/javascript">
		var done = false;
		function callOnce(lastPosition) {
		  if (lastPosition == 0 && !done) {
			done = true;
			afisareDate(lastPosition);
		  }
		}
		function afisareDate(lastPosition)
		{
			 $(document).ready(function(){
			setInterval(function (){
				$('#show').load('data.php')
			}, 0000);
		
		});
		}
	</script>
	
	<script type="text/javascript">
		function vizAng(){
		$(document).ready(function(){
			setInterval(function (){
				$('#angajati').load('vizualizeazaAngajati.php')
			}, 0000);
		});
		}
	</script>
	
	
	</head>

<body>
	<div class="wrap">
	
	<nav>
		<ul class="menu">
			<li><a href="#"><span class="iconic home"></span> Acasa</a></li>
			<li><a href=''><span class="iconic plus-alt"></span> Date Personale</a>
				<ul>
					<li onClick = "return afisareDate();">
					<a href="javascript:void(0);" name="date" onClick="return afisareDate(lastPosition);" >Vizualizeaza date</a></li>
					
					<li><a href="#">Modifica date</a></li>
					
					<li><a href="#">Cereri</a></li>
				</ul>
			</li>
			<li><a href="#"><span class="iconic magnifying-glass"></span> Companie </a>
				<ul>
					<li><a href="javascript:void(0);" onClick="return vizAng();">Vizualizeaza angajati</a></li>
					<li><a href="#">Vizualizeaza cereri</a></li>
					<li><a href="#">Contabilitate</a></li>
					<li><a href="adaugaAngajat.php">Adauga Angajat</a></li>
					<li><a href="#">Sterge Angajat</a></li>
					<li><a href="#">Update Angajat</a></li>
				</ul>
			</li>
			<li><a href="login.php"><span class="iconic map-pin"></span> Log Out</a>
			</li>
		</ul>
		<div class="clearfix"></div>
	</nav>
	</div>
<div align="center" id='show'  name='show'> </div>
<div id='angajati' > </div>
</body>

</html>