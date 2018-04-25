<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>OBS!</title>
	<style>
		.knap {
			display: block;
			width: 400px;
			height: 20px;
			background: #FFCC00;
			padding: 10px;
			text-align: center;
			border-radius: 5px;
			color: black;
			font-weight: bold;
			font-family: sans-serif;
			text-decoration: none;
		}
	</style>
</head>

<body>

	<h1>OBS: Studieprojekt</h1>
	<div>
		<?php
			$referer = $_SESSION["redirurl"];
			echo "Du kommer fra siden: " . $referer . "<br>";
		?>
		
		<p> Du er på vej ind på en side der er en del af et undervisningsprojekt. Det er vigtigt at du er opmærksom på at siden ikke repræsenterer LK-Designs, men er udarbejdet af studerende på Multimediedesigneruddannelsen på Erhvervsakademi Dania i Skive.
	</div>
	
<p><a href="setSession.php" class="knap">Jeg forstår, før mig til studieprojektet..</a></p>
<p>eller</p>
<p><a href="http://www.lkdesigns.dk" class="knap">Jeg ønsker at besøge den originale LK-Designs side </a></p>

<p>Hvis du ønsker at vide mere om undervisningsprojektet, kan du kontate de studerede bag disse sider her xxx eller eller uddannelsens koordinator Niels Østergaard på nios@eadania.dk</p>
</body>
</html>
