<?php
session_start();
if (!isset($_SESSION['stuff_name'])) {
    header("Location: ./login.html"); // Redirect to the login page if session is not started
    exit();
}
include_once('./connect.php');
include("./assets/sections/dashboard-header.php");

$query = "SELECT * FROM menu";
$result = mysqli_query($conn, $query);
?>
<div class="dashboard-header">
    <button onclick="redirectToMenuPage()" class="btn">Add New</button>
    <p class="database-message"> Data Added Successful</p>
</div>
<table class="dashboard-table">
    <thead>
        <tr>
            <th>Menu ID</th>
            <th>Menu Item</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            $menu_id = $row['menu_id'];
            $menu_name = $row['menu_name'];
            $menu_price = $row['menu_price'];

        ?>
            <tr>
                <td><?= $menu_id ?></td>
                <td><?= $menu_name ?></td>
                <td>$<?= number_format($menu_price, 2) ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?php include("./assets/sections/dashboard-footer.php"); ?>