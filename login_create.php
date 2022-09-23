<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php
if (isset($_POST["submit"])) {
    createUser();
}
?>
<?php include "includes/header.php"; ?>
<h1 class="text-center">Create</h1>
<form action="login_create.php" method="POST">
    <div class="form-group">
        <label for="username">username:</label>
        <input type="text" name="username" class="form-control" aria-describedby="emailHelp" placeholder="Enter username">
    </div>
    <div class="form-group">
        <label for="password">password:</label>
        <input type="password" name="password" class="form-control" placeholder="password">
    </div>


    <input type="submit" value="CREATE" name="submit" class="btn btn-primary">
</form>

<?php include "includes/footer.php"; ?>