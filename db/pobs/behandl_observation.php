<?php
include("opendb.php");

$obstype = $_POST['obsType'];
$obstekst = $_POST['obsTekst'];

$sql = "INSERT INTO new_table (obstype, obstekst) VALUES ('".$obstype."', '".$obstekst."')";

//echo("SQL: " . $sql);

if ($conn->query($sql) === TRUE) {
    //echo "Gemt i databasen<br>";
} else {
    //echo "Fejl: " . $sql . "<br>" . $conn->error . "<br>";
    echo "Der er sket en fejl<br>";
}

$conn->close(); //vi lukker forbindelsen til databasen igen
    header('Location: index1.php');
?>
