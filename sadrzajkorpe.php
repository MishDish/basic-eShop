<?php
   if (isset($_GET['obrisi']) and is_numeric($_GET['obrisi']))
         {
            $pozicija=array_search($_GET['obrisi'], $_SESSION['korpa']);
			$_SESSION['korpa'][$pozicija]=0;
			echo "<script>$('#korpa').load('korpa.php')</script>";

         }
   foreach($_SESSION['korpa'] as $proizvod)
       {
	         $rez=mysql_query("SELECT * FROM proizvodi WHERE proizvod_id='{$proizvod}' LIMIT 1");
			 while($rek=mysql_fetch_object($rez))
			    {
				 echo"<a href=index.php?meni=5&obrisi={$rek->proizvod_id}><img src=./images/obrisi.png height=24px></a>";
				 echo $rek->naziv;
				 echo "<br>";
				++$broj_proizvoda;
				}
	      
	   }
	  if($broj_proizvoda>0) 
		echo "<h1><a href=index.php?meni=6>Zavrsetak kupovine i placanje</a></h1>";
	  
	  echo "<br>---------------------------------<br>";
	  $rez=mysql_query("SELECT naziv, narudzbenice.cena, datum, status, koliko
FROM narudzbenice
LEFT JOIN proizvodi
ON sta=proizvod_id
WHERE ko={$_SESSION['korisnik']}
ORDER BY datum DESC");
	  while($rek=mysql_fetch_object($rez))
		{
			echo "{$rek->naziv} *** {$rek->cena} din. *** {$rek->koliko} kom. *** ";
			if($rek->status==0) echo "Odbijeno";
			if($rek->status==1) echo "Razmatra se";
			if($rek->status==2) echo "Prihvaceno i ceka se na isporuku";
			if($rek->status==3) echo "Na putu";
			if($rek->status==4) echo "Isporuceno";
			echo "<BR>";
		}
?>