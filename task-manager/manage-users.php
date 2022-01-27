<?php
$pageName = "Users Manager";
?>
<?php include( "./inc/default.php" );
?>
<?php include( "./inc/page-start.php" );
?>
<div>
    <a class="addUser-button button" href="<?php echo URL; ?>add-user.php">Add User</a>
    <!-- confirmation message for submitting the form - if add exists then confirm that the value had been successfully added, then unset the variable in the paragraph -->
    <p><?php
//add user session success
if ( isset( $_SESSION['add'] ) ) {
    echo $_SESSION['add'];
    unset( $_SESSION['add'] );
}
//delete user session success
if ( isset( $_SESSION['delete'] ) ) {
    echo $_SESSION['delete'];
    unset( $_SESSION['delete'] );
}
//delete user session fail
if ( isset( $_SESSION['delete_fail'] ) ) {
    echo $_SESSION['delete_fail'];
    unset( $_SESSION['delete_fail'] );
}
//update user session success
if ( isset( $_SESSION['update'] ) ) {
    echo $_SESSION['update'];
    unset( $_SESSION['update'] );
}
?>
    </p>
    <table class="user-table table">
        <tr>
            <th>No.</th>
            <th>User Name</th>
            <th>User Department</th>
            <th>Actions</th>
        </tr>
        <?php
$sql = "SELECT * FROM tbl_users";
$res = mysqli_query( $conn, $sql );
if ( $res == true ) {
    //count rows in db
    $count_rows = mysqli_num_rows( $res );
    //create a variable as a counting criteria
    $no = 1;
    //check whether is data in db or not
    if ( $count_rows>0 ) {
        //if yes then display in table rows/data fields
        while( $row = mysqli_fetch_assoc( $res ) ) {
            //get data from db and store in variable as arrays
            $user_id = $row['user_id'];
            $user_name = $row['user_name'];
            $user_department = $row['user_department'];
            ?>

        <tr>
            <td><?php echo $no++;
            ?></td>
            <td><?php echo $user_name;
            ?></td>
            <td><?php echo $user_department;
            ?></td>
            <td class="actions-td"><a class="working-button" href="<?php echo URL; ?>view-user.php?user_id=<?php echo $user_id; ?>"><span class="view-icon sprite-icon"></span><span class="action-button-text">View</span></a>
                <a class="working-button" href="<?php echo URL; ?>update-user.php?user_id=<?php echo $user_id; ?>"><span class="update-icon sprite-icon"></span><span class="action-button-text">Update</span></a>
                <a class="delete-button" href="<?php echo URL; ?>delete-user.php?user_id=<?php echo $user_id; ?>"><span class="delete-icon sprite-icon"></span><span class="action-button-text">Delete</span></a>
            </td>
        </tr>
        <?php
        }
    } else {
        //if not then show message
        ?>
        <tr>
            <td colspan="3">No user added yet.</td>
        </tr>
        <?php
    }
}
?>
    </table>
</div>
<?php include( "./inc/page-end.php" );
?>
