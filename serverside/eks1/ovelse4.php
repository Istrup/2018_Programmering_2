<?php
//Disse to linier indsættes for at vise fejlmeddelelser for siden
//Husk at udkommentere inden siden sættes i drift!
ini_set('error_reporting', E_ALL);
ini_set('display_errors', '1'); 


//Variable
$fornavn = "Niels";
$efternavn = "Østergaard";
$telefonnummer = "3068 6878";
$email = "nios@eadania.dk";

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP test</title>
</head>

<body>
<H1> Dette er min anden PHP-side</H1>
<p>Dette er almindelig HTML</p>
<?php
	
	echo "<p>Velkommen " . $fornavn . " " . $efternavn . ". Tlf: " . $telefonnummer . ". Mail: <a href='mailto:" . $email . "'>" . $email . "</a></p>";
	
	date_default_timezone_set("Europe/Copenhagen"); //sætter tidszonen. Se: http://php.net/manual/en/timezones.europe.php
	echo "<p>Klokken er: " . date("H:i:s") . " her på serveren!</p>"; //udskriver tekst med formateret klokkeslet. Se: http://www.w3schools.com/php/php_date.asp
?>
</body>
</html>

