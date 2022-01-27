<?php
$pageName = "Submit User";
include( "./inc/default.php" );
//Check if form is submitted
if ( isset( $_POST["submit"] ) ) {
    //Get values from form and save them as variables
    $user_name = $_POST['user_name'];
    $user_department = $_POST['user_department'];
    //Get the SQL QUERY ready to insert in database
    $sql = "INSERT INTO tbl_users SET
user_name = '$user_name',
user_department = '$user_department'";
    //Execute the above query
    $res = mysqli_query( $conn, $sql );
    if ( $res == true ) {

        //Create a session var to display message
        $_SESSION['add'] = "User Added Successfully";

        header( 'location:'.URL.'manage-users.php' );
    } else {

        //Create a session var to display message
        $_SESSION['add_fail'] = "Failed adding the user";

        header( 'location:'.URL.'add-user.php' );
    }
}
?>
