<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php
if (isset($_POST["submit"])) {
    updateTable();
}
?>


<?php include "includes/header.php"; ?>
<h1 class="text-center">Update</h1>
<form action="login_update.php" method="post">
    <div class="form-control">
        <label for="username">Username:</label>
        <input type="text" class="form-control" name="username">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password">
        <select name="id" id="userId" class="form-select">
            <?php showAllData(); ?>
            <!-- <option value="">1</option> -->
        </select>
        <input type="submit" class="btn btn-primary" name="submit" value="UPDATE">
    </div>
</form>
<?php include "includes/footer.php"; ?>