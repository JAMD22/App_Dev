<?php
include 'dbcon.php'; 

// Fetch users
$sql = "SELECT id, name, description, price, quantity, barcode, create_at, update_at FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["description"] . "</td>";
        echo "<td>" . $row["price"] . "</td>";
        echo "<td>" . $row["quantity"] . "</td>";
        echo "<td>" . $row["barcode"] . "</td>";
        echo "<td>" . $row["create_at"] . "</td>";
        echo "<td>" . $row["update_at"] . "</td>";
        echo "<td><a href='update.php? id=" . $row["id"] . "'>Edit</a> | <a href='delete.php? id=" . $row["id"] . "'>Delete</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>No users found</td></tr>";
}

$conn->close();
?>

</body>
</html>