

<?php

use LDAP\Result;

include "db.php"; ?>
<?php
function showAllData()
{
    global $connection;

    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);


    if (!$result) {
        die("Query faild!");
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        echo "<option value='$id'>$id<option>";
    }
}


function updateTable()
{
    global $connection;

    $username = $_POST["username"];
    $password = $_POST["password"];
    $id = $_POST["id"];


    $query = "UPDATE users SET ";
    $query .= "username = '$username',";
    $query .= "password = '$password'";
    $query .= "WHERE id= $id ";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Upade was bad!" . mysqli_errno(($connection)));
    }
}


function deleteRows()
{
    global $connection;

    $username = $_POST["username"];
    $password = $_POST["password"];
    $id = $_POST["id"];

    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Something went bad" . mysqli_error($connection));
    }
}


function createUser()
{
    global $connection;
    $username = $_POST["username"];
    $password = $_POST["password"];
    $submit = $_POST["submit"];

    $query = "INSERT INTO users(username,password) ";
    $query .= "VALUES ('$username','$password')";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Something bad is in program.");
    }
}


function readAllUsers()
{
    global $connection;
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);


    if (!$result) {
        die("Query faild!");
    }
}


function readRows()
{
    global $connection;

    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query faild!");
    }

    while ($row = mysqli_fetch_assoc($result)) {
        print_r($row);
    };
}
