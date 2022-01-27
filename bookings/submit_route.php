<?php include('config.php'); ?>
<?php 
//    $id_ruta = $_SESSION['ruta'];
//    $id_discount = $_SESSION['discount'];
if ( isset( $_POST["route_submit"] ) ) {
    //Get values from form and save them as variables
    $id_ruta = $_POST['nume_ruta'];
    $id_discount = $_POST['id_discount'];
    //Create a session var to display message
    $_SESSION['ruta'] = $id_ruta;
    $_SESSION['discount'] = $id_discount;
    header( 'location:'.URL.'new-booking.php' );
}