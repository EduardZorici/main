<?php include('config.php'); ?>
<?php
//Check if form is submitted
if ( isset( $_POST["submit"] ) ) {
    //Get values from form and save them as variables
    $nume_pasager = $_POST['nume_pasager'];
    $nume_ruta = $_POST['nume_ruta'];
    $pret_ruta = $_POST['pret_ruta'];
    $procent_relativ = $_POST['procent_discount'];
    $email_pasager = $_POST['email_pasager'];
    $data_plecare = $_POST['data_plecare'];
    $ora_cursa = $_POST['ora_cursa'];
    $pret_calatorie = $_POST['pret_calatorie'];
    //Get the SQL QUERY ready to insert in database
    $sql = "INSERT INTO tbl_rezervari SET
nume_pasager = '$nume_pasager',
email_pasager = '$email_pasager',
data_plecare = '$data_plecare',
ora_cursa = '$ora_cursa',
nume_ruta = '$nume_ruta',
pret_ruta = '$pret_calatorie',
procent_discount = '$procent_relativ'";
    //Execute the above query
    $res = mysqli_query( $conn, $sql );
    if ( $res == true ) {
        $sql1 = "SELECT * FROM tbl_rezervari WHERE nume_pasager = '$nume_pasager' ORDER BY id_rezervare DESC";
        $res1 = mysqli_query( $conn, $sql1 );
        if ( $res1 == true ) {
            $row1 = mysqli_fetch_assoc( $res1 );
            $id_rezervare = $row1['id_rezervare'];
            $subject = "Confirmare rezervare";
            $message = "Felicitari!" . "\n\n" . "Ati efectuat rezervarea cu codul " . $id_rezervare . " pe ruta " . $nume_ruta . ", in data de " . $data_plecare . ", la ora " . $ora_cursa . "." . "\n" . "Pretul intreg pentru aceasta ruta este de: " . $pret_ruta . " lei." . "\n" . "Pretul calatoriei dvs. este de " . $pret_calatorie . " lei. Discount-ul de care beneficiati este de " . $procent_relativ . "." . "\n" . "Va rugam ca la imbarcare sa prezentati codul rezervarii impreuna cu un act de identitate si, daca este cazul, acte doveditoare in cazul in care beneficiati de discount." . "\n\n" . "Date rezervare:" . "\n\n" . "Cod rezervare (pentru imbarcare): " . $id_rezervare . "\n" . "Nume pasager: " . $nume_pasager . "\n" . "Email: " . $email_pasager . "\n" . "Ruta: " . $nume_ruta . "\n" . "Data plecare: " . $data_plecare . ", ora: " . $ora_cursa . "\n" . "Pret final: " . $pret_calatorie . " lei" . "\n" . "Discount aplicat: " . $procent_relativ . "\n\n\n" . "Va multumim!";
            mail( $email_pasager, $subject, $message);
            $_SESSION['id_rezervare'] = $id_rezervare;
            header( 'location:'.URL.'success.php' );

        }

    }
}

?>
