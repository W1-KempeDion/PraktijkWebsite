<?php
//$calculation = $_GET["questionOne"]+$_GET["questionTwo"]+$_GET["questionThree"]+$_GET["questionFour"]+$_GET["questionFive"]+$_GET["questionSix"]+$_GET["questionSeven"]+$_GET["questionEight"]+$_GET["questionNine"]+$_GET["questionTen"]+$_GET["questionEleven"]+$_GET["questionTwelve"]+$_GET["questionThirteen"]+$_GET["questionFourteen"]+$_GET["questionFifteen"];
$total = 0;

for($i=1;$i<15;$i++) {
    $total += $_GET["question$i"];
}
$result = round($total, $precision = 0);
if ($result >= 50) {
    echo "Jou score is ".$result."%, de ICT opleiding is iets voor jou!";
}
else {
    echo "Jou score is ".$result."%, de ICT opleiding is niet echt iets voor jou";
}