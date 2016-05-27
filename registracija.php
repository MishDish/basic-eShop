<?php
   if(isset($_POST['email']))
        {
		 $ime=mysql_real_escape_string($_POST['ime']);
		 $ime=strip_tags($ime);
		 $prezime=mysql_real_escape_string($_POST['prezime']);
		 $prezime=strip_tags($prezime);
		 $email=mysql_real_escape_string($_POST['email']);
		 $email=strip_tags($email);
		 $lozinka=mysql_real_escape_string($_POST['lozinka']);
		 $lozinka=strip_tags($lozinka);
		 
		 mysql_query("
		 INSERT INTO KORISNICI VALUES('','{$ime}','{$prezime}','{$email}',password'{$lozinka}','1')
		 
		 ");
		 echo "<script>window.location.href='index.php'</script>";
		}

?>
<div id="registracija_forma">
	<h1>Registracija</h1><br /><br />
	<form method="post" action="">
		<label for="ime">Ime</label>
			<input type="text" name="ime" size="50" data-validate="required">
		<label for="prezime">Prezime</label>
			<input type="text" name="prezime" size="50" data-validate="required">
		<label for="email">email</label>
			<input type="text" name="email" size="50" data-validate="required">
		<label for="lozinka">Lozinka</label>
			<input type="password" name="lozinka" size="50" data-validate="required,min(6)">
		<label for="submit"></label>
			<input type="submit" name="reg" value="Registrujte se">
	</form>
</div>