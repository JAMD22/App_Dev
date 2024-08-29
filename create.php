<?php
include 'dbcon.php'; 

// Insert new user

$id = $_POST['id'];
$name = $_POST['name'];
$des = $_POST['des'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$barcode = $_POST['barcode'];

$sql = "INSERT INTO products (id, name, description, price, quantity, barcode) VALUES ('$id', '$name', '$des', '$price', '$quantity', '$barcode')";
if ($conn->query($sql) === TRUE) {
    header("Location: index.php"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>