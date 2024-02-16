<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <div class="navbar flex">
        <div class=" container flex">
            <div class="nav-logo">
                <img src="/images/logo.png" alt="">
            </div>

            <div class="nav-items flex">
                <a href="index.html">Home</a>
                <a href="">Desktop</a>
                <a href="">Laptop</a>
                <a href="">Accsesories</a>
            </div>

            <div class="nav-account flex">
                <a href="Register.html"><img src="/images/user icon.png" alt=""></a>
                <a href="Register.html"><img src="/images/cart icon.png" alt=""></a>

            </div>
        </div>
    </div>

    <div class="main">
        <section class="reg-form-sec container flex">
            <div class="reg-form">
                <form class="flex" action="register.php" method="post">
                    <h2>Register/ SignUP</h2>
                    <div class="input flex">

                        <h3 >User Name<span>*</span></h3> <input type="text" name="username" id="username">
                        <h3>Mobile<span>*</span></h3> <input type="number" name="mobnum" id="mobnum">
                        <h3>Password<span>*</span></h3> <input type="password" name="pass" id="pass">


                    </div>
                    <button type="submit">Register</button>

                </form>

            </div>
            <div class="already-reg flex">
                <h3>Already a customer</h3>
                <button>Login</button>
            </div>
        </section>



        <div class="footer">
            <div class="container flex">
                <div class="upper">
                    <div class="adv footudiv">

                        <img src="/images/logo.png" alt="">

                        <p>Call Us- +91 7709238315</p>
                        <div class="social-div flex ">
                            <img src="/images/insta logo.png" alt="">
                            <img src="/images/whatsapp logo.png " alt="">
                            <img src="/images/yt logo.png" alt="">
                        </div>
                    </div>
                    <div class="desk-sec footudiv">
                        <h3>DESKTOP</h3>
                        <a href="">
                            <p>Pre-Built</p>
                        </a>
                        <a href="">
                            <p>Build Your Own</p>
                        </a>
                        <a href="">
                            <p>Accsesories</p>
                        </a>
                    </div>
                    <div class="lap-sec footudiv">
                        <h3>LAPTOP</h3>
                        <a href="">
                            <p>Gaming</p>
                        </a>
                        <a href="">
                            <p>Content Creation</p>
                        </a>
                        <a href="">
                            <p>Gaming</p>
                        </a>

                    </div>
                    <div class="address footudiv">
                        <h3>VISIT US</h3>
                        <p>1778,2nd Lane, E Ward<br> Mahalaxminagar,<br> Rajarampuri, Kolhapur,<br> Maharashtra 416201
                        </p>
                    </div>
                </div>
                <div class="lower">
                    <p class="Copyright">Copyright Prat Studio 2023</p>
                </div>
            </div>
        </div>
    </div>
    

</body>

</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pcgarage";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = isset($_POST['username']) ? $_POST['username'] : '';
    $number = isset($_POST['mobnum']) ? $_POST['mobnum'] : '';
    $password = isset($_POST['pass']) ? $_POST['pass'] : '';


    $sql = "INSERT INTO `registerform` (`username`, `mobile`, `password`) VALUES ('$name', '$number', '$password');";

    if ($conn->query($sql) === true) {
        echo "New record added";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>