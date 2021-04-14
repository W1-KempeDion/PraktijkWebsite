<head>
    <title>
        Zelftest - Koning Willem 1 College
    </title>
    <meta carset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <link rel="stylesheet" href="../css/default.css">
    <script src="https://kit.fontawesome.com/c1698f882b.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<header>
<?php
    include '../includes/header.php';
    ?>
</header>
<main>
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
?>
</main>
<footer>
<?php
    include '../includes/footer.php';
?>
</footer>