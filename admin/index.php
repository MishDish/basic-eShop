<html>
<head>
</head>
<body>
<div id="meni">
	<a href=index.php?meni=1>KATEGORIJE</a>&nbsp;&nbsp;&nbsp;
	<a href=index.php?meni=2>PROIZVODI</a>&nbsp;&nbsp;&nbsp;
	<a href=index.php?meni=3>KORISNICI</a>&nbsp;&nbsp;&nbsp;
	<a href=index.php?meni=4>NARUDZBENICE</a>&nbsp;&nbsp;&nbsp;
	<a href=index.php?meni=5>IZVESTAJI</a>
</div>
<br>

<div id="sadrzaj">
<?php
	if(isset($_GET['meni']))
		{
			if($_GET['meni']==1) include "kategorije.php";
			if($_GET['meni']==2) include "proizvodi.php";
			if($_GET['meni']==3) include "korisnici.php";
			if($_GET['meni']==4) include "narudzbenice.php";
			if($_GET['meni']==5) include "izvestaji.php";
		}
	else
		include "kategorije.php";
?>
</div>

</body>
</html>