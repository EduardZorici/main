<?php
$pageName = "Mark Task as Working";
?>
<?php include( "./inc/default.php" );
?>
<?php
//Check whether the task_id is assigned
if ( isset( $_GET['task_id'] ) ) {
    //Delete if exists
    $task_id = $_GET['task_id'];
    $sql = "UPDATE tbl_tasks SET task_status = 'Working' WHERE task_id=$task_id AND NOT task_status='Working'";
    //Execute query
    $res = mysqli_query( $conn, $sql );
    if ( $res == true ) {
        $_SESSION['done'] = "Task marked as Working!";
        //redirect
        header( 'location:'.URL );
    } else {
        $_SESSION['done_fail'] = "Failed to assign the task!";
        //redirect
        header( 'location:'.URL );
    }
} else {
    //Redirect to the Manage tasks page
    header( 'location:'.URL );
}
?>
