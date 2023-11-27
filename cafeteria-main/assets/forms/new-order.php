<?php 
    include_once('../../connect.php');
    if (isset($_GET['menu_id'])) {
    $menu_id = $_GET['menu_id'];
    
    // Query to fetch menu_name and menu_price using menu_id
    $query = "SELECT menu_name, menu_price FROM menu WHERE menu_id = $menu_id";
    
    // Execute the query
    $result = mysqli_query($conn, $query);
    
    if ($result) {
        // Fetch the menu_name and menu_price
        $row = mysqli_fetch_assoc($result);
        $menuName = $row['menu_name'];
        $menuPrice = $row['menu_price'];
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Menu ID not provided in the URL.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="../css/styles.css" />
    
</head>
<body>
   <div class="model-wrapper" id="popup">
    <h3>Your Order is now almonst done</h3>
    <p><strong><?=$menuName?></strong> will cost you <strong>$<?= $menuPrice ?></strong> now fill this from to confirm your order</p>
    <form action="../functions/order.php" method="POST" class="model-form" id="new_menu_form">
        <input type="text" placeholder="Student Name" name="student_name" id="student_name">
         <input type="hidden" name="menu_id" value="<?=$menu_id?>">
        <input type="number" name="student_id" id="student_name" placeholder="Student id">
       
        <button type="submit" class="btn">Place Order</button>
    </form>
</div>
</body>
</html>