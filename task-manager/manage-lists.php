<?php
$pageName = "List Manager";
?>
<?php include( "./inc/default.php" );
?>
<?php include( "./inc/page-start.php" );
?>
<div>
    <a class="addList-button button" href="<?php echo URL; ?>add-list.php">Add List</a>
    <!-- confirmation message for submitting the form - if add exists then confirm that the value had been successfully added, then unset the variable in the paragraph -->
    <p><?php
//add list session success
if ( isset( $_SESSION['add'] ) ) {
    echo $_SESSION['add'];
    unset( $_SESSION['add'] );
}
//delete list session success
if ( isset( $_SESSION['delete'] ) ) {
    echo $_SESSION['delete'];
    unset( $_SESSION['delete'] );
}
//delete list session fail
if ( isset( $_SESSION['delete_fail'] ) ) {
    echo $_SESSION['delete_fail'];
    unset( $_SESSION['delete_fail'] );
}
//update list session success
if ( isset( $_SESSION['update'] ) ) {
    echo $_SESSION['update'];
    unset( $_SESSION['update'] );
}
?>
    </p>
    <table class="list-table table">
        <tr>
            <th>No.</th>
            <th>List Name</th>
            <th>Actions</th>
        </tr>
        <?php
$sql = "SELECT * FROM tbl_lists";
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
            $list_id = $row['list_id'];
            $list_name = $row['list_name'];
            ?>
        <tr>
            <td><?php echo $no++;
            ?></td>
            <td><?php echo $list_name;
            ?></td>
            <td class="actions-td">
                <a class="working-button" href="<?php echo URL; ?>view-list.php?list_id=<?php echo $list_id; ?>"><span class="view-icon sprite-icon"></span><span class="action-button-text">View</span></a>
                <a class="working-button" href="<?php echo URL; ?>update-list.php?list_id=<?php echo $list_id; ?>"><span class="update-icon sprite-icon"></span><span class="action-button-text">Update</span></a>
                <a class="delete-button" class="delete-button" href="<?php echo URL; ?>delete-list.php?list_id=<?php echo $list_id; ?>"><span class="delete-icon sprite-icon"></span><span class="action-button-text">Delete</span></a>
            </td>
        </tr>
        <?php
        }
    } else {
        //if not then show message
        ?>
        <tr>
            <td colspan="3">No list added yet.</td>
        </tr>
        <?php
    }
}
?>
    </table>
</div>
<!-- Lists starts here -->
<!-- Lists ends here -->
<?php include( "./inc/page-end.php" );
?>
