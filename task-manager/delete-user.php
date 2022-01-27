<?php
$pageName = "Delete User";
?>
<?php include( "./inc/default.php" );
?>
<?php

//Check whether the user_id is assigned
if ( isset( $_GET['user_id'] ) ) {
    //Delete if exists
    $user_id = $_GET['user_id'];
    $sql = "DELETE FROM tbl_users WHERE user_id=$user_id";
    //Execute query    
    $res = mysqli_query( $conn, $sql );
    if ($res==true) {
        $_SESSION['delete'] = "User deleted!";
        //redirect
        header('location:'.URL.'manage-users.php');
    }
    
    else {
        $_SESSION['delete_fail'] = "Failed to delete!";
        //redirect
        header('location:'.URL.'manage-users.php');
    }
} else {
    //Redirect to the Manage users page
    header( 'location:'.URL.'manage-users.php' );

}

?>
