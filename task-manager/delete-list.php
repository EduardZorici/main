<?php
$pageName = "Delete List";
?>
<?php include( "./inc/default.php" );
?>
<?php

//Check whether the list_id is assigned
if ( isset( $_GET['list_id'] ) ) {
    //Delete if exists
    $list_id = $_GET['list_id'];
    $sql = "DELETE FROM tbl_lists WHERE list_id=$list_id";
    //Execute query    
    $res = mysqli_query( $conn, $sql );
    if ($res==true) {
        $_SESSION['delete'] = "List deleted!";
        //redirect
        header('location:'.URL.'manage-lists.php');
    }
    
    else {
        $_SESSION['delete_fail'] = "Failed to delete!";
        //redirect
        header('location:'.URL.'manage-lists.php');
    }
} else {
    //Redirect to the Manage Lists page
    header( 'location:'.URL.'manage-lists.php' );

}

?>
