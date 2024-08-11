<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include '/model/connection.php';
session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}

function unique_id() {
    return uniqid();
}

// ----Register----
if (isset($_POST['submit'])) {
    $id = unique_id();
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $pass = $_POST['pass'];
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);
    $cpass = $_POST['cpass'];
    $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

    try {
        $select_user = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $select_user->execute([$email]);
        $row = $select_user->fetch(PDO::FETCH_ASSOC);

        if ($select_user->rowCount() > 0) {
            echo 'Email already exists';
        } else {
            if ($pass != $cpass) {
                echo 'Confirm your password';
            } else {
                $insert_user = $conn->prepare("INSERT INTO users (id, name, email, password) VALUES (?, ?, ?, ?)");
                if ($insert_user->execute([$id, $name, $email, $pass])) {
                    $select_user = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
                    $select_user->execute([$email, $pass]);
                    $row = $select_user->fetch(PDO::FETCH_ASSOC);
                    if ($select_user->rowCount() > 0) {
                        $_SESSION['user_id'] = $row['id'];
                        $_SESSION['user_name'] = $row['name'];
                        $_SESSION['user_email'] = $row['email'];
                        echo 'Redirecting to home.php...';
                        header("Location: home.php");
                        exit();
                    } else {
                        echo 'User not found after registration';
                    }
                } else {
                    echo 'Failed to insert user';
                }
            }
        }
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}
?>

<style type="text/css">
    <?php include 'view/style.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Tea - Register</title>
</head>
<body>
    <div class="form-container">
        <section class="form-container">
            <div class="title">
                <img src="/view/src/download.png">
                <h1>Register now</h1>
                <p>A registration form is a list of fields that a user will input data into and submit.</p>
            </div>
            <form action="" method="post">
                <div class="input-field">
                    <p>Your Name *</p>
                    <input type="text" name="name" required placeholder="Enter your name" maxlength="50">
                </div>
                <div class="input-field">
                    <p>Your Email *</p>
                    <input type="email" name="email" required placeholder="Enter your email" maxlength="50"
                    oninput="this.value = this.value.replace(/\s/g,'')">
                </div>
                <div class="input-field">
                    <p>Your Password *</p>
                    <input type="password" name="pass" required placeholder="Enter your password" maxlength="50"
                    oninput="this.value = this.value.replace(/\s/g,'')">
                </div>
                <div class="input-field">
                    <p>Confirm Password *</p>
                    <input type="password" name="cpass" required placeholder="Enter your confirm password" maxlength="50"
                    oninput="this.value = this.value.replace(/\s/g,'')">
                </div>
                <input type="submit" name="submit" value="Register now" class="btn">
                <p>Already have an Account? <a href="login.php">Login Now</a></p>
            </form>
        </section>
    </div>
</body>
</html>
