<?php

session_start();
include 'php/config.php';
require_once('./php/components.php');



if (isset($_POST['submit'])) {



    $statement = $db->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM `clients` WHERE email=:mail AND password =:pass") or die('query failed');
    $statement->bindParam(':mail', $email);
    $statement->bindParam(':pass', $pass);
    $email = $_POST['email'];
    $pass =  md5($_POST['password']);


    $statement->execute();
    $statement = $db->prepare("SELECT FOUND_ROWS()");
    $statement->execute();
    $select_user = $statement->fetchColumn();


    if ($select_user > 0) {
        $statement = $db->prepare("SELECT * FROM `clients` WHERE email=:mail AND password =:pass") or die('query failed');

        $statement->execute([
            'mail' => $email,
            'pass' => $pass,
        ]);

        $row = $statement->fetch(PDO::FETCH_ASSOC);
        $_SESSION['user_id'] = $row['id_client'];
        header('location:home.php');
    } else {
        $messages[] = 'mot de passe ou email incorrects!';
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>connexion</title>

    <!-- Font awesom cdn links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Custom css path -->
    <link rel="stylesheet" href="css/style.css" />


</head>

<body>

    <?php

    if (isset($messages)) {
        foreach ($messages as $message) {
            echo '<div class="messages" onclick="this.remove();">' . $message . '</div>';
        }
    }

    ?>
    <!-- Header section starts  -->

    <header class="header">
        <a href="home.php" class="logo">
            <i class="fa fa-shop"></i> BAMBU
        </a>

        <!-- <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="search here..." />
            <label for="search-box" class="fa fa-search"></label>
        </form> -->

        <!-- <div class="icons">
            <div id="menu-btn" class="fa fa-bars"></div>
            <div id="search-btn" class="fa fa-search"></div>
            <a href="login.php" class="fa fa-user"></a>
            <a href="#" class="fa fa-heart"></a>

            <span class="cart">
                <a href="cart.php" class="fa fa-shopping-cart"></a>
                <span id="number">0</span>
            </span>

        </div> -->
    </header>

    <!-- Header section ends  -->



    <!-- Sidebar section starts  -->

    <!-- <div class="side-bar">

        <div id="close-side-bar" class="fa fa-times"></div>

        <div class="user">
            <img src="images/user-img.png" alt="">
            <h3>user name</h3>
            <a href="#">Logout</a>
        </div>

        <nav class="navbar">
            <div>
                <a href="home.php"> <i class="fa fa-angle-right"></i> home</a>
                <a href="about.php"> <i class="fa fa-angle-right"></i> about</a>
                <a href="products.php"> <i class="fa fa-angle-right"></i> products</a>
                <a href="contacts.php"> <i class="fa fa-angle-right"></i> contacts</a>
                <a href="login.php"> <i class="fa fa-angle-right"></i> login</a>
                <a href="register.php"> <i class="fa fa-angle-right"></i> register</a>
                <a href="cart.php"> <i class="fa fa-angle-right"></i> cart</a>
            </div>
        </nav>

    </div> -->

    <!-- Sidebar section ends  -->


    <!-- login form section starts  -->

    <section class="login">

        <form action="" method="POST">
            <h3>connectez-vous </h3>
            <input type="email" name="email" placeholder="entrer votre email" id="" class="box">
            <input type="password" name="password" placeholder="entrer votre mot de passe" id="" class="box">
            <div class="remember">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">me rappeler</label>
            </div>
            <input type="submit" name="submit" value="login now" class="btn btn-primary">
            <p>vous n'avez pas de compte ?</p>
            <a href="register.php" class="btn link">enregistrer vous</a>
        </form>

    </section>

    <!-- login form section ends  -->


    <!-- Footer section starts -->
    <!-- <section class="quick-links">
        <a href="home.html" class="logo"> <i class="fa fa-shop"></i> BAMBU </a>

        <div class="links">
            <a href="home.php"> home </a>
            <a href="about.php"> about </a>
            <a href="products.php"> products </a>
            <a href="contacts.php"> contacts </a>
            <a href="login.php"> login </a>
            <a href="register.php"> register </a>
            <a href="cart.php"> cart </a>
        </div>

        <div class="share">
            <a href="#" class="fab fa-facebook"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
    </section> -->

    <section class="credit">
        <p>fait par les <span>étudiants de TWF</span> | tous droits reservés!</p>
        <img src="images/card_img.jpg" alt="" />
    </section>
    <!-- Footer section ends -->




    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- Custom js file path -->
    <script src="js/jscript.js"></script>
</body>

</html>