<?php
// Include the database connection
include_once('../../connect.php');

// Check if order_id is provided in the URL
if (isset($_GET['order_id'])) {
    // Get the order_id from the URL
    $order_id = $_GET['order_id'];

    // Update the order_status to 1 for the specified order_id
    $updateQuery = "UPDATE orders SET order_status = 1 WHERE order_id = $order_id";

    // Execute the update query
    $result = mysqli_query($conn, $updateQuery);

    if ($result) {
        // Order status updated successfully
        header("Location: ../../dashboard.php");
        exit();
    } else {
        // Error updating order status
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Order ID not provided in the URL
    echo "Order ID not provided in the URL.";
}
?>
