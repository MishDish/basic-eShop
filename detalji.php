<?php
	session_start();
	
	if(isset($_GET['kupi']) and is_numeric($_GET['kupi']))
		{
			array_push($_SESSION['korpa'], $_GET['kupi']);
			echo "<script>alert('Dodali ste proizvod u korpu'); parent.$.fancybox.close();</script>";
		}
	
	if(!isset($_GET['proizvod']) or !is_numeric($_GET['proizvod']))
		die;
	include "./include/baza.php";
?>

<html>
<head>
<meta charset="utf-8">
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
<style>
	body {
font-family: 'Roboto Condensed', sans-serif;
}
</style>
</head>
<body>
	<?php
		$rez=mysql_query("SELECT * FROM proizvodi WHERE proizvod_id='{$_GET['proizvod']}' AND vidljivo=1 LIMIT 1");
		while($rek=mysql_fetch_object($rez))
			{
				echo "<img src='./proizvodi/{$rek->proizvod_id}.jpg' height=200>";
				echo "<br>";
				echo "Naziv: ".$rek->naziv;
				echo "<br>";
				echo "Opis: ".$rek->opis;
				echo "<br>";
				echo "Cena: ".$rek->cena." din.";
				echo "<br>";
				if(isset($_SESSION['korisnik']))
					echo "<a href=detalji.php?kupi={$rek->proizvod_id}><img src=./images/dodajukorpu.png></a>";
				else
					echo "Da bi proizvod dodali u korpu, morate da budete prijavljeni.";
			}
	?>
</body>
</html>