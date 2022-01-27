<?php include ('config.php');?>

<!-- PAGE START -->

<html lang="ro">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo STYLEPATH; ?>style.css">
    <title>Acasa</title>
</head>

<body>
    <div id="main">
        <div class="header-container">
            <div class="h1-container">
                <h1>EXPERTRANS</h1>
                <h3>PLANIFICĂ O CĂLĂTORIE</h3>
            </div>
            <div class="menu-container">
                <ul class="menu">
                    <li><a href="./gallery.php">GALERIE</a></li>
                    <li><a href="./about-us.php">DESPRE NOI</a></li>
                </ul>
            </div>
        </div>
        <!-- CONTENT START -->

        <div class="options-container">
            <ul class="options">
                <li><a href="./select-route.php">REZERVA ACUM</a></li>
                <li><a href="./booking-check.php">VERIFICA REZERVARE</a></li>
            </ul>
        </div>

        <!-- CONTENT END -->

    </div>
</body>

</html>
<!-- PAGE END -->
