<?php
	include "./include/baza.php";
	session_start();
?>

<html>
<head>
<meta charset="utf-8">
<title>Internet prodavnica</title>
	<link href="css/index.css" rel="stylesheet" type="text/css" /> <!-- Glavni CSS -->
	<script src="./js/jquery-1.11.1.min.js"></script> <!-- JQuery -->
	<script src="./js/verify.notify.min.js"></script> <!-- Validacija formi -->
	<link rel="stylesheet" href="./js/fancybox/jquery.fancybox.css" type="text/css" media="screen" /> <!-- Fancybox CSS -->
	<script type="text/javascript" src="./js/fancybox/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
	<script> <!-- Inicijalizacija i definisanje prozora Fancybox-a -->
		$(document).ready(function() {
			$(".prozor").fancybox({
				minWidth	: 350,
				maxWidth	: 350,
				minHeight	: 400,
				afterClose	: function() {
					$("#korpa").load("korpa.php");
				}
			});
		});
	</script>
</head>

<body>
<div id="container">
		<div id="header">
			<div id="logo">
				<img src="./images/logo.png">
			</div>
			<div id="login">
				<?php include "login.php"; ?>
			</div>
			<div id="korpa">
				<?php include "korpa.php"; ?>
			</div>
		</div>
		<ul id="navlist">
            <li><a href="index.php?meni=1">Početna</a></li>
            <li><a href="index.php?meni=2">O nama</a></li>
            <li><a href="index.php?meni=3">Proizvodi</a></li>
            <li><a href="index.php?meni=4">Kontakt</a></li>
		</ul>
		<div id="sadrzaj">
			<?php
				if(isset($_GET['meni']) and is_numeric($_GET['meni']))
					{
						if($_GET['meni']==1) include "pocetna.php";
						else if($_GET['meni']==2) include "onama.php";
						else if($_GET['meni']==3) include "proizvodi.php";
						else if($_GET['meni']==4) include "kontakt.php";
						else if($_GET['meni']==5) include "sadrzajkorpe.php";
						else if($_GET['meni']==9) include "registracija.php";
						else if($_GET['meni']==6) include "potvrda.php";
						else include "pocetna.php";
						
					}
				else include "pocetna.php";
			?>
		</div>
		<div id="footer">
			<?php include "footer.php"; ?>
		</div>
</div>
</body>
</html>
