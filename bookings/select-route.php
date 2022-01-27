<?php include('config.php'); ?>
<!-- PAGE START -->
<html lang = "ro">
<head>
<meta charset = "utf-8">
<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
<link href = "https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel = "stylesheet">
<link rel = "stylesheet" href = "<?php echo STYLEPATH; ?>style.css">
<title>Selecteaza ruta</title>
</head>
<body>
<div id = "main">
<div class = "header-container">
<div class = "h1-container">
<h1>Selecteaza ruta</h1>
</div>
</div>
<div class = "check-booking-container">
<form class = "new-booking-form" action = "submit_route.php" method = "post">
<div class = "form-input-container">
<select class = "form-input-box" name = "nume_ruta" required>
<?php
//get lists from table
$sql_rute = "SELECT * FROM tbl_rute";
//execute query
$res_rute = mysqli_query( $conn, $sql_rute );
if ( $res_rute == true ) {
    //create var to count rows
    $count_rows_rute = mysqli_num_rows( $res_rute );
    //if there is data then display all data
    if ( $count_rows_rute >0 ) {
        while( $row_rute = mysqli_fetch_assoc( $res_rute ) ) {
            $id_ruta1 = $row_rute['id_ruta'];
            $nume_ruta1 = $row_rute['nume_ruta'];
            ?>
            <option value = "<?php echo $id_ruta1; ?>"><?php echo $nume_ruta1;
            ?></option>
            <?php
        }
    }
}
?>
</select>
</div>
<div class = "form-input-container">
<select class = "form-input-box" name = "id_discount" required>
<?php
//get lists from table
$sql_discounts = "SELECT * FROM tbl_discounts";
//execute query
$res_discounts = mysqli_query( $conn, $sql_discounts );
if ( $res_discounts == true ) {
    //create var to count rows
    $count_rows_discounts = mysqli_num_rows( $res_discounts );
    //if there is data then display all data
    if ( $count_rows_discounts >0 ) {
        while( $row_discounts = mysqli_fetch_assoc( $res_discounts ) ) {
            $id_discount1 = $row_discounts['id_discount'];
            $categorie_discount1 = $row_discounts['categorie_discount'];
            ?>
            <option value = "<?php echo $id_discount1; ?>"><?php echo $categorie_discount1;
            ?></option>
            <?php
        }
    }
}
?>
</select>
</div>
<div class = "two-columns">
<div class = "first-column column">
<input class = "button" name = "route_submit" value = "Urmatorul pas" type = "submit" />
</div>
<div class = "second-column column">
<a href = "index.php" class = "button">Inapoi Acasa</a>
</div>
</div>
</form>
</div>
<!-- CONTENT START -->
<!--
<div class = "options-container">
<ul class = "options">
<li><a href = "./new-booking.php">REZERVA ACUM</a></li>
<li><a href = "./booking-check.php">VERIFICA REZERVARE</a></li>
</ul>
</div>
-->
<!-- CONTENT END -->
</div>
</body>
</html>
<!-- PAGE END -->