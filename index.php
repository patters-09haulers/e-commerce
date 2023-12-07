<?php
// index.php
require_once 'config.php';

$result = $conn->query("SELECT * FROM products");

while ($row = $result->fetch_assoc()) {
    echo "Product: {$row['name']} - Price: {$row['price']} <a href='cart.php?action=add&id={$row['id']}'>Add to Cart</a><br>";
}
?>
