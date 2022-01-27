<?php
$pageName = "Submit Update Task";
include( "./inc/default.php" );
/*Check if form is submitted*/
if ( isset( $_POST["submit"] ) ) {
    /*Get values from form and save them as variables*/
    $task_id = $_POST['task_id'];
    $list_id = $_POST['list_id'];
    $task_name = $_POST['task_name'];
    $task_description = $_POST['task_description'];
    $task_priority = $_POST['task_priority'];
    $task_status = $_POST['task_status'];
    $task_submitDate = $_POST['task_submitDate'];
    $task_deadlineDate = $_POST['task_deadlineDate'];
    $task_assignedBy = $_POST['task_assignedBy'];
    $task_assignedTo = $_POST['task_assignedTo'];
    /*Get the SQL QUERY ready to insert in database*/

    $sql = "UPDATE tbl_tasks SET
list_id = '$list_id',
task_name = '$task_name',
task_description = '$task_description',
task_priority = '$task_priority',
task_status = '$task_status',
task_submitDate = '$task_submitDate',
task_deadlineDate = '$task_deadlineDate',
task_assignedBy = '$task_assignedBy',
task_assignedTo = '$task_assignedTo'
WHERE task_id=$task_id";
    /*Execute the above query*/
    $res = mysqli_query( $conn, $sql );
    if ( $res == true ) {

        //Create a session var to display message
        $_SESSION['update'] = "Task Updated Successfully";

        header( 'location:'.URL );
    } else {

        //Create a session var to display message
        $_SESSION['update_fail'] = "Failed updating the task";

        header( 'location:'.URL.'update-task.php?task_id='.$task_id );
    }
}
?>
