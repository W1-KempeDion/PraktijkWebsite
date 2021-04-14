<head>
    <title>
        Zelftest - Koning Willem 1 College
    </title>
    <meta carset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <link rel='stylesheet' href='../css/result.css'>
    <link rel="stylesheet" href="../css/default.css">
    <link rel='stylesheet' href='../css/result.css'>
    <script src="https://kit.fontawesome.com/c1698f882b.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <header>
        <?php
            include '../includes/header.php';
        ?>
    </header>
    <main>
        <?php
            $total = 0;

            for($i=1;$i<15;$i++) {
                $total += $_GET["question$i"];
            }

            $result = round($total, $precision = 0);

            echo "<h3>Gooie dag ".$_GET["name"]."</h3>";

            if ($result >= 50) {
                echo "Jou score is ".$result."%, de ICT opleiding is iets voor jou!";
                echo "<br><img src='../images/check.png' alt='thumb'id='check'>";
            }
            else {
                echo "Jou score is ".$result."%, de ICT opleiding is niet echt iets voor jou";
                echo "<br><img src='../images/thumb_down.png' alt='thumb'id='thumb'>";
            }
        echo "<p> Uw opmerking &ldquo;".$_GET["remarks"]."&rdquo; is verzonden naar ons op ".date("j F, Y, g:i a")."</p>";
        ?>
    </main>
    <footer>
        <?php
            include '../includes/footer.php';
        ?>
    </footer>
</body>