<?php

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
	echo "Velkommen " . $fornavn . " " . $efternavn;
?>
</body>
</html>
