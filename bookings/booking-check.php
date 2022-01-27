<?php include ('config.php'); ?>
<!-- PAGE START -->
<html lang="ro">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo STYLEPATH; ?>style.css">
    <title>Verifica rezervare</title>
</head>

<body>
    <div id="main">
        <div class="header-container">
            <div class="h1-container">
                <h1>Verifica rezervare</h1>
            </div>
        </div>
        <div class="check-booking-container">
            <form class="check-booking-form" action="submit_search.php" method="post" >
                <div class="input-container">
                    <input class="input-box" name="cod-rezervare" placeholder="Introduceti codul rezervarii" type="text" pattern="[0-9]{4,}" required />
                </div>

                <div class="two-columns">
                    <div class="first-column column">
                        <input class="button" name="submit-search" value="Verificati Rezervarea" type="submit" />
                    </div>
                    <div class="second-column column">
                        <a href="index.php" class="button">Inapoi Acasa</a>
                    </div>
                </div>
            </form>
        </div>
        <!-- CONTENT START -->

        <!--
        <div class="options-container">
            <ul class="options">
                <li><a href="./new-booking.php">REZERVA ACUM</a></li>
                <li><a href="./booking-check.php">VERIFICA REZERVARE</a></li>
            </ul>
        </div>
-->

        <!-- CONTENT END -->

    </div>
</body>

</html>
<!-- PAGE END -->
