<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<h2>Insert Product</h2>
    <form action="create.php" method="post" style="border-radius: 2px solid #000; border: #000;">
        Name: <input type="text" name="name" required><br>
        Description: <input type="text" name="des" required><br>
        Price: <input type="text" name="price" required><br>
        Quantity: <input type="text" name="quantity" required><br>
        Barcode: <input type="text" name="barcode" required><br>
        
        <input type="submit" value="Add Product">
    </form>


    <br>
    <br>
    <br>

    <h2>Products List</h2>
    <table border="2">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>description</th>
            <th>price</th>
            <th>quantity</th>
            <th>barcode</th>
            <th>create_at</th>
            <th>update_at</th>
            <th>Actions</th>
        </tr>
        <?php include 'read.php'; ?>
    </table>

</body>
</html>