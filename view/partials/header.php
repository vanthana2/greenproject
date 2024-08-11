<header class="header">
    <div class="flex">
        <a href="home.php" class="logo"><img src="/view/src/logo.jpg"></a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="view_products.php">Products</a>
            <a href="order.php">Orders</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact Us</a>
        </nav>
        <div class="icons">
            <i class="fa-solid fa-user" id="user-btn"></i>
            <a href="wishlist.php" class="cart-btn"><i class="fa-solid fa-heart"></i><sup>0</sup></a>
            <a href="cart.php" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i><sup>0</sup></a>
            <i class="fa-solid fa-bars" id="menu-btn" style="font-size: 2rem;"></i>
        </div>
        <div class="user-box">
            <p>Username: <span><?php echo $_SESSION['user_name'];?></span></p>
            <p>Email: <span><?php echo $_SESSION['user_email'];?></span></p>
            <a href="login.php" class="btn">Login</a>
            <a href="register.php" class="btn">Register</a>
            <form method="post">
                <button type="submit" name="logout" class="logout-btn">Logout</button>
            </form>
        </div>
    </div>
</header>