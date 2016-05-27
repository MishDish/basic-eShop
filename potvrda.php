<?php
	$korpa=array_count_values($_SESSION['korpa']);
	foreach($korpa as $sta=>$koliko)
		{
			if($sta>0)
				{
				$rez=mysql_query("SELECT * FROM proizvodi WHERE proizvod_id='{$sta}' LIMIT 1");
				while($rek=mysql_fetch_object($rez))
					{
						$cena=$rek->cena*$koliko;
					}
			mysql_query("
			
			INSERT INTO narudzbenice VALUES
			('', '{$_SESSION['korisnik']}', '{$sta}', '{$koliko}', '{$cena}', now(), '{$_SERVER['REMOTE_ADDR']}', '1')
			
			");
				}
		}
	$_SESSION['korpa']=Array();
	echo "<script>$('#korpa').load('korpa.php')</script>";
?>










