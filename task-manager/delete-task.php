<?php
$pageName = "Delete Task";
?>
<?php include( "./inc/default.php" );
?>
<?php

//Check whether the task_id is assigned
if ( isset( $_GET['task_id'] ) ) {
    //Delete if exists
    $task_id = $_GET['task_id'];
    $sql = "DELETE FROM tbl_tasks WHERE task_id=$task_id";
    //Execute query    
    $res = mysqli_query( $conn, $sql );
    if ($res==true) {
        $_SESSION['delete'] = "Task deleted!";
        //redirect
        header('location:'.URL);
    }
    
    else {
        $_SESSION['delete_fail'] = "Failed to delete!";
        //redirect
        header('location:'.URL);
    }
} else {
    //Redirect to the Manage tasks page
    header( 'location:'.URL.'manage-tasks.php' );

}

?>
