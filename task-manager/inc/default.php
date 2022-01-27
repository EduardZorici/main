<?php
//START SESSION
session_start();

define( 'URL', 'http://taskmanager.eduardzorici.com/' );
define( 'STYLEPATH', URL.'style/' );
define( 'JSPATH', URL.'javascript/' );

//DB CONSTANTS
define( 'LOCALHOST', 'hosting2070064.online.pro' );
define( 'DB_USERNAME', '00438050_taskmanager' );
define( 'DB_PASSWORD', 'Crespo-99' );
define( 'DB_NAME', '00438050_taskmanager' );

//DB connect
$conn = mysqli_connect( LOCALHOST, DB_USERNAME, DB_PASSWORD ) or die( mysqli_error() );
$db_select = mysqli_select_db( $conn, DB_NAME ) or die ( mysqli_error() );
?>
