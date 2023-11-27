x<?php 
    include_once('../../connect.php');
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $student_name = $_POST["student_name"];
        $student_id = $_POST["student_id"];
        $menu_id = $_POST["menu_id"]; // Get the menu_id from the hidden input
        
        // You can set an initial order_status value, e.g., 'Pending'
        $order_status = '0';

        // Query to insert data into the orders table
        $query = "INSERT INTO orders (st_name, st_id, menu_id, order_status) 
                  VALUES ('$student_name', '$student_id', '$menu_id', '$order_status')";
        
        // Execute the query
        $result = mysqli_query($conn, $query);

        if ($result) {
            // Insertion successful
            header("Location: ../../index.php");
            exit();
        } else {
            // Error occurred
            echo "An error occurred: " . mysqli_error($conn);
        }
    } else {
        echo "Invalid request.";
    }
?>
