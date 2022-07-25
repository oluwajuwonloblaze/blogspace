<?php
include 'database.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $a = new db;
    $sqlquery = "DELETE FROM 'users_table' WHERE id = '$id'";
    $a->delete($con, $sqlquery);


   
}

?>