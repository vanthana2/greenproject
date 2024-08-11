<?php
include 'model/connection.php';
session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
   }else{
    $user_id = '';
   }
   if(isset($_POST['logout'])){
    session_destroy();
    header("location:login.php");
   }
?>
<style type="text/css">
    <?php include'view/style.css';?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Coffee - home page</title>
</head>
<body>
    <?php include "view/partials/header.php"; ?>
    <div class="main">

<section class="home-section">
    <div class="slider">
        <div class="slider__slider slider1">
            <div class="overlay"></div>
            <div class="slider-details">
                <h1>Green Tea</h1>
                <p>Green tea is a type of tea that is made from Camellia sinensis leaves and buds that have not undergone the same withering and oxidation process which is used to make oolong teas and black teas. </p>
                <a href="./view_products.php" class="btn">shop now</a>
            </div>
            <div class="hero-dec-top"></div>
            <div class="hero-dec-bottom"></div>
        </div>
        <!------ slide end---- -->
        <div class="slider__slider slider2">
            <div class="overlay"></div>
            <div class="slider-details">
                <h1>welcome to my shop</h1>
                <p>Green tea is a type of tea that is made from Camellia sinensis leaves and buds that have not undergone the same withering and oxidation process which is used to make oolong teas and black teas. </p>
                <a href="./view_products.php" class="btn">shop now</a>
            </div>
            <div class="hero-dec-top"></div>
            <div class="hero-dec-bottom"></div>
        </div>
        <!------ slide end---- -->
        <div class="slider__slider slider3">
            <div class="overlay"></div>
            <div class="slider-details">
            <h1>Green Tea</h1>
            <p>Green tea is a type of tea that is made from Camellia sinensis leaves and buds that have not undergone the same withering and oxidation process which is used to make oolong teas and black teas. </p>
                <a href="./view_products.php" class="btn">shop now</a>
            </div>
            <div class="hero-dec-top"></div>
            <div class="hero-dec-bottom"></div>
        </div>
        <!------ slide end---- -->
        <div class="slider__slider slider4">
            <div class="overlay"></div>
            <div class="slider-details">
            <h1>Green Tea</h1>
            <p>Green tea is a type of tea that is made from Camellia sinensis leaves and buds that have not undergone the same withering and oxidation process which is used to make oolong teas and black teas. </p>
                <a href="./view_products.php" class="btn">shop now</a>
            </div>
            <div class="hero-dec-top"></div>
            <div class="hero-dec-bottom"></div>
        </div>
        <!------ slide end---- -->
        <div class="slider__slider slider5">
            <div class="overlay"></div>
            <div class="slider-details">
            <h1>Green Tea</h1>
            <p>Green tea is a type of tea that is made from Camellia sinensis leaves and buds that have not undergone the same withering and oxidation process which is used to make oolong teas and black teas. </p>
                <a href="./view_products.php" class="btn">shop now</a>
            </div>
            <div class="hero-dec-top"></div>
            <div class="hero-dec-bottom"></div>
        </div>
        <!------ slide end---- -->
        <div class="left-arrow"><i class="fa-solid fa-arrow-left"></i></div>
        <div class="right-arrow"><i class="fa-solid fa-arrow-right"></i></div>
    </div>
</section>
<!--home slider end -->
<section class="thumb">
    <div class="box-container">
        <div class="box">
            <img src="/view/src/thumb2.jpg">
            <h3>Green Tea</h3>
            <p>Green tea is a type of tea that is made from Camellia</p>
            <i class="fa-solid fa-greater-than"></i>
        </div>
        <div class="box">
            <img src="/view/src/thumb0.jpg">
            <h3>Lemon Tea</h3>
            <p>Green tea is a type of tea that is made from Camellia</p>
            <i class="fa-solid fa-greater-than"></i>
        </div>
        <div class="box">
            <img src="/view/src/thumb1.jpg">
            <h3>Green Coffee</h3>
            <p>Green tea is a type of tea that is made from Camellia</p>
            <i class="fa-solid fa-greater-than"></i>
        </div>
        <div class="box">
            <img src="/view/src/thumb.jpg">
            <h3>Green Tea</h3>
            <p>Green tea is a type of tea that is made from Camellia</p>
            <i class="fa-solid fa-greater-than"></i>
        </div>

    </div>
