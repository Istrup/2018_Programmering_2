<?php
//Disse to linier indsættes for at vise fejlmeddelelser for siden
//Husk at udkommentere inden siden sættes i drift!
ini_set('error_reporting', E_ALL);
ini_set('display_errors', '1'); 


//Variable
$fornavn = $_POST['fornavn'];
$efternavn = $_POST['efternavn'];
$fodtaar = $_POST['fodtaar'];
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP test</title>
</head>

<body>
<H1> Her skal laves en beregning</H1>
<p>Og der skal vises et resultat</p>
<?php
	$alder = date ('Y') - $fodtaar;
	echo "Hej " . $fornavn . ", du fylder " . $alder .  "år i " . date('Y'); //Denne sætning skal færdiggøres, 
															   //og der skal tilføjes nødvendige
															   //variable og beregninger på siden
?>
</body>
</html>

