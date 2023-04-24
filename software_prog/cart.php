<?php

session_start();

// Check if the cart variable exists in the session. If not, create it.
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Check if the product id is passed in the URL.
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Check if the product is already in the cart. If so, increment the quantity by 1.
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]++;
    } else {
        // If not, add the product to the cart with a quantity of 1.
        $_SESSION['cart'][$id] = 1;
    }
}
?>