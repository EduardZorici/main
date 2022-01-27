<?php
$pageName = "Add New Task";
?>
<?php include( "./inc/default.php" );
?>
<?php include( "./inc/page-start.php" );
?>
<!-- confirmation message for submitting the form - if add_fail exists then error, then unset the variable in the paragraph -->
<p><?php if ( isset( $_SESSION['add_fail'] ) ) {
    echo $_SESSION['add_fail'];
    unset( $_SESSION['add_fail'] );
}
?></p>
<form method="POST" action="submit-newtask.php">
    <table class="taskList-table table add-task">
        <tr>
            <td>Select List:</td>
            <td>
                <select name="list_id">
                    <?php
//get lists from table
$sql = "SELECT * FROM tbl_lists";
//execute query
$res = mysqli_query( $conn, $sql );
if ( $res == true ) {
    //create var to count rows
    $count_rows = mysqli_num_rows( $res );
    //if there is data then display all data else none as option
    if ( $count_rows >0 ) {
        while( $row = mysqli_fetch_assoc( $res ) ) {
            $list_id = $row['list_id'];
            $list_name = $row['list_name'];
            ?>
                    <option <?php if ( isset( $_GET["list_id"] ) ) {
                //Get values from form and save them as variables
                $list_id1 = $_GET['list_id'];
                if ( $list_id == $list_id1 ) {
                    echo "selected";
                }
            }
            ?> value="<?php echo $list_id; ?>"><?php echo $list_name;
            ?></option>
                    <?php
        }
    } else {
        ?>
                    <option value="0">No list</option>
                    <?php
    }
}
?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Task Name:</td>
            <td><input type="text" name="task_name" placeholder="Issue Name here" required /></td>
        </tr>
        <tr>
            <td>Task Description:</td>
            <td><textarea type="text" name="task_description" placeholder="Issue Description here" required></textarea></td>
        </tr>
        <tr>
            <td>Priority:</td>
            <td>
                <select name="task_priority">
                    <option value="Urgent">Urgent</option>
                    <option value="Medium">Medium</option>
                    <option value="Low" selected>Low</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Status:</td>
            <td>
                <select name="task_status">
                    <option <?php if ( isset( $_GET["task_status"] ) ) {
                //Get values from form and save them as variables
                $task_status = $_GET['task_status'];
                if ( $task_status == "Working" ) {
                    echo "selected";
                }
            }
            ?> value="Working">Working</option>
                    <option <?php if ( isset( $_GET["task_status"] ) ) {
                //Get values from form and save them as variables
                $task_status = $_GET['task_status'];
                if ( $task_status == "Not assigned" ) {
                    echo "selected";
                }
            }
            ?> value="Not assigned">Not assigned yet</option>
                    <option value="Done">Done</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Task Submit Date:</td>
            <td><input type="date" name="task_submitDate" value="<?php echo date("Y-m-d"); ?>" required /></td>
        </tr>
        <tr>
            <td>Task Deadline:</td>
            <td><input type="date" name="task_deadlineDate" value="<?php echo date("Y-m-d"); ?>" required /></td>
        </tr>
        <tr>
            <td>Assigned by:</td>
            <td>
                <select name="task_assignedBy">
                    <?php
//get lists from table
$sql1 = "SELECT * FROM tbl_users";
//execute query
$res1 = mysqli_query( $conn, $sql1 );
if ( $res1 == true ) {
    //create var to count rows
    $count_rows1 = mysqli_num_rows( $res1 );
    //if there is data then display all data else none as option
    if ( $count_rows1 >0 ) {
        while( $row1 = mysqli_fetch_assoc( $res1 ) ) {
            $task_assignedBy = $row1['user_id'];
            $user_name1 = $row1['user_name'];
            ?>
                    <option <?php if ( isset( $_GET["user_id"] ) ) {
                //Get values from form and save them as variables
                $user_id_submitted1 = $_GET['user_id'];
                if ( $task_assignedBy == $user_id_submitted1 ) {
                    echo "selected";
                }
            }
            ?> value="<?php echo $task_assignedBy; ?>"><?php echo $user_name1;
            ?></option>
                    <?php
        }
    }
} else {
    ?>
                    <option value="0">None</option>
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
$sql2 = "SELECT * FROM tbl_users";
//execute query
$res2 = mysqli_query( $conn, $sql2 );
if ( $res2 == true ) {
    //create var to count rows
    $count_rows2 = mysqli_num_rows( $res2 );
    //if there is data then display all data else none as option
    if ( $count_rows2 >0 ) {
        while( $row2 = mysqli_fetch_assoc( $res2 ) ) {
            $task_assignedTo = $row2['user_id'];
            $user_name2 = $row2['user_name'];
            ?>
                    <option <?php if ( isset( $_GET["user_id"] ) ) {
                //Get values from form and save them as variables
                $user_id_submitted2 = $_GET['user_id'];
                if ( $task_assignedTo == $user_id_submitted2 ) {
                    echo "selected";
                }
            }
            ?> value="<?php echo $task_assignedTo; ?>"><?php echo $user_name2;
            ?></option>
                    <?php
        }
    }
} else {
    ?>
                    <option value="0">None</option>
                    <?php
}
?>
                </select>
            </td>
        </tr>
    </table>
    <input class="submit" type="submit" name="submit" value="Save New Task" />
</form>
<!-- Add list form end -->
<?php include( "./inc/page-end.php" );
?>
