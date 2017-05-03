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
	</head>

<body>
	<div class="wrap">
	
	<nav>
		<ul class="menu">
			<li><a href="#"><span class="iconic home"></span> Acasa</a></li>
			<li><a href=''><span class="iconic plus-alt"></span> Date Personale</a>
				<ul>
					<li onClick = "return afisareDate();">
					<a href="#" name="date" onClick="return afisareDate();" >Vizualizeaza date</a></li>
					<li><a href="#">Modifica date</a></li>
				</ul>
			</li>
			<li><a href="#"><span class="iconic magnifying-glass"></span> Companie </a>
				<ul>
					<li><a href="#">Vizualizeaza angajati</a></li>
					<li><a href="#">Vizualizeaza cereri</a></li>
					<li><a href="#">Contabilitate</a></li>

				</ul>
			</li>
			<li><a href="#"><span class="iconic map-pin"></span> Products</a>
				<ul>
					<li><a href="#">Widget One</a></li>
					<li><a href="#">Widget Two</a></li>
					<li><a href="#">Web App Three</a></li>
					<li><a href="#">Web App Four</a></li>
					<li><a href="#">Crazy Products</a></li>
					<li><a href="#">iPhone Apps</a></li>
				</ul>
			</li>
			<li><a href="#"><span class="iconic mail"></span> Contact Admin</a>
				<ul>
					<li><a href="#">Informeaza admin de probleme functionale</a></li>
					<li><a href="#">Directions</a></li>
				</ul>
			</li>
		</ul>
		<div class="clearfix"></div>
	</nav>
	</div>
	<!-- here -->
<section id='show'  name='show'> </section>
</body>

</html>