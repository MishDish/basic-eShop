<?php
	if(!isset($_SESSION))
		session_start();
	if(isset($_SESSION['korisnik']))
		{
			$broj_proizvoda=0;
			foreach($_SESSION['korpa'] as $proizvod)
			    {
				  if($proizvod>0)
				    ++$broj_proizvoda;
				}
			echo "
					<img src='./images/korpa.png'>
					<p><a href=index.php?meni=5>{$broj_proizvoda} proizvoda</a></p>
			";
		}
	else
		{
				echo "<img src='./images/korpa.png'>";
				echo "Niste ulogovani.";
		}
?>