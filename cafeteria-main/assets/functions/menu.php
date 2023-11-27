<?php
// Include the database connection
include_once('../../connect.php');

echo"came into the request";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $food_name = $_POST["food_name"];
    $food_disc = $_POST["food_disc"];
    $food_price = $_POST["food_price"];

    $query = "INSERT INTO `menu`(`menu_name`, `menu_price`, `menu_disc`) VALUES ('$food_name','$food_price','$food_disc')";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if the user exists and has provided valid credentials
    if ($result) {
        // echo"successfull";
        echo"success";
        header("Location: ../../menu.php");
        exit();
    } else {
        // Invalid credentials
        echo "An Error Occured ." .  mysqli_error($conn);
    }
}
else{
    echo"no code run";
}