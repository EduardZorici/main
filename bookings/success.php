<?php include('config.php'); ?>
<?php 
    $id_rezervare = $_SESSION['id_rezervare'];
?>
<!-- PAGE START -->
<html lang="ro">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo STYLEPATH; ?>style.css">
    <title>Succes</title>
</head>

<body>
    <div id="main">
        <div class="header-container">
            <div class="h1-container">
                <h1>Succes</h1>
                <div style="width:100%">
                    <p>Codul rezervarii dvs: <?php echo $id_rezervare;?></p>
                </div>
            </div>

        </div>
        <div class="check-booking-container">
            <img class="success-pic" src='images/check-mark.png' width="300" height="200" />
            <a href="index.php" class="button success-page-button">Inapoi Acasa</a>
        </div>

    </div>
</body>

</html>
<!-- PAGE END -->
