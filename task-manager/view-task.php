<?php
$pageLink = "view-task.php";
$pageName = "View Task";
?>
<?php include( "./inc/default.php" );
?>
<?php include( "./inc/page-start.php" );
?>
<?php //Check whether the task_id is assigned
if ( isset( $_GET['task_id'] ) ) {
    //Delete if exists
    $task_id = $_GET['task_id'];
    $sql = "SELECT * FROM tbl_tasks WHERE task_id=$task_id";
    //Execute query
    $res = mysqli_query( $conn, $sql );
    if ( $res == true ) {
        $row = mysqli_fetch_assoc( $res );
        //Create individual var to save the data inserted
        $list_id = $row['list_id'];
        $task_name = $row['task_name'];
        $task_description = $row['task_description'];
        $task_priority = $row['task_priority'];
        $task_status = $row['task_status'];
        $task_submitDate = $row['task_submitDate'];
        $task_deadlineDate = $row['task_deadlineDate'];
        $task_assignedBy = $row['task_assignedBy'];
        $task_assignedTo = $row['task_assignedTo'];
    } else {
        echo "Error";
    }
}
$sql1 = "SELECT * FROM tbl_lists WHERE list_id=$list_id";
//execute query
$res1 = mysqli_query( $conn, $sql1 );
if ( $res1 == true ) {
    $row1 = mysqli_fetch_assoc( $res1 );
    $list_name = $row1['list_name'];
}
?>

<h2><?php echo $task_name;
?></h2>
<div class="buttons">
    <?php if ($task_status != 'Done') { ?>
    <a class="addTask-button button done-button" href="<?php echo URL; ?>done-task.php?task_id=<?php echo $task_id; ?>">Mark as Done</a>
    <?php }?>
    <?php if ($task_status != 'Working') { ?>
    <a class="addTask-button button working-button" href="<?php echo URL; ?>assign-task.php?task_id=<?php echo $task_id; ?>">Assign Task</a>
    <?php } ?>
    <a class="addTask-button button" href="<?php echo URL; ?>update-task.php?task_id=<?php echo $task_id; ?>">Update</a>
    <a class="delete-button addTask-button button" href="<?php echo URL; ?>delete-task.php?task_id=<?php echo $task_id; ?>">Delete</a>
</div>

<!-- View container start -->
<table class="taskList-table table view-task">
    <tr>
        <td class="tbl-item">
            <p>Task Name:</p>
        </td>
        <td>
            <p><?php echo $task_name;
?></p>
        </td>
    </tr>
    <tr>
        <td class="tbl-item">
            <p>List:</p>
        </td>
        <td>
            <p><?php echo $list_name;
?></p>
        </td>
    </tr>
    <tr>
        <td class="tbl-item">
            <p>Task Description:</p>
        </td>
        <td>
            <p><?php echo $task_description;
?></p>
        </td>
    </tr>
    <tr>
        <td class="tbl-item">
            <p>Priority:</p>
        </td>
        <td>
            <p><?php echo $task_priority;
?></p>
        </td>
    </tr>
    <tr>
        <td class="tbl-item">
            <p>Status:</p>
        </td>
        <td>
            <p><?php echo $task_status;
?></p>
        </td>
    </tr>
    <tr>
        <td class="tbl-item">
            <p>Task Submit Date:</p>
        </td>
        <td>
            <p><?php echo $task_submitDate;
?></p>
        </td>
    </tr>
    <tr>
        <td class="tbl-item">
            <p>Task Deadline:</p>
        </td>
        <td>
            <p><?php echo $task_deadlineDate;
?></p>
        </td>
    </tr>
    <tr>
        <td class="tbl-item">
            <p>Task Assigned by:</p>
        </td>
        <td>
            <p><?php $sqlAssignedBy = "SELECT * FROM tbl_users WHERE user_id=$task_assignedBy";
            //Execute query
            $resAssignedBy = mysqli_query( $conn, $sqlAssignedBy );
            if ( $resAssignedBy == true ) {
                $rowAssignedBy = mysqli_fetch_assoc( $resAssignedBy );
                //Create individual var to save the data inserted
                $user_nameAssignedBy = $rowAssignedBy['user_name'];
                $user_departmentAssignedBy = $rowAssignedBy['user_department'];
                echo $user_nameAssignedBy;
            }
            ?></p>
        </td>
    </tr>
    <tr>
        <td class="tbl-item">
            <p>Task Assigned to:</p>
        </td>
        <td>
            <p><?php $sqlAssignedTo = "SELECT * FROM tbl_users WHERE user_id=$task_assignedTo";
            //Execute query
            $resAssignedTo = mysqli_query( $conn, $sqlAssignedTo );
            if ( $resAssignedTo == true ) {
                $rowAssignedTo = mysqli_fetch_assoc( $resAssignedTo );
                //Create individual var to save the data inserted
                $user_nameAssignedTo = $rowAssignedTo['user_name'];
                $user_departmentAssignedTo = $rowAssignedTo['user_department'];
                echo $user_nameAssignedTo;
            }
            ?></p>
        </td>
    </tr>
</table>
<!-- View container end -->
<?php include( "./inc/page-end.php" );
?>
