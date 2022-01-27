<?php
$pageName = "Submit List";
include( "./inc/default.php" );
//Check if form is submitted
if ( isset( $_POST["submit"] ) ) {
    //Get values from form and save them as variables
    $list_name = $_POST['list_name'];
    $list_description = $_POST['list_description'];
    //Get the SQL QUERY ready to insert in database
    $sql = "INSERT INTO tbl_lists SET
list_name = '$list_name',
list_description = '$list_description'";
    //Execute the above query
    $res = mysqli_query( $conn, $sql );
    if ( $res == true ) {

        //Create a session var to display message
        $_SESSION['add'] = "List Added Successfully";

        header( 'location:'.URL.'manage-lists.php' );
    } else {

        //Create a session var to display message
        $_SESSION['add_fail'] = "Failed adding the list";

        header( 'location:'.URL.'add-list.php' );
    }
}
?>
