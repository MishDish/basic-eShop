<?php
	if(isset($_GET['logout']))
		{
			unset($_SESSION['korisnik']);
			echo "<script>window.location.href='index.php';</script>";
		}

	if(!empty($_POST['email']))
		{
			$email=mysql_real_escape_string($_POST['email']);
			$email=strip_tags($email);
			$lozinka=mysql_real_escape_string($_POST['lozinka']);
			$lozinka=strip_tags($lozinka);
			$rez=mysql_query("SELECT * FROM korisnici WHERE email='{$email}' AND lozinka=password('{$lozinka}') AND vidljivo=1 LIMIT 1");
			while($rek=mysql_fetch_object($rez))
				{
					$_SESSION['korisnik']=$rek->korisnik_id;
					$_SESSION['ime']=$rek->ime." ".$rek->prezime;
					$_SESSION['korpa']=Array();
					echo "<script>window.location.href='index.php'</script>";
				}
		}
?>

<?php
	if(!isset($_SESSION['korisnik']))
		{
?>
<form id="login-forma" name="login-forma" method="POST" action="">
	<label for="email">Email adresa</label>
		<input type="text" name="email" id="email" />
	<label for="lozinka">Lozinka</label>
		<input type="password" name="lozinka" id="lozinka" />
	<label for="login-dugme"></label>
		<input type="submit" name="login-dugme" id="login-dugme" value="Prijavi se" />
</form>

<div id="registrujse">
	<a href="index.php?meni=9">Registrujte se</a>
</div>
<?php
		}
	else
		{
			echo "Dobrodosli {$_SESSION['ime']}.";
			echo "<br>";
			echo "<a href=index.php?logout>Izlogujte se</a>";
		}
?>
	