<?php
$pageName = "Submit Update List";
include( "./inc/default.php" );
//Check if form is submitted
if ( isset( $_POST["submit"] ) ) {
    //Get values from form and save them as variables
    $list_id = $_POST['list_id'];
    $list_name = $_POST['list_name'];
    $list_description = $_POST['list_description'];
    //Get the SQL QUERY ready to insert in database

    $sql = "UPDATE tbl_lists SET
list_name = '$list_name',
list_description = '$list_description'
WHERE list_id=$list_id";
    //Execute the above query
    $res = mysqli_query( $conn, $sql );
    if ( $res == true ) {

        //Create a session var to display message
        $_SESSION['update'] = "List Updated Successfully";

        header( 'location:'.URL.'manage-lists.php' );
    } else {

        //Create a session var to display message
        $_SESSION['update_fail'] = "Failed updating the list";

        header( 'location:'.URL.'update-list.php?list_id='.$list_id );
    }
}
?>
