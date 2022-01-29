<?php
//----------------------------------
//MUST BE IN EVERY FILE THAT USES THE DATABASE
//START SESSION

session_start();

//PATH

define('URL', 'https://www.eduardzorici.com/persona/');
define('ASSETS', 'assets/');
define('CSSPATH', 'css/');
define('JSPATH', 'js/');
define('MAINJS', 'main.js');
define('STYLECSS', 'styles.css');
define('IMAGES', 'images/');
define('LOGO', 'logo.png');

$lang = 'en';
$language = 'RO';
$default_image = 'default_image.png';
$name = 'Eduard Zorici';
$office_email = 'office@eduardzorici.com';
$office_phone = '+40 732 615 882';
$office_phone_text = '+40732615882';
$office_postal_code = '400285';
$office_longitude = '23.6210033';
$office_latitude = '46.7713467';

//DB CONSTANTS

#define( 'LOCALHOST', '' );
#define( 'DB_USERNAME', '' );
#define( 'DB_PASSWORD', '' );
#define( 'DB_NAME', '' );

//DB connection

#$conn = mysqli_connect( LOCALHOST, DB_USERNAME, DB_PASSWORD ) or die( mysqli_error() );
#$db_select = mysqli_select_db( $conn, DB_NAME ) or die ( mysqli_error() );
//----------------------------------
