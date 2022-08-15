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


if (isset($_POST['update_cart'])) {
    $update_quantity = $_POST['cart_quantity'];
    $update_id = $_POST['cart_id'];

    $db->query("UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
    $messages[] = 'cart quantity updated successfully !';
}

if (isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    $db->query("DELETE FROM `cart` WHERE id = '$remove_id'") or die('query failed');
    header('location:cart.php');
}

if (isset($_GET['deleteall'])) {
    $db->query("DELETE  FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
    header('location:cart.php');
}

date_default_timezone_set('Africa/Douala');
$date = date('d-m-y h:i:s');

if (isset($_GET['pay'])) {
    header('location:https://s.htr.cm/gHyz');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>panier</title>

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

    <?php

    if (isset($messages)) {
        foreach ($messages as $message) {
            echo '<div class="messages" onclick="this.remove();">' . $message . '</div>';
        }
    }

    ?>

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
                            <a class="nav-link active" href="cart.php">panier</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacts.php">contacts</a>
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

    <!-- shopping-cart section-->

    <section class="shopping-cart">
        <h1 class="heading">vos <span>produits</span> </h1>

        <div class="box-container">

            <?php

            $statement = $db->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM `cart` WHERE user_id= '$user_id'") or die('query failed');
            $statement->execute();
            $statement = $db->prepare("SELECT FOUND_ROWS()");
            $statement->execute();
            $select_cart = $statement->fetchColumn();

            if ($select_cart > 0) {

                $carts = $db->query("SELECT * FROM `cart` WHERE user_id = '$user_id'")->fetchAll();

                $total = 0;
                foreach ($carts as $cart) {
                    cart($cart['product_img'], $cart['name'], $cart['price'], $cart['quantity'], $cart['id']);

                    $total += $cart['price'] * $cart['quantity'];
                }
            }

            ?>
        </div>

        <div class="cart-total">
            <h3>total : <span> <?php echo isset($total) ? $total . 'fcfa' : ''; ?> </span></h3>
            <h3>reduction : <span>10000 fcfa</span></h3>
            <h3>prix définitif : <span> <?php echo isset($total) ? $stotal = ($total - 10000) . 'fcfa' : '' ?> </span></h3>
            <form action="" method="post" class="form-cart">
                <a href="cart.php?deleteall" class="btn <?php echo isset($total) ? '' : 'disabled'; ?>" onclick=" return confirm('voulez vous vraiment vider le pannier ?');">vider le panier</a>
                <a href="cart.php?pay" class="btn <?php echo isset($total) ? '' : 'disabled'; ?>">Payer</a>
            </form>
            <?php
            if (isset($_GET['pay'])) {
                $db->query("INSERT INTO `commandes` (date_commande, paiement, user_id, id_client) VALUES ('$date', '$stotal', '$user_id', '$user_id')");
            }

            ?>
        </div>

    </section>


    <!-- Sidebar section starts  -->

    <div class="side-bar">

        <div id="close-side-bar" class="fa fa-times"></div>

        <div class="user">
            <img src="uploads/<?php
                                $row = $db->query("SELECT * FROM `clients` WHERE id_client = '$user_id'")->fetch(PDO::FETCH_ASSOC);
                                echo $row['client_img'];
                                ?>" alt="">
            <h3><?php echo $row['name']; ?></h3>
            <a href="register.php?logout=<?php echo $user_id; ?>">déconnexion</a>
        </div>

        <nav class="navbar">
            <div>
                <a href="home.php"> <i class="fa fa-angle-right"></i> accueil</a>
                <a href="about.php"> <i class="fa fa-angle-right"></i> à propos</a>
                <a href="products.php"> <i class="fa fa-angle-right"></i> produits</a>
                <a href="contacts.php"> <i class="fa fa-angle-right"></i> contacts</a>
                <a href="login.php"> <i class="fa fa-angle-right"></i> connexion</a>
                <a href="register.php"> <i class="fa fa-angle-right"></i> inscription</a>
                <a href="cart.php"> <i class="fa fa-angle-right"></i> panier</a>
            </div>
        </nav>

    </div>

    <!-- Sidebar section ends  -->




    <!-- Footer section starts -->
    <section class="quick-links">
        <a href="home.html" class="logo"> <i class="fa fa-shop"></i> BAMBU </a>

        <div class="links">
            <a href="home.php"> accueil </a>
            <a href="about.php"> à propos </a>
            <a href="products.php"> produits </a>
            <a href="contacts.php"> contacts </a>
            <a href="login.php"> connexion </a>
            <a href="register.php"> register </a>
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