</section>
<section class="container">
    <div class="box-container">
        <div class="box">
            <img src="/view/src/about-us.jpg">
        </div>
        <div class="box">
            <img src="/view/src/download.png">
            <span>Healthy Tea</span>
            <h1>Save upto 50% Off</h1>
            <p>Green tea is a type of tea that is made from Camellia. </p>
        </div>
    </div>
</section>
<section class="shop">
    <div class="title">
        <img src="/view/src/download.png">
        <h1>Trending Products</h1>
    </div>
    <div class="row">
        <img src="/view/src/about.jpg">
        <div class="row-detail">
            <img src="/view/src/basil.jpg">
            <div class="top-footer">
                <h1>A Cup of Green Tea makes you healthy</h1>
            </div>
        </div>
    </div>
    <div class="box-container">
        <div class="box">
            <img src="/view/src/card.jpg">
            <a href="view_products.php" class="btn">Shop Now</a>
        </div>
        <div class="box">
            <img src="/view/src/card0.jpg">
            <a href="view_products.php" class="btn">Shop Now</a>
        </div>
        <div class="box">
            <img src="/view/src/card1.jpg">
            <a href="view_products.php" class="btn">Shop Now</a>
        </div>
        <div class="box">
            <img src="/view/src/card2.jpg">
            <a href="view_products.php" class="btn">Shop Now</a>
        </div>
        <div class="box">
            <img src="/view/src/10.jpg">
            <a href="view_products.php" class="btn">Shop Now</a>
        </div>
        <div class="box">
            <img src="/view/src/6.webp">
            <a href="view_products.php" class="btn">Shop Now</a>
        </div>
     </div>
</section>
<section class="shop-category">
    <div class="box-container">
        <div class="box">
        <img src="/view/src/6.jpg">
        <div class="detail">
            <span>BIG OFFERS</span>
            <h1>EXTRA 15% OFF</h1>
            <a href="view_products.php" class="btn">Shop Now</a>
        </div>
        </div>
        <div class="box">
        <img src="/view/src/7.jpg">
        <div class="detail">
            <span>New in Taste</span>
            <h1>Coffee House</h1>
            <a href="view_products.php" class="btn">Shop Now</a>
        </div>
        </div>
    </div>
</section>
<section class="services">
    <div class="box-container">
        <div class="box">
            <img src="/view/src/icon2.png">
            <div class="detail">
                <h3>Great Savings</h3>
                <p>Save Big Every Order</p>
            </div>
        </div>
        <div class="box">
            <img src="/view/src/icon1.png">
            <div class="detail">
                <h3>24*7 Support</h3>
                <p>One-on-One support</p>
            </div>
        </div>
        <div class="box">
            <img src="/view/src/icon0.png">
            <div class="detail">
                <h3>Gift Vouchers</h3>
                <p>Vouchers on every Festivals</p>
            </div>
        </div>
        <div class="box">
            <img src="/view/src/icon.png">
            <div class="detail">
                <h3>Worldide Delivery</h3>
                <p>Dropship Worldide</p>
            </div>
        </div>
    </div>
</section>
<section class="brand">
    <div class="box-container">
        <div class="box">
            <img src="/view/src/brand (1).jpg">
        </div>
        <div class="box">
            <img src="/view/src/brand (2).jpg">
        </div>
        <div class="box">
            <img src="/view/src/brand (3).jpg">
        </div>
        <div class="box">
            <img src="/view/src/brand (4).jpg">
        </div>
        <!-- <div class="box">
            <img src="/view/src/brand (5).jpg">
        </div> -->
    </div>
</section>
<?php include "../view/partial/footer.php" ; ?>
</div>
         <?php include "view/partials/footer.php"; ?>
    <link rel= "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="script.js"></script>
    <?php include "view/alert.php"; ?>
    <script src="script.js"></script>
</body>
</html>
