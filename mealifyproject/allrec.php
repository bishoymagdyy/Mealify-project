<? php include('server.php')
;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Product List</title>
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    img {
        max-width: 50px;
        max-height: 50px;
    }
    </style>
    <link rel="stylesheet" href="css/record.css">
</head>

<body>
    <h1>Product Management</h1>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>orderName</th>
                <th>Price</th>
                <th>image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "server.php"; // Using database connection file here
            $records = mysqli_query($db, "SELECT * FROM products"); // fetch data from database

            while($data = mysqli_fetch_array($records)) {
            ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['orderName']; ?></td>
                <td><?php echo $data['price']; ?></td>
                <td class="img-size"><img src="<?php echo $data['image']; ?>" height="80px" width="80px" /></td>
                <td>
                    <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
                    <a href="delete.php?id=<?php echo $data['id']; ?>"
                        onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</body>

</html>