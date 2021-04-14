<!Doctype html>
<html>
<head>
    <title>
        Zelftest - Koning Willem 1 College
    </title>
    <meta carset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/form.css">
    <script src="https://kit.fontawesome.com/c1698f882b.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <header>
        <?php
        // laad de header.php in deze pagina
        include "../includes/header.php";
        ?>
    </header>
    <!-- Welkoms tekst voor de zelftest -->
    <main>
        <p id="welkom">
            Welkom bij de zelftest.<br>
            Bij deze test kun je er achter komen of de ICT acedemie wel iets voor jouw is.
            Vul je vragen zo goed en eerlijk mogelijk in voor het beste resultaat.
        </p>
        <br>
        <!-- Het opmaken van een form -->
        <form method="get" action="result.php">
            <p>
                Voor en achternaam
                <input name="name" value="" type="text" required>
                <br>Geboortedatum
                <input name="data" value="" type="date" required>
            </p>
            <!--de titel van een vraag -->
            <p>
                <label>1. Reden van inschrijving?</label>
            <ul>
                <!-- antwoorden voor de bovenstaande vraag -->
                <li>
                    <input type="radio" name="question1" value=6.66 required> Ik vind het onderwerp interessant
                </li>
                <li>
                    <input type="radio" name="question1" value=3.33 required> Ik vind gamen leuk
                </li>
                <li>
                    <input type="radio" name="question1" value=0 required> Ik moest iets kiezen
                </li>
            </ul>
            </p>
            <!--de titel van een vraag -->
            <p>
                <label>2. Eerdere ervaring?</label>
            <ul>
                <!-- antwoorden voor de bovenstaande vraag -->
                <li>
                    <input type="radio" name="question2" value=6.66 required> Ja
                </li>
                <li>
                    <input type="radio" name="question2" value=0 required> Nee
                </li>
            </ul>
            </p>
            <!--de titel van een vraag -->
            <p>
                <label>3. Kan je goed in een groepsverband werken?</label>
            <ul>
                <!-- antwoorden voor de bovenstaande vraag -->
                <li>
                    <input type="radio" name="question3" value=6.66 required> Ja
                </li>
                <li>
                    <input type="radio" name="question3" value=0 required> Nee
                </li>
            </ul>
            </p>
            <!--de titel van een vraag -->
            <p>
                <label>4. Ken je mensen die deze opleiding volgen?</label>
            <ul>
                <!-- antwoorden voor de bovenstaande vraag -->
                <li>
                    <input type="radio" name="question4" value=6.66 required> Ja
                </li>
                <li>
                    <input type="radio" name="question4" value=0 required> Nee
                </li>
            </ul>
            </p>
            <!--de titel van een vraag -->
            <p>
                <label>5. Wat ben je van plan te worden?</label>
            <ul>
                <!-- antwoorden voor de bovenstaande vraag -->
                <li>
                    <input type="radio" name="question5" value=6.66 required> Game designer
                </li>
                <li>
                    <input type="radio" name="question5" value=6.66 required> Front end
                </li>
                <li>
                    <input type="radio" name="question5" value=6.66> Back end
                </li>
            </ul>
            </p>
            <!--de titel van een vraag -->
            <p>
                <label>6. Ben je wel eens op een opendag geweest?</label>
            <ul>
                <!-- antwoorden voor de bovenstaande vraag -->
                <li>
                    <input type="radio" name="question6" value=6.66 required> Ja
                </li>
                <li>
                    <input type="radio" name="question6" value=0 required> Nee
                </li>
            </ul>
            </p>
            <!--de titel van een vraag -->
            <p>
                <label>7. Heb je al iets gedaan rondom dit onderwerp?</label>
            <ul>
                <!-- antwoorden voor de bovenstaande vraag -->
                <li>
                    <input type="radio" name="question7" value=6.66 required> Ja
                </li>
                <li>
                    <input type="radio" name="question7" value=0 required> Nee
                </li>
            </ul>
            </p>
            <!--de titel van een vraag -->
            <p>
                <label>8. Verwacht je een hacker hier mee te worden?</label>
            <ul>
                <!-- antwoorden voor de bovenstaande vraag -->
                <li>
                    <input type="radio" name="question8" value=6.66 required> Ja
                </li>
                <li>
                    <input type="radio" name="question8" value=0 required> Nee
                </li>
            </ul>
            </p>
            <!--de titel van een vraag -->
            <p>
                <label>9. Kan je vragen stellen aan anderen?</label>
            <ul>
                <!-- antwoorden voor de bovenstaande vraag -->
                <li>
                    <input type="radio" name="question9" value=6.66 required> Ja
                </li>
                <li>
                    <input type="radio" name="question9" value=0 required> Nee
                </li>
            </ul>
            </p>
            <!--de titel van een vraag -->
            <p>
                <label>10. Wat doe je met computer problemen?</label>
            <ul>
                <!-- antwoorden voor de bovenstaande vraag -->
                <li>
                    <input type="radio" name="question10" value=6.66 required> Uitzoeken wat het probleem is
                </li>
                <li>
                    <input type="radio" name="question10" value=3.33 required> Start de laptop/computer opnieuw op
                </li>
                <li>
                    <input type="radio" name="question10" value=0 required> Laat hem repareren
                </li>
            </ul>
            </p>
            <!--de titel van een vraag -->
            <p>
                <label>11. Hoe vaak zit je achter je computer?</label>
            <ul>
                <!-- antwoorden voor de bovenstaande vraag -->
                <li>
                    <input type="radio" name="question11" value=0 required> 0-4 uur
                </li>
                <li>
                    <input type="radio" name="question11" value=3.33 required> 4-8 uur
                </li>
                <li>
                    <input type="radio" name="question11" value=6.66 required> 8 uur of langer
                </li>
            </ul>
            </p>
            <!--de titel van een vraag -->
            <p>
                <label>12. Kan je goed omgaan met excel?</label>
            <ul>
                <!-- antwoorden voor de bovenstaande vraag -->
                <li>
                    <input type="radio" name="question12" value=6.66 required> Ja
                </li>
                <li>
                    <input type="radio" name="question12" value=0 required> Nee
                </li>
            </ul>
            </p>
            <!--de titel van een vraag -->
            <p>
                <label>13. Kan je goed ontwerpen?</label>
            <ul>
                <!-- antwoorden voor de bovenstaande vraag -->
                <li>
                    <input type="radio" name="question13" value=6.66 required> Ja
                </li>
                <li>
                    <input type="radio" name="question13" value=0 required> Nee
                </li>
            </ul>
            </p>
            <!--de titel van een vraag -->
            <p>
                <label>14. Kan je leren van je fouten?</label>
            <ul>
                <!-- antwoorden voor de bovenstaande vraag -->
                <li>
                    <input type="radio" name="question14" value=6.66 required> Ja
                </li>
                <li>
                    <input type="radio" name="question14" value=0 required> Nee
                </li>
            </ul>
            </p>
            <!--de titel van een vraag -->
            <p>
                <label>15. Wat doe je als iemand kritiek geeft op je werk? </label>
            <ul>
                <!-- antwoorden voor de bovenstaande vraag -->
                <li>
                    <input type="radio" name="question15" value=0 required> Word boos
                </li>
                <li>
                    <input type="radio" name="question15" value=3.33 required> Negeert
                </li>
                <li>
                    <input type="radio" name="question15" value=6.66 required> Probeert het de volgende keer beter
                </li>
            </ul>
            </p>
            <!--een plek waar opmerkingen kunnen worden ingezet -->
            <p>
                <label>Opmerkingen<br> </label>
                <textarea name="remarks"></textarea>
            </p>
            <!-- de verzend knop -->
            <p>
                <input type="submit" name="send" value="verzend">
            </p>
        </form>
        <br>
        <br>
        <br>
    </main>
    <!-- laad de footer.php pagina in -->
    <footer>
        <?php
        include "../includes/footer.php";
        ?>
    </footer>
</body>
</html>
