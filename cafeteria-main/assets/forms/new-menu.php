
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
    <form action="../functions/menu.php" method="POST" class="model-form" id="new_menu_form">
        <input type="text" placeholder="Food Name" name="food_name" id="food_name" >
        <input type="number" name="food_price" id="food_price" placeholder="Food Price">
        <textarea name="food_disc" id="food_disc" cols="30" rows="10" placeholder="Food Disctiption"></textarea>
        <button type="submit" class="btn">Add</button>
    </form>
</div>
</body>
</html>