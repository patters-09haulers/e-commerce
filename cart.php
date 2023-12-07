<?php
// cart.php
require_once 'config.php';

if ($_GET['action'] == 'add' && isset($_GET['id'])) {
    $productId = intval($_GET['id']);
    // Add product to the cart (you would typically use sessions or a database here)
    echo "Product added to cart!";
} else {
    // Display the cart contents
    echo "Shopping Cart is empty.";
}
?>
