<?php
$pageLink = "update-task.php";
$pageName = "Update Task";
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
    }
} else {
    $_SESSION['update_fail'] = "Failed to update!";
    //redirect
    header( 'location:'.URL );
}
?>
<!-- confirmation message for submitting the form - if update_fail exists then error, then unset the variable in the paragraph -->
<p>
    <?php
if ( isset( $_SESSION['update_fail'] ) ) {
    echo $_SESSION['update_fail'];
    unset( $_SESSION['update_fail'] );
}
?>
</p>
<!-- Update form start -->
<form method="POST" action="submit-updatetask.php">
    <input type="hidden" name="task_id" value="<?php echo $task_id; ?>" />
    <table class="taskList-table table add-task">
        <tr>
            <td>Select List:</td>
            <td>
                <select name="list_id">
                    <?php
//get lists from table
$sql1 = "SELECT * FROM tbl_lists";
//execute query
$res1 = mysqli_query( $conn, $sql1 );
if ( $res1 == true ) {
    //create var to count rows
    $count_rows1 = mysqli_num_rows( $res1 );
    //if there is data then display all data else none as option
    if ( $count_rows1 >0 ) {
        while( $row1 = mysqli_fetch_assoc( $res1 ) ) {
            $list_id1 = $row1['list_id'];
            $list_name1 = $row1['list_name'];
            ?>
                    <option <?php if ( $list_id == "$list_id1" ) {
                echo "selected";
            }
            ?> value="<?php echo $list_id1; ?>"><?php echo $list_name1;
            ?></option>
                    <?php
        }
    }
} else {
    ?>
                    <option <?php if ( $list_id == "0" ) {
        echo "selected";
    }
    ?> value="0">No list available</option>
                    <?php
}
?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Task Name:</td>
            <td><input type="text" name="task_name" required value="<?php echo $task_name; ?>" /></td>
        </tr>
        <tr>
            <td>Task Description:</td>
            <td><textarea type="text" name="task_description" required><?php echo $task_description;
?></textarea></td>
        </tr>
        <tr>
            <td>Priority:</td>
            <td>
                <select name="task_priority">
                    <option <?php if ( $task_priority == "Urgent" ) {
    echo "selected";
}
?> value="Urgent">Urgent</option>
                    <option <?php if ( $task_priority == "Medium" ) {
    echo "selected";
}
?> value="Medium">Medium</option>
                    <option <?php if ( $task_priority == "Low" ) {
    echo "selected";
}
?> value="Low">Low</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Status:</td>
            <td>
                <select name="task_status">
                    <option <?php if ( $task_status == "Done" ) {
    echo "selected";
}
?> value="Done">Done</option>
                    <option <?php if ( $task_status == "Working" ) {
    echo "selected";
}
?> value="Working">Working</option>
                    <option <?php if ( $task_status == "Not assigned" ) {
    echo "selected";
}
?> value="Not assigned">Not assigned</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Task Submit Date:</td>
            <td><input type="date" name="task_submitDate" required value="<?php echo $task_submitDate; ?>" /></td>
        </tr>
        <tr>
            <td>Task Deadline:</td>
            <td><input type="date" name="task_deadlineDate" required value="<?php echo $task_deadlineDate; ?>" /></td>
        </tr>
        <tr>
            <td>Assigned by:</td>
            <td>
                <select name="task_assignedBy">
                    <?php
//get lists from table
$sql2 = "SELECT * FROM tbl_users";
//execute query
$res2 = mysqli_query( $conn, $sql2 );
if ( $res2 == true ) {
    //create var to count rows
    $count_rows2 = mysqli_num_rows( $res2 );
    //if there is data then display all data else none as option
    if ( $count_rows2 >0 ) {
        while( $row2 = mysqli_fetch_assoc( $res2 ) ) {
            $user_id2 = $row2['user_id'];
            $user_name2 = $row2['user_name'];
            ?>
                    <option <?php if ( $task_assignedBy == $user_id2 ) {
                echo "selected";
            }
            ?> value="<?php echo $user_id2; ?>"><?php echo $user_name2;
            ?></option>
                    <?php
        }
    }
} else {
    ?>
                    <option <?php if ( $task_assignedBy == "0" ) {
        echo "selected";
    }
    ?> value="0">Nobody</option>
                    <?php
}
?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Assigned to:</td>
            <td>
                <select name="task_assignedTo">
                    <?php
//get lists from table
$sql3 = "SELECT * FROM tbl_users";
//execute query
$res3 = mysqli_query( $conn, $sql3 );
if ( $res3 == true ) {
    //create var to count rows
    $count_rows3 = mysqli_num_rows( $res3 );
    //if there is data then display all data else none as option
    if ( $count_rows3 >0 ) {
        while( $row3 = mysqli_fetch_assoc( $res3 ) ) {
            $user_id3 = $row3['user_id'];
            $user_name3 = $row3['user_name'];
            ?>
                    <option <?php if ( $task_assignedTo == $user_id3 ) {
                echo "selected";
            }
            ?> value="<?php echo $user_id3; ?>"><?php echo $user_name3;
            ?></option>
                    <?php
        }
    }
} else {
    ?>
                    <option <?php if ( $task_assignedTo == "0" ) {
        echo "selected";
    }
    ?> value="0">Nobody</option>
                    <?php
}
?>
                </select>
            </td>
        </tr>
    </table>
    <input class="submit" type="submit" name="submit" value="Save Updated Task" />
</form>
<!-- Update form end -->
<?php include( "./inc/page-end.php" );
?>
