<?php
    include("opendb.php");
    $sql = 'SELECT obstype, obstekst FROM planteobservationer LIMIT 50';
    //echo "sql: " . $sql; //udkommenteres når vi har tjekket at det virker
    $resultat = mysqli_query($conn, $sql); //hent værdier og læg dem i $resultat, så kan vi bruge dem senere
?>
<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>POBS PlanteOBServationer</title>
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
        <div id="pagewrap">
            <header>
                    <h1>Planteobservationer</h1>             
            </header>
            <form name="observation_form" method="post" action="behandl_observation.php">
                <fieldset><legend>Opret observation</legend>
                    <label>Observationstype:</label><br>
                    <select id = "obsType" name="obsType" >
                        <option value="Plantesygdom">Plantesygdom</option>
                        <option value="Insektangreb">insektangreb</option>
                        <option value="Vækstobservation">Vækstobservation</option>
                        <option value="Miljøobservation">Miljøobservation</option>
                        <option value="Andet">Andet</option>
                    </select><br>
                    <label>Observation:</label><br>
                    <textarea id="obsTekst" name="obsTekst"></textarea><br>
                    <br>
                    <button type="submit" value="submit">Gem observation</button>
                </fieldset>
            </form>
            <section id="observationer">
                <?php while ($r = mysqli_fetch_array($resultat)) { //En while-løkke der lægger hver række i $r
                            echo '<section class=""><h3>' . $r['obstype'] . '</h3><p>' . $r['obstekst'] . '</p></section>';
                        } 
                 ?>
            </section>
            <footer>
                    <p>&copy; Copyright Niels Østergaard 2018</p>
            </footer>
        </div><!-- pagewrap -->
    </body>
</html>