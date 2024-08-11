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
    <title>Green Coffee - about us page</title>
</head>
<body>
    <?php include "view/partials/header.php"; ?>
    <div class="main">
        <div class="banner">
            <img src="/view/src/banner.jpg">  
            <h1>about Us</h1>
        </div>
        <div class="title2">
            <a href="home.php">home</a> <span>about</span>
        </div>
        <div class="about-category">
            <div class="box">
                <img src="/view/src/3.webp">
                <div class="detail">
                    <span>Coffee</span>
                    <h1>Lemon Green</h1>
                    <a href="view_products.php" class="btn">Shop Now</a>
                </div>
            </div>
            <div class="box">
                <img src="/view/src/2.webp">
                <div class="detail">
                    <span>Coffee</span>
                    <h1>Lemon Teaname</h1>
                    <a href="view_products.php" class="btn">Shop Now</a>
                </div>
            </div>
           <div class="box">
                <img src="/view/src/about.png">
                <div class="detail">
                    <span>Coffee</span>
                    <h1>Lemon Teaname</h1>
                    <a href="view_products.php" class="btn">Shop Now</a>
                </div>
            </div>
            <div class="box">
                <img src="/view/src/1.webp">
                <div class="detail">
                    <span>Coffee</span>
                    <h1>Lemon Green</h1>
                    <a href="view_products.php" class="btn">Shop Now</a>
                </div>
            </div>
        </div>
    <section class="services">
        <div class="title">
            <img src="/view/src/download.png" class="logo">
            <h1>Why Choose us</h1>
            <p>Green tea is a type of tea that is made from Camellia. </p>

        </div>
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
<div class="about">
    <div class="row">
        <div class="img-box">
            <img src="/view/src/3.png">
        </div>
        <div class="detail">
            <h1>Visit Our Beautiful Showroom!</h1>
            <p>Our Showroom is an expression of what we love doing,being creative with floral and plant arrangements.
                Whether you are looking for a florist for your perfect wedding,or just want to uplift any room with 
                some one of a kind living decor, Blossom with love can help</p>
            <a href="view_products.php" class="btn">Shop now</a>    
        </div>
    </div>
</div>
    <div class="testimonial-container">
        <div class="title">
            <img src="/view/src/download.png" class="logo">
            <h1>What People say about us</h1>
            <p>Green tea is a type of tea that is made from Camellia. </p>
            </div>
            <div class="container">
                <div class="testimonial-item active">
                    <img src="/view/src/01.jpg">
                    <h1>Sara Smith</h1>
                    <p>Green tea is a type of tea that is made from Camellia. </p>
                </div>
                <div class="testimonial-item">
                    <img src="/view/src/02.jpg">
                    <h1>John Smith</h1>
                    <p>Green tea is a type of tea that is made from Camellia. </p>
                </div>
                <div class="testimonial-item">
                    <img src="/view/src/03.jpg">
                    <h1>Selena Ansari</h1>
                    <p>Green tea is a type of tea that is made from Camellia. </p>
                </div>
                <div class="left-arrow" onclick="nextSlide()"><i class="fa-solid fa-arrow-left"></i></div>
                <div class="right-arrow" onclick="prevSlide()"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
        <!-- </div> -->
       </div>
   <?php include "../view/partial/footer.php" ; ?>
</div>
    <?php include "view/partials/footer.php"; ?>
    <link rel= "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="script.js"></script>
    <?php include "view/alert.php"; ?>
    <script src="script.js"></script>
</body>
</html>
