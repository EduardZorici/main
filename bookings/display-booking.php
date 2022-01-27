<?php include ( 'config.php' );
$cod_introdus = $_SESSION['cod_introdus'];
?>
<!-- PAGE START -->
<html lang="ro">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo STYLEPATH; ?>style.css">
    <title>Rezervarea ta</title>
</head>

<body>
    <div id="main">
        <div class="header-container">
            <div class="h1-container">
                <h1>Rezervarea pentru codul <strong><?php echo $cod_introdus;
?></strong></h1>
            </div>
        </div>
        <div class="new-booking-container">
            <table class="booking-display">
                <tr>
                    <th>Nume Pasager</th>
                    <th>Ruta</th>
                    <th>Data plecarii</th>
                    <th>Ora</th>
                    <th>Tarif</th>
                </tr>
                <?php
$sql = "SELECT * FROM tbl_rezervari WHERE id_rezervare = $cod_introdus";
$res = mysqli_query( $conn, $sql );
if ( $res == true ) {
    $count_rows = mysqli_num_rows( $res );
    if ( $count_rows > 0 ) {
        while ( $row = mysqli_fetch_assoc( $res ) ) {
            $nume_ruta = $row['nume_ruta'];
            $ora_cursa = $row['ora_cursa'];
            $pret_calatorie = $row['pret_ruta'];
            $procent_discount = $row['procent_discount'];
            $data_plecare = $row['data_plecare'];
            $nume_pasager = $row['nume_pasager'];
            $email_pasager = $row['email_pasager'];
            ?>
                <tr>
                    <td><?php echo $nume_pasager;
            ?></td>
                    <td><?php echo $nume_ruta;
            ?></td>
                    <td><?php echo $data_plecare;
            ?></td>
                    <td><?php echo $ora_cursa;
            ?></td>
                    <td><?php echo $pret_calatorie . " lei";
            ?></td>
                </tr>
                <?php

        }
    } else {
        //no data in db
        ?>
                <tr>
                    <td colspan="5">Nici o rezervare pentru acest cod.</td>
                </tr>
                <?php
    }
}
?>

            </table>

            <div class="">
                <a href="index.php" class="button">Inapoi Acasa</a>
            </div>
        </div>
    </div>
</body>

</html>
<!-- PAGE END -->
