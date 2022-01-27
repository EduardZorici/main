<?php include('config.php'); ?>
<?php 
    $id_ruta = $_SESSION['ruta'];
    $id_discount = $_SESSION['discount'];
$sql_ruta = "SELECT * FROM tbl_rute WHERE id_ruta = $id_ruta";
$res_ruta = mysqli_query( $conn, $sql_ruta);
if ($res_ruta == true) {
    $row_ruta = mysqli_fetch_assoc( $res_ruta ) ;
    $nume_ruta = $row_ruta['nume_ruta'];
    $pret_ruta = $row_ruta['pret_ruta'];
}
$sql_discount = "SELECT * FROM tbl_discounts WHERE id_discount = $id_discount";
$res_discount = mysqli_query( $conn, $sql_discount);
if ($res_discount == true) {
    $row_discount = mysqli_fetch_assoc( $res_discount ) ;
    $categorie_discount = $row_discount['categorie_discount'];
    $procent_discount = $row_discount['procent_discount'];
    $procent_relativ = $row_discount['procent_relativ'];
}
$pret_final = $pret_ruta - ($pret_ruta * $procent_discount);
//----------------------------------
?>
<!-- PAGE START -->
<html lang = "ro">
<head>
<meta charset = "utf-8">
<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
<link href = "https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel = "stylesheet">
<link rel = "stylesheet" href = "<?php echo STYLEPATH;?>style.css">
<title>Rezervare noua</title>
</head>
<body>
<div id = "main">
<div class = "header-container">
<div class = "h1-container">
<h1>Rezervare noua</h1>
<p><?php if ( isset( $_SESSION['add_fail'] ) ) {
    echo $_SESSION['add_fail'];
    unset( $_SESSION['add_fail'] );
}
?></p>
    
<p>Calatoriti pe ruta <?php echo $nume_ruta; ?></p>
</div>
</div>
<div class = "new-booking-container">
<form class = "new-booking-form" action = "submit_booking.php" method = "post">
<div class = "two-columns">
<div class = "first-column column">
<div class = "form-input-container">
<input class = "form-input-box" name = "nume_pasager" placeholder = "NUME, PRENUME PASAGER" type = "text" required />
</div>
<div class = "form-input-container">
<input class = "form-input-box" name = "email_pasager" placeholder = "ADRESA DE EMAIL" type = "email" required />
</div>
</div>
<div class = "second-column column">

<div class = "form-input-container">
<select class = "form-input-box" name = "ora_cursa" required>
<?php
$sql_ora = "SELECT * FROM tbl_curse WHERE id_ruta = $id_ruta";
//execute query
$res_ora = mysqli_query( $conn, $sql_ora );
if ( $res_ora == true ) {
    //create var to count rows
    $count_rows_ora = mysqli_num_rows( $res_ora );
    //if there is data then display all data else none as option
    if ( $count_rows_ora >0 ) {
        while( $row_ora = mysqli_fetch_assoc( $res_ora ) ) {
            $id_cursa1 = $row_ora['id_cursa'];
            $ora_cursa1 = $row_ora['ora_cursa'];
            ?>
                    <option value="<?php echo $ora_cursa1; ?>"><?php echo $ora_cursa1;
            ?></option>
                    <?php
        }
    } }?>
</select>
</div>
<div class = "form-input-container">
<input class = "form-input-box" name = "data_plecare" placeholder = "DATA" type = "date" required />
<script src = "javascript/script-data.js"></script>
</div>
</div>
</div>
<div class = "price-container">
    <h2>Pretul intreg pentru aceasta ruta este de <strong><?php echo $pret_ruta;?></strong> lei.<br />Beneficiati de <strong><?php echo $procent_relativ; ?></strong> reducere.</h2>
<h2>PRET CALATORIE: <span id = "pret-final"><?php echo $pret_final;?> lei</span></h2>
<input type = hidden value = "<?php echo $pret_final;?>" name = "pret_calatorie" />
<input type = hidden value = "<?php echo $pret_ruta;?>" name = "pret_ruta" />
<input type = hidden value = "<?php echo $nume_ruta;?>" name = "nume_ruta" />
<input type = hidden value = "<?php echo $procent_relativ;?>" name = "procent_discount" />
</div>
<div class = "two-columns">
<div class = "first-column column">
<input class = "button" name = "submit" value = "Plasati Rezervarea" type = "submit" />
</div>
<div class = "second-column column">
<a href = "index.php" class = "button">Inapoi Acasa</a>
</div>
</div>
</form>
</div>
</div>
</body>
</html>
<!-- PAGE END -->

