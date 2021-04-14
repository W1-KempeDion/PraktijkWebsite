<!Doctype html>
<?php
/**
 * Author:  Daan van Meer, Daan van Maren en Dion Kempe
 * Date:    9-4-2020
 * Subject: index.php
 */
?>
<html>
<head>
    <title>
        ICT-Academie - Koning Willem 1 College
    </title>
    <meta carset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <link rel="stylesheet" href="css/default.css">
    <script src="https://kit.fontawesome.com/c1698f882b.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
    <body>
        <header id="header">
            <?php
                include 'includes/header_index.php';
            ?>
        </header>
        <main>
            <div class="background">
            <?php
            if(date('H') < '6') {
                echo "<h1>Goedenacht, welkom op de website!</h1>";
            }
            elseif (date('H') < '12') {
                echo "<h1>Goedemorgen, welkom op de website!</h1>";
            }
            elseif (date('H') < '18') {
                echo "<h1>Goedemiddag, welkom op de website!</h1>";
            }
            else {
                echo "<h1>Goedeavond, welkom op de website!</h1>";
            }
            ?>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="background">
                <h2>
                    Algemeen
                </h2>
                <p>
                     Een goede ICT’er is gedreven om te leren en is bereid om kennis te delen met anderen. Dat vinden ze<br>
                    bij het bedrijfsleven. Verder moet je wat willen bereiken, plezier hebben in wat je doet en goed in een<br>
                    team kunnen werken. Tijdens je studie aan de ICT-Academie krijg je hiermee te maken. Dat gebeurt<br>
                    zoveel mogelijk in projectvormen: leren werken en werkend leren in klein groepsverband, met<br>
                    opdrachten uit de praktijk. Teamwork dus. Belangrijk is verder de adviesraad, die bestaat uit<br>
                    vertegenwoordigers van vooraanstaande bedrijven uit de regio.
                </p>
            </div>
        </main>
    <footer>
        <?php
            include 'includes/footer.php';
        ?>
    </footer>
    </body>
</html>