<div id="kategorije">

<br>
<form method="post" action="">
	<input name="trazi">
	<input type="submit" value="ok">
</form>



<?php
	$rez=mysql_query("SELECT * FROM kategorije WHERE vidljivo=1");
	while($rek=mysql_fetch_object($rez))
		echo "<div id='kategorija'><a href=index.php?meni=3&kat={$rek->kategorija_id}>{$rek->naziv}</a></div>";
	if(!isset($_GET['kat']) or !is_numeric($_GET['kat']))
		$_GET['kat']=1;
?>
</div>

<div id="proizvodi">
<?php
	if(isset($_POST['trazi']))
		{
			$kljucne_reci=explode(" ",$_POST['trazi']);
			$upit="SELECT * FROM proizvodi WHERE vidljivo=1 ";
			foreach($kljucne_reci as $rec)
				{
					$upit=$upit."AND naziv like '%{$rec}%' ";
				}
			$rez=mysql_query($upit);
		}
	else
	$rez=mysql_query("SELECT * FROM proizvodi WHERE kategorija='{$_GET['kat']}' AND vidljivo=1");
	while($rek=mysql_fetch_object($rez))
	echo "
	<div id='proizvod'>
		<img src='./proizvodi/{$rek->proizvod_id}.jpg'>
		<div id='proizvod-opis'>
			{$rek->naziv}
			<br>
			{$rek->cena} din.
			<br>
			<a class='prozor fancybox.iframe' href='detalji.php?proizvod={$rek->proizvod_id}'>Detalji</a>
		</div>
	</div>";
?>
</div>