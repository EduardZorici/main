<?php
$pageName = "Add New User";
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

<!-- Add user form start -->

<form method="POST" action="submit-newuser.php">

    <table>

        <tr>
            <td>User Full Name:</td>
            <td><input type="text" name="user_name" placeholder="User Full Name here" required /></td>
        </tr>
        <tr>
            <td>User Department:</td>
            <td><textarea type="text" name="user_department" placeholder="User Description here"></textarea></td>
        </tr>

    </table>
    <input type="submit" name="submit" value="Save New User" />

</form>

<!-- Add user form end -->

<?php include( "./inc/page-end.php" );
?>
