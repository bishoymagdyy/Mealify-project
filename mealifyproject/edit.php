<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/edit.css">
</head>

<body>
    <?php
    include "server.php"; // Database connection

    // Get product ID
    $id = $_GET['id'];

    // Fetch product data
    $query = mysqli_query($db, "SELECT * FROM products WHERE id='$id'");
    $data = mysqli_fetch_array($query);

    // Update product
    if(isset($_POST['update'])) {
    $orderName = $_POST['orderName'];
    $price = $_POST['price'];

    $sql = "UPDATE products SET
    orderName='$orderName',
    price='$price'
    WHERE id='$id'";

    $result = mysqli_query($db, $sql);

    if($result) {
    mysqli_close($db);
    header("Location: allrec.php");
    } else {
    echo mysqli_error($db);
    }
    }
    ?>

    <h1>Update Product</h1>
    <form class="form" method="POST">
        <input type="text" name="orderName" value="<?php echo $data['orderName']; ?>">
        <input type="text" name="price" value="<?php echo $data['price']; ?>">
        <input class="upd-btn" type="submit" name="update" value="Update">
    </form>
    <?php
include "server.php"; // Database connection

// Get product ID
$id = $_GET['id'];

// Fetch product data
$query = mysqli_query($db, "SELECT * FROM products WHERE id='$id'");
$data = mysqli_fetch_array($query);

// Update product
if(isset($_POST['update'])) {
    $orderName = $_POST['orderName'];
    $price = $_POST['price'];
    
    $sql = "UPDATE products SET 
            orderName='$orderName',  
            price='$price' 
            WHERE id='$id'";
    
    $result = mysqli_query($db, $sql);
    
    if($result) {
        mysqli_close($db);
        header("Location: allrec.php");
    }
}
?>

</body>

</html>