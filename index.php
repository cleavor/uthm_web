<?php //echo password_hash('12345',PASSWORD_BCRYPT); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
            
        <!-- CSS -->
        <link rel="stylesheet" href="./assets/css/style.css" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <?php include("sidebar.php"); ?>
        <div class="content-container">
        <h1>STAFF MANAGEMENT SYSTEM RAILWAY HR</h1>

        <div class="login-container">
            <div class="login-form">
                <h2>Login</h2>

                <?php if (isset($_GET["error"])) { ?>
                    <p class="error"><?php echo $_GET["error"]; ?></p>
                <?php }?>

                <form action="login.php" method="post" class="login-form" name="logForm" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Password</label>
                        <input type="password" name="pwd" placeholder="Enter password">
                    </div>

                    <div class="captcha">
                        <label for="captcha">Enter Captcha</label>
                        <div class="captcha-form">
                            <input type="text" class="captchacode" name="captcha" value="<?php echo substr(uniqid(),5); ?>">
                            <input type="text" class="captchainput" name="confirmcaptcha" id="inputCaptcha" placeholder="Enter captcha">
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="submit" id="submit">Login</button>
                    </div>
                </form>
            </div>
            <div class="login-image">
                <img src="./assets/img/railway.avif" alt="Railway Image">
            </div>
        </div>
                </div>
    </body>
</html>
