<?php
    session_start();
    include("connect.php");

    if(isset($_POST["email"]) && isset($_POST["pwd"]) && isset($_POST["confirmcaptcha"])) {
       function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $email = validate($_POST["email"]);
        $pwd = validate($_POST["pwd"]);
        $captcha = validate($_POST["captcha"]);
        $confirmcaptcha = validate($_POST["confirmcaptcha"]);

        if(empty($email)) {
            header("Location:index.php?error=Email is required!");
            exit();
        }

        else if(empty($pwd)) {
            header("Location:index.php?error=Password is required!");
            exit();
        }

        else if(empty($captcha)) {
            header("Location:index.php?error=Captcha is required!");
            exit();
        }

        else if($captcha != $confirmcaptcha) {
            echo "<script>alert(Incorrect Captcha!);</script>";
            exit();
        }

        $sql = "SELECT * FROM admin WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $verify = password_verify($pwd, $row['pwd']);
            
            if ($verify == 1) {
                echo "log in!";
                $_SESSION["email"] = $row["email"];
                $_SESSION["name"] = $row["name"];
                $_SESSION["phone"] = $row["phone"];
                $_SESSION["id"] = $row["id"];
                header("Location:announcement.php");
                exit();
            }
            else {
                header("Location:index.php?error=Incorrect password!");
                exit();
            }

        }
        else {
            header("Location:index.php");
            exit();
        }
    }

?>
