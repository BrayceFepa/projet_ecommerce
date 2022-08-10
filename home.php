<?php
session_start();
require_once('./php/components.php');
include('php/config.php');

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

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
    <title>accueil</title>

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
                            <a class="nav-link active" aria-current="page" href="home.php">Accueil</a>
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
                            <a class="nav-link" href="#">made in cameroon</a>
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


    <!-- Sidebar section starts -->

    <div class="side-bar">

        <div id="close-side-bar" class="fa fa-times"></div>

        <div class="user">
            <img src="uploads/<?php
                                // $row = $db->query("SELECT * FROM `clients` WHERE id_client = '$user_id'")->fetch(PDO::FETCH_ASSOC);
                                // echo $row['client_img'];
                                ?>" alt="">
            <h3><?php echo $row['name']; ?></h3>
            <a href="register.php?logout=<?php echo $user_id; ?>">déconnexion</a>
        </div>

        <!-- <nav class="navbar">
            <div>
                <a href="home.php"> <i class="fa fa-angle-right"></i> accueil</a>
                <a href="about.php"> <i class="fa fa-angle-right"></i> à propos</a>
                <a href="products.php"> <i class="fa fa-angle-right"></i> produits</a>
                <a href="contacts.php"> <i class="fa fa-angle-right"></i> contacts</a>
                <a href="login.php"> <i class="fa fa-angle-right"></i> connexion</a>
                <a href="register.php"> <i class="fa fa-angle-right"></i> inscription</a>
                <a href="cart.php"> <i class="fa fa-angle-right"></i> panier</a>
            </div>
        </nav> -->

    </div>

    <!-- Sidebar section ends -->



    <!-- Home section starts -->

    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/home-img-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <span>reduction de 50%</span>
                        <h3>Smartphones</h3>
                        <a href="#" class="btn">acheter</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/home-img-2.jpg" alt="">
                    </div>
                    <div class="content">
                        <span>reduction de 50%</span>
                        <h3>montre connectée</h3>
                        <a href="#" class="btn">acheter</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/home-img-3.jpg" alt="">
                    </div>
                    <div class="content">
                        <span>reduction de 50%</span>
                        <h3>Casque audio</h3>
                        <a href="#" class="btn">acheter</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>


        </div>

    </section>


    <!-- Home section ends -->

    <!-- Banner section starts -->


    <section class="banner">

        <div class="box-container">

            <a href="#" class="box">
                <img src="images/banner-1.jpg" alt="">
                <div class="content">
                    <span>offre spéciale</span>
                    <h3>reduction de 50%</h3>
                </div>
            </a>


            <a href="#" class="box">
                <img src="images/banner-2.jpg" alt="">
                <div class="content">
                    <span>offre spéciale</span>
                    <h3>reduction de 50%</h3>
                </div>
            </a>


            <a href="#" class="box">
                <img src="images/banner-3.jpg" alt="">
                <div class="content">
                    <span>offre spéciale</span>
                    <h3>reduction de 50%</h3>
                </div>
            </a>

        </div>

    </section>


    <!-- Banner section ends -->

    <!-- arrivals section starts -->

    <section class="arrivals">

        <h1 class="heading"> <span>nouveautés</span></h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/arrival-1.jpg" class="main-img" alt="">
                    <img src="images/arrival-1-hover.jpg" class="hover-img" alt="">
                </div>
                <div class="content">
                    <h3>Television HD</h3>
                    <div class="price">124000 FCFA <span>150000 FCFA</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/arrival-2.jpg" class="main-img" alt="">
                    <img src="images/arrival-2-hover.jpg" class="hover-img" alt="">
                </div>
                <div class="content">
                    <h3>laptop lenovo </h3>
                    <div class="price">150000 FCFA <span>180000 FCFA</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/arrival-3.jpg" class="main-img" alt="">
                    <img src="images/arrival-3-hover.jpg" class="hover-img" alt="">
                </div>
                <div class="content">
                    <h3>smartphone</h3>
                    <div class="price">80000 FCFA <span>100000 FCFA</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/arrival-4.jpg" class="main-img" alt="">
                    <img src="images/arrival-4-hover.jpg" class="hover-img" alt="">
                </div>
                <div class="content">
                    <h3>imprimante</h3>
                    <div class="price">200000 FCFA <span>250000 FCFA</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/arrival-5.jpg" class="main-img" alt="">
                    <img src="images/arrival-5-hover.jpg" class="hover-img" alt="">
                </div>
                <div class="content">
                    <h3>casque</h3>
                    <div class="price">15000 FCFA <span>20000 FCFA</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/arrival-6.jpg" class="main-img" alt="">
                    <img src="images/arrival-6-hover.jpg" class="hover-img" alt="">
                </div>
                <div class="content">
                    <h3>haut-parleur</h3>
                    <div class="price">40000 FCFA <span>50000 FCFA</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
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