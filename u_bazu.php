<html>
	<body>
			<?php

			$con = mysql_connect("localhost","root","");
			if (!$con)
			  {
			  die('Could not connect: ' . mysql_error());
			  }
			 
			mysql_select_db("korisnik", $con);

			$korisnicko_ime = mysql_real_escape_string($_POST['korisnicko_ime']);
			$lozinka = md5(mysql_real_escape_string($_POST['lozinka']));
			$ime = mysql_real_escape_string($_POST['ime']);
			$prezime = mysql_real_escape_string($_POST['prezime']);
			$email = mysql_real_escape_string($_POST['email']);

			$sql="INSERT INTO novi (korisnicko_ime, lozinka, ime, prezime, email) VALUES ('$korisnicko_ime','$lozinka','$ime','$prezime','$email')";
			 
			if (!mysql_query($sql,$con))
			  {
			  die('Error: ' . mysql_error());
			  }
			echo "1 korisnik dodan";
			 
			mysql_close($con)
			?>

		<br /> <br />
		<a href="korisnik.php"> Povratak na prethodnu stranicu!</a>
	</body>
</html>


	