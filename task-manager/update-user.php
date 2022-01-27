<?php
$pageName = "Update User";
?>
<?php include( "./inc/default.php" );
?>
<?php include( "./inc/page-start.php" );
?>

<?php //Check whether the user_id is assigned
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
    }
} else {
    $_SESSION['update_fail'] = "Failed to update!";
    //redirect
    header( 'location:'.URL.'update-user.php' );
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

<form method="POST" action="submit-updateuser.php">
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
    <table>

        <tr>
            <td>User Name:</td>
            <td><input type="text" name="user_name" value="<?php echo $user_name; ?>" required /></td>
        </tr>
        <tr>
            <td>User Department:</td>
            <td><textarea type="text" name="user_department" placeholder="Modify department here"><?php echo $user_department;
?></textarea></td>
        </tr>

    </table>
    <input type="submit" name="submit" value="Update this user" />

</form>

<!-- Update form end -->

<?php include( "./inc/page-end.php" );
?>
