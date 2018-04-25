<?php
//Disse to linier indsættes for at vise fejlmeddelelser for siden
//Husk at udkommentere inden siden sættes i drift!
ini_set('error_reporting', E_ALL);
ini_set('display_errors', '1');

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP test</title>
</head>

<body>
<H1>Test af include</H1>
<p>Dette er den oprindelige PHP-fil</p>
<?php 
    include "ekstern.html"; 
?>

<p>Dette er også i den oprindelige PHP-fil</p>

</body>
</html>

