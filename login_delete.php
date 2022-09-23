<?php include "db.php" ?>
<?php include "functions.php" ?>
<?php
if (isset($_POST["submit"])) {
    deleteRows();
}
?>

<?php include "includes/header.php"; ?>
<h1 class="text-center">Delete</h1>
<form action="login_delete.php" method="post" class="form-control">
    <label for="username">Username:</label>
    <input type="text" name="username" placeholder="Username" class="form-control">
    <label for="password">Password:</label>
    <input type="password" name="password" placeholder="Password" class="form-control">
    <select name="id" id="userId" class="form-select">
        <?php showAllData(); ?>
    </select>
    <input type="submit" class="btn btn-primary" name="submit" value="DELETE">

</form>
<?php include "includes/footer.php"; ?>