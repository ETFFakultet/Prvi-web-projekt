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
					<h2 class="podaci">Registracija korisnika</h2>
					<hr>
					<form method="post" action="u_bazu.php" class="registracija">
						<p>Korisnicko ime: <input type="text" name="korisnicko_ime"><br /></p>
						<p>Lozinka: <input type="password" name="lozinka"><br /></p>
						<p>Ime: <input type="text" name="ime"><br /></p>
						<p>Prezime: <input type="text" name="prezime"><br /></p>
						<p>E-mail: <input type="text" name="email"><br /></p>
						<div class="zaformu">
							<input type="submit">
							<button><a href="Iz_baze.php">Ispiši sve korisnike</a></button>
						</div>
					</form>
					<hr>
				</div>
			</div>
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