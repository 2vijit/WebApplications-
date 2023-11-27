<?php
// Include the database connection
include_once('../../connect.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM staff WHERE staff_name = '$username' AND staff_password = '$password'";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if the user exists and has provided valid credentials
    if ($result) {
        session_start(); // Start the session
        $_SESSION["stuff_name"] = $username;
        // Successful login
        header("Location: ../../dashboard.php");
        exit();
    } else {
        // Invalid credentials
        echo "Invalid username or password.";
    }
}
