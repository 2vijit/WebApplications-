<?php 
    include('./assets/sections/header.php'); 
    include('./connect.php');

    // Fetch menu items from the database
    $query = "SELECT * FROM menu";
    $result = mysqli_query($conn, $query);
?>
<section id="banner" class="wrapper">
    <div class="container">
        <img src="./assets/images/logo.png" alt="">
        <h1>WE SERVE QUALITY FOOD</h1>
        <div class="divider"></div>
        <p class="banner-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>Lorem Ipsum has been the industry's standard dummy text ever 1500s.
        </p>
        <button class="btn">ORDER NOW</button>
    </div>
</section>
<section id="services" class="wrapper">
    <div class="container">
        <h4>Our Sercies</h4>
        <h2>WHAT WE OFFER</h2>
        <p class="sub-header">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
            Lorem Ipsum has been the industry's stan</p>
        <div class="cardgroup">
            <div class="card">
                <img src="./assets/images/image-11.jpg" alt="" class="card-img">
                <div class="card-content">
                    <h3 class="card-header">DINNER</h3>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry been the industry’s stan</p>
                </div>
            </div>
            <div class="card">
                <img src="./assets/images/image-11.jpg" alt="" class="card-img">
                <div class="card-content">
                    <h3 class="card-header">DINNER</h3>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry been the industry’s stan</p>
                </div>
            </div>
            <div class="card">
                <img src="./assets/images/image-11.jpg" alt="" class="card-img">
                <div class="card-content">
                    <h3 class="card-header">DINNER</h3>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry been the industry’s stan</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="menu" class="wrapper">
    <div class="container">
        <h4>Our Menu</h4>
        <h2>taste of precious</h2>
        <p class="sub-header">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
            Lorem Ipsum has been the industry's stan
        </p>
        <div class="menu-group">
            <?php
            if($result){
                while($row = mysqli_fetch_assoc($result)){
            ?>
                   <div class="menu-card">
                       <img src="./assets/images/image-7-364x250.jpg" alt="" class="menu-img">
                       <div class="menu-content">
                           <h3><?=$row['menu_name']?></h3>
                           <p><?=$row['menu_disc']?></p>
                           <p class="pricing">Order $<?=$row['menu_price']?></p>
                       </div>
                       <a class="menu-link" href="./assets/forms/new-order.php?menu_id=<?=$row['menu_id']?>"></a>
                   </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>
<?php include('./assets/sections/footer.php'); ?>