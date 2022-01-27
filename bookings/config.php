<?php
//----------------------------------
//MUST BE IN EVERY FILE THAT USES THE DATABASE
//START SESSION
session_start();
//PATH
define( 'URL', 'http://bookings.eduardzorici.com/' );
define( 'STYLEPATH', URL.'style/' );
define( 'JSPATH', URL.'javascript/' );
//DB CONSTANTS
define( 'LOCALHOST', 'hosting2070064.online.pro' );
define( 'DB_USERNAME', '00438050_modx_project1' );
define( 'DB_PASSWORD', 'Crespo-99' );
define( 'DB_NAME', '00438050_modx_project1' );
//DB connection
$conn = mysqli_connect( LOCALHOST, DB_USERNAME, DB_PASSWORD ) or die( mysqli_error() );
$db_select = mysqli_select_db( $conn, DB_NAME ) or die ( mysqli_error() );
//----------------------------------
?>