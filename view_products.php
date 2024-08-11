<?php
include 'model/connection.php';
session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}
if (isset($_POST['logout'])) {
    session_destroy();
    header("location:login.php");
}

//Adding products in wishlist
if(isset($_POST['add_to_wishlist'])){
    $id = unique_id();
    $product_id =$_POST['product_id'];
    $varify_wishlist = $conn->prepare("SELECT * FROM 'wishlist' WHERE user_id = ? AND product_id = ?");
    $varify_wishlist->execute([$user_id.$product_id]);
    

    if($varify_wishlist->rowCount()>0){
      $warning_msg[] = 'Product already exist in your wishlist';
    }else if(condition){

    }
}

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
<style type="text/css">
    <?php include 'view/style.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Coffee - Shop page</title>
</head>
<body>
    <?php include "view/partials/header.php"; ?>
    <div class="main">
        <div class="banner">
            <img src="view/src/banner.jpg">
            <h1>Shop</h1>
        </div>

        <section class="products">
            <div class="box-container">
                <?php 
                // Check if the connection is established
                if ($conn) {
                    $select_products = $conn->prepare("SELECT * FROM products");
                    $select_products->execute();
                    if ($select_products->rowCount() > 0) {
                        while ($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)) {
                ?>
                
                <form action="" method="post" class="box">
                    <img src="image/<?=$fetch_products['image'];?>" class="img">
                    <div class="button">
                        <button type="submit" name="add_to_cart"><i class="fa-solid fa-cart-shopping"></i></button>
                        <button type="submit" name="add_to_wishlist"><i class="fa-solid fa-heart"></i></button>
                        <a href="view_page.php?pid=<?php echo $fetch_products['id'];?>" class="fa-solid fa-eye"></a>
                    </div>
                    <h3 class="name"><?=$fetch_products['name'];?></h3>
                    <input type="hidden" name="product_id" value="<?=$fetch_products['id'];?>">
                    <div class="flex">
                        <p class="price">Price $<?=$fetch_products['price'];?> /-</p>
                        <input type="number" name="qty" required min="1" value="1" max="99" maxlength="2" class="qty">
                    </div>
                    <a href="checkout.php?get_id=<?=$fetch_products['id']; ?>" class="btn">Buy Now</a>
                </form>
                <?php
                        }
                    } else {
                        echo '<p class="empty">No Products added Yet!</p>';
                    }
                } else {
                    echo '<p class="empty">Database connection failed!</p>';
                }
                ?>
            </div>
        </section>
        <div class="title2">
            <a href="home.php">home</a> <span>Our Shop</span>
        </div>
        
        <?php include "view/partials/footer.php"; ?>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="script.js"></script>
    <?php include "view/alert.php"; ?>
</body>
</html>

<i class="fa-solid fa-eye"></i>
