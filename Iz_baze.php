<!DOCTYPE html>
<html lang="hr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<title>Moj profil</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Description" lang="hr" content="ADD SITE DESCRIPTION">
		<meta name="author" content="ADD AUTHOR INFORMATION">
		<meta name="robots" content="index, follow">

		<link rel="stylesheet" href="css/styles.css">
	</head>
	
	<body>
		<a name="vrh"></a>
		<div class="container">
			<div class="header">
				<a href="korisnik.php"><img src="ikonice/login.png" class="doorlist"/></a>
				<h2 class="header-heading">Web projekt</h2>
			</div>
			<div class="nav-bar">
				<ul class="nav">
					<li><button class="dugme"><a href="index.html">Početna</a></button></li>
					<li><button class="dugme"><a href="fakultet.html">Fakultet</a></button></li>
					<li><button class="dugme"><a href="privatno.html">Privatno</a></button></li>
					<li><button class="dugme"><a href="zivotopis.html.">Životopis</a></button></li>
					<li><button class="dugme"><a href="kontakt.html">Kontakt</a></button></li>
				</ul>
			</div>
			<div class="content">
				<div class="main">
					<h2 class="podaci">Ispis svih korisnika</h2>
					<hr>
					
				<?php

				$con=mysqli_connect("localhost","root","","korisnik");

				if (mysqli_connect_errno())
				{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				$result = mysqli_query($con,"SELECT * FROM novi");

				echo "<table border='2'>
					<tr>
					<th>korisnicko_ime</th>
					<th>lozinka</th>
					<th>ime</th>
					<th>prezime</th>
					<th>email</th>
					</tr>";

				while($row = mysqli_fetch_array($result))
				{
					echo "<tr>";
					echo "<td>" . $row['korisnicko_ime'] . "</td>";
					echo "<td>" . $row['lozinka'] . "</td>";
					echo "<td>" . $row['ime'] . "</td>";
					echo "<td>" . $row['prezime'] . "</td>";
					echo "<td>" . $row['email'] . "</td>";
					echo "</tr>";
				}
					echo "</table>";

					mysqli_close($con);
				?>

					<br>
				</div>
			</div>
			
			<button class="ispis"><a href="korisnik.php">Unesi novog korisnika</a></button>
			
			<div class="footer">
				&copy; Strahinja Negovanović
				<div class="drustveno">
				<footer>
				<a href="https://www.facebook.com/strahinja.negovanovic"><img title="Facebook" src="ikonice/facebook.png" width="35px" height="35px"/></a>
				<a href="https://twitter.com/Kistras"><img title="Twitter" src="ikonice/twitter.png" width="35px" height="35px"/></a>
				<a href="https://plus.google.com/u/0/103167825392726927406/posts"><img title="Google" src="ikonice/google.png" width="35px" height="35px"/></a>
				</div>
			</div>
		</div>
	</body>
</html>