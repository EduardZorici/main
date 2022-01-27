<?php
$pageName = "Submit Update User";
include( "./inc/default.php" );
//Check if form is submitted
if ( isset( $_POST["submit"] ) ) {
    //Get values from form and save them as variables
    $user_id = $_POST['user_id'];
    $user_name = $_POST['user_name'];
    $user_department = $_POST['user_department'];
    //Get the SQL QUERY ready to insert in database

    $sql = "UPDATE tbl_users SET
user_name = '$user_name',
user_department = '$user_department'
WHERE user_id=$user_id";
    //Execute the above query
    $res = mysqli_query( $conn, $sql );
    if ( $res == true ) {

        //Create a session var to display message
        $_SESSION['update'] = "User Updated Successfully";

        header( 'location:'.URL.'manage-users.php' );
    } else {

        //Create a session var to display message
        $_SESSION['update_fail'] = "Failed updating the user";

        header( 'location:'.URL.'update-user.php?user_id='.$user_id );
    }
}
?>
