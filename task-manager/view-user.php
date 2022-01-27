<?php
$pageLink = "view-user.php";
$pageName = "View User";
?>
<?php include( "./inc/default.php" );
?>
<?php include( "./inc/page-start.php" );
?>
<?php //Check whether the task_id is assigned
if ( isset( $_GET['user_id'] ) ) {
    //Delete if exists
    $user_id = $_GET['user_id'];
    $sql = "SELECT * FROM tbl_users WHERE user_id=$user_id";
    //Execute query
    $res = mysqli_query( $conn, $sql );
    if ( $res == true ) {
        $row = mysqli_fetch_assoc( $res );
        //Create individual var to save the data inserted
        $user_name = $row['user_name'];
        $user_department = $row['user_department'];
    } else {
        echo "Error";
    }
}
?>
<!-- View container start -->
<h2><?php echo $user_name;
?></h2>
<h3><?php echo $user_department;
?></h3>
<br />
<div class="buttons">
    <a class="addTask-button button" href="<?php echo URL; ?>add-task.php?user_id=<?php echo $user_id; ?>">Add Task</a>
    <a class="addList-button button" href="<?php echo URL; ?>update-user.php?user_id=<?php echo $user_id; ?>">Update User</a>
    <a class="delete-button addUser-button button" href="<?php echo URL; ?>delete-user.php?user_id=<?php echo $user_id; ?>">Delete</a>
</div>
<br />
<table class="taskUser-table table">
    <tr>
        <th>No.</th>
        <th>Task name</th>
        <th>Priority</th>
        <th>Status</th>
        <th>Deadline</th>
        <th>Assigned By</th>
        <th>Assigned To</th>
        <th>Actions</th>
    </tr>
    <?php
$sql1 = "SELECT * FROM tbl_tasks WHERE task_assignedBy=$user_id OR task_assignedTo=$user_id ORDER BY task_deadlineDate DESC";
$res1 = mysqli_query( $conn, $sql1 );
if ( $res1 == true ) {
    $no = 1;
    $count_rows1 = mysqli_num_rows( $res1 );
    if ( $count_rows1 > 0 ) {
        //data exists in db
        while( $row1 = mysqli_fetch_assoc( $res1 ) ) {
            $task_id = $row1['task_id'];
            $task_name = $row1['task_name'];
            $task_priority = $row1['task_priority'];
            $task_status = $row1['task_status'];
            $task_deadlineDate = $row1['task_deadlineDate'];
            $task_assignedBy = $row1['task_assignedBy'];
            $task_assignedTo = $row1['task_assignedTo'];
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
        <td><?php echo $task_deadlineDate;
            ?></td>
        <td><?php $sqlAssignedBy = "SELECT * FROM tbl_users WHERE user_id=$task_assignedBy";
            //Execute query
            $resAssignedBy = mysqli_query( $conn, $sqlAssignedBy );
            if ( $resAssignedBy == true ) {
                $rowAssignedBy = mysqli_fetch_assoc( $resAssignedBy );
                //Create individual var to save the data inserted
                $user_nameAssignedBy = $rowAssignedBy['user_name'];
                $user_departmentAssignedBy = $rowAssignedBy['user_department'];
                echo $user_nameAssignedBy;
            }
            ?></td>
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

        <td class="actions-td"><?php if ($task_status != 'Done') { ?>
            <a class="done-button" href="<?php echo URL; ?>done-task.php?task_id=<?php echo $task_id; ?>"><span class="done-icon sprite-icon"></span><span class="action-button-text">Mark as done</span></a><?php } ?>
            <?php if ($task_status == 'Not assigned') { ?>
            <a class="working-button" href="<?php echo URL; ?>assign-task.php?task_id=<?php echo $task_id; ?>"><span class="assign-icon sprite-icon"></span><span class="action-button-text">Assign Task</span></a>
            <?php } else if ($task_status == 'Done') {?>
            <a class="working-button" href="<?php echo URL; ?>assign-task.php?task_id=<?php echo $task_id; ?>"><span class="assign-icon sprite-icon"></span><span class="action-button-text">Reassign Task</span></a>
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
        <td colspan="8">No Data in Database</td>
    </tr>
    <?php
    }
} else {
}
?>
</table>
<!-- View container end -->
<?php include( "./inc/page-end.php" );
?>
