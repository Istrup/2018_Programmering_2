<?php
    include("opendb.php");
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
                <div id="placeholder">Der er pt. ingen observationer</div>
            </section>
            <footer>
                    <p>&copy; Copyright Niels Østergaard 2018</p>
            </footer>
        </div><!-- pagewrap -->
    </body>
</html>