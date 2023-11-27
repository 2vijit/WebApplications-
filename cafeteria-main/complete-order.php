<?php 
session_start();
if (!isset($_SESSION['stuff_name'])) {
    header("Location: ./login.html"); // Redirect to the login page if session is not started
    exit();
}
include("./assets/sections/dashboard-header.php"); 
include_once('./connect.php');
// Query to fetch all orders with order_status = 0
$query = "SELECT * FROM orders WHERE order_status = 1";

// Execute the query
$result = mysqli_query($conn, $query);


?>

<table class="dashboard-table">
        <thead>
            <tr>
                <th>OrderNo</th>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Menu Item</th>
                <th>Price</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php 

                if ($result) {
                // Counter to track order numbers
                $orderNumber = 1;

                 // Loop through the orders and display them
                 while ($row = mysqli_fetch_assoc($result)) {
                     $order_id = $row['order_id'];
                     $st_id = $row['st_id'];
                    $st_name = $row['st_name'];
                    $menu_id = $row['menu_id'];

                // Query to fetch menu_name and menu_price using menu_id
                $menuQuery = "SELECT menu_name, menu_price FROM menu WHERE menu_id = $menu_id";
                $menuResult = mysqli_query($conn, $menuQuery);

                if ($menuResult) {
                    $menuRow = mysqli_fetch_assoc($menuResult);
                    $menu_name = $menuRow['menu_name'];
                    $menu_price = $menuRow['menu_price'];

            ?>
            <tr>
                <td><?=$orderNumber?></td>
                <td><?= $st_id?></td>
                <td><?=$st_name?></td>
                <td><?=$menu_name?></td>
                <td>$<?=$menu_price?></td>
                <td>Completed</td>
            </tr>
            <?php
            } else {
                echo "An error occurred while fetching menu data: " . mysqli_error($conn);
                }
                $orderNumber++;
            }
                } else {
                    echo "An error occurred while fetching order data: " . mysqli_error($conn);
            } 
            ?>
            <!-- Add more rows here -->
        </tbody>
    </table>

<?php include("./assets/sections/dashboard-footer.php"); ?>