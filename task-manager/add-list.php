<?php
$pageName = "Add New List";
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

<!-- Add list form start -->

<form method="POST" action="submit-newlist.php">

    <table>

        <tr>
            <td>List Name:</td>
            <td><input type="text" name="list_name" placeholder="List Name here" required /></td>
        </tr>
        <tr>
            <td>List Description:</td>
            <td><textarea type="text" name="list_description" placeholder="List Description here"></textarea></td>
        </tr>

    </table>
    <input type="submit" name="submit" value="Save New List" />

</form>

<!-- Add list form end -->

<?php include( "./inc/page-end.php" );
?>
