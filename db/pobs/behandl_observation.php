<?php
include("opendb.php");

//echo "Der er hul igennem til behandl_observation.php";

$obstype = $_POST['obsType'];
$obstekst = $_POST['obsTekst'];

//$sql = "INSERT INTO planteobservationer (obstype, obstekst) VALUES ('".$obstype."', '".$obstekst."')";
$sql = "INSERT INTO planteobservationer (obstype, obstekst, obstid) VALUES ('".$obstype."', '".$obstekst."', NOW())"; //nu med tid

//echo("SQL: " . $sql);

if ($conn->query($sql) === TRUE) {
   // echo "Gemt i databasen<br>";
} else {
    echo "Fejl: " . $sql . "<br>" . $conn->error . "<br>";
}

$conn->close(); //vi lukker forbindelsen til databasen igen
    header('Location: index.php');
?>
