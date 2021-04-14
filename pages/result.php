<!DOCTYPE html>
<?php
/**
 * Author:  Daan van Meer, Daan van Maren en Dion Kempe
 * Date:    9-4-2020
 * Subject: result.php
 */
?>
<html>
    <head>
    <!--    Titel van de pagina-->
        <title>
            Result - Koning Willem 1 College
        </title>
    <!--    Meta's, Links naar css en scripts-->
        <meta carset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <link rel='stylesheet' href='../css/result.css'>
        <script src="https://kit.fontawesome.com/c1698f882b.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body id="achtergrond">
    <!--Header include-->
        <header>
            <?php
                include '../includes/header.php';
            ?>
        </header>
    <!--main stuk van de pagina-->
        <main>
            <?php
    //        variables
                $total = 0;

    //            forloop die de score uitrekent
                for($i=1;$i<15;$i++) {
                    $total += $_POST["question$i"];
                }

    //            afronden van de score
                $result = round($total, $precision = 0);

    //            welkom bericht
                echo "<h3>Goede dag ".$_POST["name"]."</h3>";

    //            if/else statment voor het uitvinden van een positive of negative score
                if ($result >= 50) {
                    echo "Jou score is ".$result."%, de ICT opleiding is iets voor jou!";
                    echo "<br>Meld je nu aan via ";
                    echo '<a href="https://www.kw1c.nl/opleiding/25604o10/software-developer-bol">KW1C</a>';
                    echo "<br><img src='../images/check.png' alt='thumb'id='check'>";
                }
                else {
                    echo "Jou score is ".$result."%, de ICT opleiding is niet echt iets voor jou";
                    echo "<br>Kijk anders verder op ";
                    echo '<a href="https://www.kw1c.nl/opleidingen">KW1C</a>';
                    echo "<br><img src='../images/thumb_down.png' alt='thumb'id='thumb'>";
                }

    //            Opmerking met datum en datum set
            date_default_timezone_set("Europe/Amsterdam");
            echo "<p> Uw opmerking &ldquo;".$_POST["remarks"]."&rdquo; is verzonden naar ons op ".date("j F, Y, g:i a")."</p>";
            ?>
        </main>
    <!--Include van de footer-->
        <footer>
            <?php
                include '../includes/footer.php';
            ?>
        </footer>
    </body>
</html>