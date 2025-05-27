<?php
include "server.php"; // Database connection

// Get product ID
$id = $_GET['id'];

// Delete query
$query = "DELETE FROM products WHERE id='$id'";
$result = mysqli_query($db, $query);

if($result) {
    mysqli_close($db);
    header("Location: allrec.php");
} else {
    echo "Error deleting record: " . mysqli_error($db);
}
?>