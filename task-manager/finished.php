<?php
$pageLink = "finished.php";
$pageName = "Finished Tasks";
?>
<?php include( "./inc/default.php" );
?>
<?php include( "./inc/page-start.php" );
?>
<!-- Tasks starts here -->
<div class="task-list">
    <!--    <a class="addTask-button" href="<?php echo URL; ?>add-task.php">Add Task</a>-->
    <?php //add task session success

if ( isset( $_SESSION['delete'] ) ) {
    echo $_SESSION['delete'];
    unset( $_SESSION['delete'] );
}

if ( isset( $_SESSION['delete_fail'] ) ) {
    echo $_SESSION['delete_fail'];
    unset( $_SESSION['delete_fail'] );
}
    
if ( isset( $_SESSION['update'] ) ) {
    echo $_SESSION['update'];
    unset( $_SESSION['update'] );
}
?>
    <table class="taskList-table table">
        <tr>
            <th>No.</th>
            <th>Task name</th>
            <th>Priority</th>
            <th>Status</th>
            <th>Assigned By</th>
            <th>Assigned To</th>
            <th>Actions</th>
        </tr>
        <?php
$sql = "SELECT * FROM tbl_tasks WHERE task_status='Done' ORDER BY task_deadlineDate DESC";
$res = mysqli_query( $conn, $sql );
if ( $res == true ) {

    $no = 1;

    $count_rows = mysqli_num_rows( $res );
    if ( $count_rows > 0 ) {
        //data exists in db
        while( $row = mysqli_fetch_assoc( $res ) ) {
            $task_id = $row['task_id'];
            $task_name = $row['task_name'];
            $task_priority = $row['task_priority'];
            $task_status = $row['task_status'];
            $task_assignedBy = $row['task_assignedBy'];
            $task_assignedTo = $row['task_assignedTo'];
            ?>
        <tr>
            <td><?php echo $no++;
            ?></td>
            <td><?php echo $task_name;
            ?></td>
            <td><?php echo $task_priority;
            ?></td>
            <td><?php echo $task_status;
            ?></td>
            <td>
                <?php $sqlAssignedBy = "SELECT * FROM tbl_users WHERE user_id=$task_assignedBy";
            //Execute query
            $resAssignedBy = mysqli_query( $conn, $sqlAssignedBy );
            if ( $resAssignedBy == true ) {
                $rowAssignedBy = mysqli_fetch_assoc( $resAssignedBy );
                //Create individual var to save the data inserted
                $user_nameAssignedBy = $rowAssignedBy['user_name'];
                $user_departmentAssignedBy = $rowAssignedBy['user_department'];
                echo $user_nameAssignedBy;
            }
            ?>
            </td>
            <td><?php $sqlAssignedTo = "SELECT * FROM tbl_users WHERE user_id=$task_assignedTo";
            //Execute query
            $resAssignedTo = mysqli_query( $conn, $sqlAssignedTo );
            if ( $resAssignedTo == true ) {
                $rowAssignedTo = mysqli_fetch_assoc( $resAssignedTo );
                //Create individual var to save the data inserted
                $user_nameAssignedTo = $rowAssignedTo['user_name'];
                $user_departmentAssignedTo = $rowAssignedTo['user_department'];
                echo $user_nameAssignedTo;
            }
            ?></td>
            <td class="actions-td">
                <?php if ($task_status != 'Working') { ?>
                <a class="working-button" href="<?php echo URL; ?>assign-task.php?task_id=<?php echo $task_id; ?>"><span class="assign-icon sprite-icon"></span><span class="action-button-text">Re-Assign Task</span></a>
                <?php } ?>
                <a class="working-button" href="<?php echo URL; ?>view-task.php?task_id=<?php echo $task_id; ?>"><span class="view-icon sprite-icon"></span><span class="action-button-text">View</span></a>
                <a class="working-button" href="<?php echo URL; ?>update-task.php?task_id=<?php echo $task_id; ?>"><span class="update-icon sprite-icon"></span><span class="action-button-text">Update</span></a>
                <a class="delete-button" href="<?php echo URL; ?>delete-task.php?task_id=<?php echo $task_id; ?>"><span class="delete-icon sprite-icon"></span><span class="action-button-text">Delete</span></a>
            </td>
        </tr>
        <?php
        }
    } else {
        //no data in db
        ?>
        <tr>
            <td colspan="7">No Data in Database</td>
        </tr>
        <?php
    }
} else {
}
?>
    </table>
</div>
<!-- Tasks ends here -->
<?php include( "./inc/page-end.php" );
?>
