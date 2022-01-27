<?php
$pageName = "Update List";
?>
<?php include( "./inc/default.php" );
?>
<?php include( "./inc/page-start.php" );
?>

<?php //Check whether the list_id is assigned
if ( isset( $_GET['list_id'] ) ) {
    //Delete if exists
    $list_id = $_GET['list_id'];
    $sql = "SELECT * FROM tbl_lists WHERE list_id=$list_id";
    //Execute query
    $res = mysqli_query( $conn, $sql );
    if ( $res == true ) {

        $row = mysqli_fetch_assoc( $res );

        //Create individual var to save the data inserted
        $list_name = $row['list_name'];
        $list_description = $row['list_description'];
    }
} else {
    $_SESSION['update_fail'] = "Failed to update!";
    //redirect
    header( 'location:'.URL.'update-list.php' );
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

<form method="POST" action="submit-updatelist.php">
    <input type="hidden" name="list_id" value="<?php echo $list_id; ?>" />
    <table>

        <tr>
            <td>List Name:</td>
            <td><input type="text" name="list_name" value="<?php echo $list_name; ?>" required /></td>
        </tr>
        <tr>
            <td>List Description:</td>
            <td><textarea type="text" name="list_description" placeholder="Modify description here"><?php echo $list_description;
                ?></textarea></td>
        </tr>

    </table>
    <input type="submit" name="submit" value="Update this list" />

</form>

<!-- Update form end -->

<?php include( "./inc/page-end.php" );
?>
