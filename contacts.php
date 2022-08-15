<?php
session_start();
require_once('./php/components.php');
include('php/config.php');
$user_id = $_SESSION['user_id'];

// if (!isset($user_id)) {
//     header('location:login.php');
// }

if (isset($_GET['logout'])) {
    unset($user_id);
    session_destroy();
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contacts</title>

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
    <!-- Header section starts  -->

    <header class="header">

        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand logo" href="home.php">
                    <i class="fa fa-shop"></i> BAMBU
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="home.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">à propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products.php">produits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php">panier</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="contacts.php">contacts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cmr.php">innovations</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="search here..." />
            <label for="search-box" class="fa fa-search"></label>
        </form>

        <div class="icons">

            <div id="search-btn" class="fa fa-search"></div>
            <a href="login.php" class="fa fa-user"></a>

            <span class="cart">
                <a href="cart.php" class="fa fa-shopping-cart"></a>
                <span id="number">
                    <?php
                    $carts = $db->query("SELECT * FROM `cart` WHERE user_id = '$user_id'")->fetchAll();
                    $count = 0;
                    foreach ($carts as $cart) {
                        $count += $cart['quantity'];
                    }
                    echo $count;
                    ?>
                </span>
            </span>
            <a href="" class="pay-btn">payer</a>

        </div>

        <div class="user">
            <img src="uploads/<?php
                                $row = $db->query("SELECT * FROM `clients` WHERE id_client = '$user_id'")->fetch(PDO::FETCH_ASSOC);
                                echo $row['client_img'];
                                ?>" alt="">
            <h3><?php echo $row['name']; ?></h3>
            <a href="register.php?logout=<?php echo $user_id; ?>">déconnexion</a>
        </div>

    </header>

    <!-- Header section ends  -->


    <!-- contact info section starts -->
    <section class="infos-container">

        <div class="box-container">

            <div class="box">
                <i class="fas fa-map"></i>
                <h3>adresse</h3>
                <p>Yaounde, cameroun - VG69+685</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <p>laichamouhamankoura@gmail.com</p>
                <p>laichaMK@gmail.com</p>
            </div>

            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>téléphones</h3>
                <p>+237-699-295-336</p>
                <p>+237-654-831-981</p>
            </div>

        </div>

    </section>

    <!-- contact info section ends -->


    <!-- contact section starts -->
    <section class="contact">
        <form action="">
            <h3>laissez nous un message</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic unde tempore cum sapiente repudiandae,
                eligendi nisi vel fugit eos quibusdam.</p>
            <div class="inputBox">
                <input type="text" placeholder="votre nom">
                <input type="email" placeholder="votre email">
            </div>

            <div class="inputBox">
                <input type="phone" placeholder="téléphone">
                <input type="text" placeholder="objet">
            </div>

            <textarea name="" placeholder="votre message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="envoyer" class="btn">
        </form>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63694.159013965655!2d11.478759992525932!3d3.8348650805299562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x108bcf08f91e51a3%3A0xf6edc284684d1184!2sINFFDP!5e0!3m2!1sfr!2scm!4v1659693464930!5m2!1sfr!2scm" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


    </section>

    <!-- contact section ends -->



    <!-- newsletter section starts -->

    <section class="newsletter">
        <div class="content">
            <h3>newsletter</h3>
            <p>abonnement hebdomadaire</p>
        </div>

        <form action="">
            <input type="email" name=" " placeholder="votre email" id=" " class="email">
            <input type="submit" value="souscrire" class="btn">
        </form>
    </section>
    <!-- newsletter section ends -->



    <!-- Footer section starts -->
    <section class="quick-links">
        <a href="home.html" class="logo"> <i class="fa fa-shop"></i> BAMBU </a>

        <div class="links">
            <a href="home.php"> accueil </a>
            <a href="about.php"> à propos </a>
            <a href="products.php"> produits </a>
            <a href="contacts.php"> contacts </a>
            <a href="login.php"> connexion </a>
            <a href="register.php"> inscription</a>
            <a href="cart.php"> panier </a>
        </div>

        <div class="share">
            <a href="#" class="fab fa-facebook"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
    </section>

    <section class="credit">
        <p>fait par les<span> étudiants de TWF</span> | tous droits reservés!</p>
        <img src="images/card_img.jpg" alt="" />
    </section>
    <!-- Footer section ends -->


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- Custom js file path -->
    <script src="js/jscript.js"></script>
</body>

</html>