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
    <title>Cameroun</title>

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
                            <a class="nav-link" href="contacts.php">contacts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">innovations</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="rechercher" />
            <label for="search-box" class="fa fa-search"></label>
        </form>

        <div class="icons">
            <!-- <div id="menu-btn" class="fa fa-bars"></div> -->
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
            <a href="home?pay" class="pay-btn">payer</a>

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


    <!-- Home section starts -->

    <section class="home cmr">



        <div class="swiper cmr">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/Yannick-Edouard-Mekongopi.jpg" alt="">
                    </div>
                    <div class="content">
                        <span>Yannick Edouard Mekongopi</span>
                        <span>
                            <p>le robot Pi-car b Mars rover</p>
                        </span>
                        <h3>la surveillance (sécurité) la médecine</h3>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/tchaks-tv2.jpg" alt="">
                    </div>
                    <div class="content">
                        <span>Colbert Tchakoute</span>
                        <span>
                            <p>LE TCHAK’S TV GUARD</p>
                        </span>
                        <h3>contourner les surtensions de la foudre, les fluctuations du courant électrique partant des délestages récurrents dans toutes les régions. </h3>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/Arthur-Zang-cardio.jpg" alt="">
                    </div>
                    <div class="content">
                        <span>Arthur Zang</span>
                        <span>
                            <p>Le cardiopad</p>
                        </span>
                        <h3>la première tablette médicale d’Afrique voit le jour</h3>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/Nervis-imprimante-3D.jpeg" alt="">
                    </div>
                    <div class="content">
                        <span>Nervis Tetsop Nzometiah</span>
                        <span>
                            <p>Imprimante 3D</p>
                        </span>
                        <h3>Imprimante camerounaise à base des déchets électroniques</h3>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>


        </div>

    </section>


    <!-- Home section ends -->


    <!-- arrivals section starts -->

    <section class="arrivals cmr">
        <h1 class="heading">Innovations <span>camerounaises</span></h1>
        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/abccode.png" class="main-img" alt="">
                    <img src="images/Arielle-Kitio.png" class="hover-img" alt="">
                </div>
                <div class="content">
                    <h3>Arielle Kitio Tsamo</h3>
                    <div class="price">ABCcode : Langage de programmation pour enfants</span></div>
                </div>
            </div>


            <div class="box">
                <div class="image">
                    <img src="images/leelou.png" class="main-img" alt="">
                    <img src="images/Naomi-Dinamora.png" class="hover-img" alt="">
                </div>
                <div class="content">
                    <h3>Naomi Dinamora</h3>
                    <div class="price">Leelou Baby Food</span></div>
                </div>
            </div>


            <div class="box">
                <div class="image">
                    <img src="images/cardiopad.png" class="main-img" alt="">
                    <img src="images/Arthur-Zang-cardio.jpg" class="hover-img" alt="">
                </div>
                <div class="content">
                    <h3>Arthur Zang</h3>
                    <div class="price">le cardiopad</span></div>
                </div>
            </div>



            <div class="box">
                <div class="image">
                    <img src="images/robotpi.jpg" class="main-img" alt="">
                    <img src="images/Yannick-Edouard-Mekongopi.jpg" class="hover-img" alt="">
                </div>
                <div class="content">
                    <h3>Yannick Edouard Mekongopi </h3>
                    <div class="price">le robot Pi-car b Mars rover</div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/tchaks-tv2.jpg" class="main-img" alt="">
                    <img src="images/Colbert-Tchakoute.jpg" class="hover-img" alt="">
                </div>
                <div class="content">
                    <h3>Colbert Tchakoute</h3>
                    <div class="price">LE TCHAK’S TV GUARD (Régulateur de tension)</div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/Nervis-imprimante-3D.jpeg" class="main-img" alt="">
                    <img src="images/Nervis-Tetsop.jpeg" class="hover-img" alt="">
                </div>
                <div class="content">
                    <h3>Nervis Tetsop Nzometiah</h3>
                    <div class="price">Imprimante 3D</div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/drone-solaire.jpg" class="main-img" alt="">
                    <img src="images/taguia-kana.jpg" class="hover-img" alt="">
                </div>
                <div class="content">
                    <h3>Taguia Kana</h3>
                    <div class="price">Drone solaire</div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/patouma.jpg" class="main-img" alt="">
                    <img src="images/car-cmr.jpg" class="hover-img" alt="">
                </div>
                <div class="content">
                    <h3>Hamadou Patouma</h3>
                    <div class="price">Véhicule</div>
                </div>
            </div>

        </div>

    </section>

    <!-- arrivals section ends -->



    <!-- Footer section starts -->
    <section class="quick-links">
        <a href="home.html" class="logo"> <i class="fa fa-shop"></i> BAMBU</a>

        <div class="links">
            <a href="home.php"> accueil </a>
            <a href="about.php"> à propos </a>
            <a href="products.php"> produits </a>
            <a href="contacts.php"> contacts </a>
            <a href="login.php"> connexion </a>
            <a href="register.php"> inscription </a>
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
        <p>fait par les <span>étudiants de TWF</span> | tous droits reservés!</p>
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