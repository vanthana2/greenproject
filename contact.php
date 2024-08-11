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
    <div class="banner">
            <img src="/view/src/banner.jpg">  
            <h1>contact Us</h1>
        </div>
        <div class="title2">
            <a href="home.php">home</a> <span>contact us</span>
        </div>
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
<div class="form-container">
    <form method="post">
        <div class="title">
            <img src="/view/src/download.png" class="logo">
            <h1>Leave a Message</h1>
        </div>
        <div class="input-field">
            <p>Your Name *</p>
            <input type="text" name="name">
        </div>
        <div class="input-field">
            <p>Your Email *</p>
            <input type="email" name="email">
        </div>
        <div class="input-field">
            <p>Your Number *</p>
            <input type="text" name="number">
        </div>
        <div class="input-field">
            <p>Your Message *</p>
            <textarea name="message"></textarea>
        </div>
        <button type="submit" name="submit-btn" class="btn">Send Message</button>
    </form>
</div>
<div class="address">
    <div class="title">
            <img src="/view/src/download.png" class="logo">
            <h1>Contact Detail</h1>
            <p>Information on how to contact a person or entity, typically including a telephone number, address etc.</p>
        </div>
        <div class="box-container">
            <div class="box">
            <i class="fa-solid fa-address-book"></i>
                <div>
                    <h4>Address</h4>
                    <p>1092 Merigold Lane,Coral Way</p>
                </div>
            </div>
            <div class="box">
            <i class="fa-solid fa-phone"></i>
                <div>
                    <h4>Phone Number</h4>
                    <p>9876543218</p>
                </div>
            </div>
            <div class="box">
            <i class="fa-solid fa-envelope"></i>
                <div>
                    <h4>Email</h4>
                    <p>selena@gmail.com</p>
                </div>
            </div>
        </div>
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
