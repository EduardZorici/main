<?php include( 'config.php' );
?>
<?php
//Check if form is submitted
if ( isset( $_POST["submit-search"] ) ) {
    //Get values from form and save them as variables
    $cod_introdus = $_POST['cod-rezervare'];
    //Get the SQL QUERY ready to insert in database

    $_SESSION['cod_introdus'] = $cod_introdus;
    header( 'location:'.URL.'display-booking.php' );

}
?>
