<form method="get" action="result.php">
    <p>
        Voor en achternaam
        <input name="name" value="" type="text">
        <br>Geboortedatum
        <input name="data" value="" type="date">
    </p>
    <p>
        <label>1. Reden van inschrijving?</label>
    <ul>
        <li>
            <input type="radio" name="question1" value=6.66> Ik vind het onderwerp interessant
        </li>
        <li>
            <input type="radio" name="question1" value=3.33> Ik vind gamen leuk
        </li>
        <li>
            <input type="radio" name="question1" value=0> Ik moest iets kiezen
        </li>
    </ul>
    </p>
    <p>
        <label>2. Eerdere ervaring?</label>
    <ul>
        <li>
            <input type="radio" name="question2" value=6.66> Ja
        </li>
        <li>
            <input type="radio" name="question2" value=0> Nee
        </li>
    </ul>
    </p>
    <p>
        <label>3. Kan je goed in een groepsverband werken?</label>
    <ul>
        <li>
            <input type="radio" name="question3" value=6.66> Ja
        </li>
        <li>
            <input type="radio" name="question3" value=0> Nee
        </li>
    </ul>
    </p>
    <p>
        <label>4. Ken je mensen die deze opleiding volgen?</label>
    <ul>
        <li>
            <input type="radio" name="question4" value=6.66> Ja
        </li>
        <li>
            <input type="radio" name="question4" value=0> Nee
        </li>
    </ul>
    </p>
    <p>
        <label>5. Wat ben je van plan te worden?</label>
    <ul>
        <li>
            <input type="radio" name="question5" value=6.66> Game designer
        </li>
        <li>
            <input type="radio" name="question5" value=6.66> Front end
        </li>
        <li>
            <input type="radio" name="question5" value=6.66> Back end
        </li>
    </ul>
    </p>
    <p>
        <label>6. Ben je wel eens op een opendag geweest?</label>
    <ul>
        <li>
            <input type="radio" name="question6" value=6.66> Ja
        </li>
        <li>
            <input type="radio" name="question6" value=0> Nee
        </li>
    </ul>
    </p>
    <p>
        <label>7. Heb je al iets gedaan rondom dit onderwerp?</label>
    <ul>
        <li>
            <input type="radio" name="question7" value=6.66> Ja
        </li>
        <li>
            <input type="radio" name="question7" value=0> Nee
        </li>
    </ul>
    </p>
    <p>
        <label>8. Verwacht je een hacker hier mee te worden?</label>
    <ul>
        <li>
            <input type="radio" name="question8" value=6.66> Ja
        </li>
        <li>
            <input type="radio" name="question8" value=0> Nee
        </li>
    </ul>
    </p>
    <p>
        <label>9. Kan je vragen stellen aan anderen?</label>
    <ul>
        <li>
            <input type="radio" name="question9" value=6.66> Ja
        </li>
        <li>
            <input type="radio" name="question9" value=0> Nee
        </li>
    </ul>
    </p>
    <p>
        <label>10. Wat doe je met computer problemen?</label>
    <ul>
        <li>
            <input type="radio" name="question10" value=6.66> Uitzoeken wat het probleem is
        </li>
        <li>
            <input type="radio" name="question10" value=3.33> Start de laptop/computer opnieuw op
        </li>
        <li>
            <input type="radio" name="question10" value=0> Laat hem repareren
        </li>
    </ul>
    </p>
    <p>
        <label>11. Hoe vaak zit je achter je computer?</label>
    <ul>
        <li>
            <input type="radio" name="question11" value=0> 0-4 uur
        </li>
        <li>
            <input type="radio" name="question11" value=3.33> 4-8 uur
        </li>
        <li>
            <input type="radio" name="question11" value=6.66> 8 uur of langer
        </li>
    </ul>
    </p>
    <p>
        <label>12. Kan je goed omgaan met excel?</label>
    <ul>
        <li>
            <input type="radio" name="question12" value=6.66> Ja
        </li>
        <li>
            <input type="radio" name="question12" value=0> Nee
        </li>
    </ul>
    </p>
    <p>
        <label>13. Kan je goed ontwerpen?</label>
    <ul>
        <li>
            <input type="radio" name="question13" value=6.66> Ja
        </li>
        <li>
            <input type="radio" name="question13" value=0> Nee
        </li>
    </ul>
    </p>
    <p>
        <label>14. Kan je leren van je fouten?</label>
    <ul>
        <li>
            <input type="radio" name="question14" value=6.66> Ja
        </li>
        <li>
            <input type="radio" name="question14" value=0> Nee
        </li>
    </ul>
    <p>
        <label>15. Wat doe je als iemand kritiek geeft op je werk? </label>
    <ul>
        <li>
            <input type="radio" name="question15" value=0> Word boos
        </li>
        <li>
            <input type="radio" name="question15" value=3.33> Negeert
        </li>
        <li>
            <input type="radio" name="question15" value=6.66> Probeert het de volgende keer beter
        </li>
    </ul>
    </p>
    <p>
        <label>Opmerkingen<br> </label>
        <textarea name="remarks"></textarea>
    </p>
    <p>
        <input type="submit" name="send" value="verzend">
    </p>
</form>
<?php
include "include"
?>
