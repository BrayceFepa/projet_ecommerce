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
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>à propos</title>

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
              <a class="nav-link active" href="about.php">à propos</a>
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


  <section class="about">

    <div class="image">
      <img src="images/about-img.jpg" alt="">
    </div>

    <div class="content">
      <h3>Notre Histoire</h3>
      <p>Avec l'avancee des nouvelles technologies,le Monde se numerise avec plus d'un milliard de personnes connectees via les outils informatiques.Mais il existe aussi pres d'un million qui n'y ont pas acces ou ne sachant pas les utiliser.C'est pour palier a ce probleme que BAMBU a ete cree.</p>
      <p> Fonde en 2022 par des developpeurs juniors motives,BAMBU est un site de e-commerce dedie a la vente d'outils numeriques a des prix accessibles a tous et qui propose des conseils avises sur leur utilisation.</p>
      <a href="#" class="btn">En savoir plus</a>
    </div>
  </section>


  <section class="faq">


    <h1 class="heading">Questions & <span>Reponses</span></h1>



    <div class="accordion-container">

      <div class="accordion">

        <div class="accordion-heading">
          <h3>OBJECTIFS</h3>

          <i class="fas fa-angle-down"></i>
        </div>
        <p class="accordion-content">
          Nous proposons a des prix abordables des appareils numeriques simples d'usage et de meilleure qualite. De plus,pour chaque produit achete, nous proposons une fiche d'utilisation simple et concise pour ceux n'ayant pas de reelles connaissances en informatique.Car,notre but principal est de permettre a tous,debutants et connaisseurs,d'entrer de plein pied dans l'univers du numerique.
        </p>

      </div>

      <div class="accordion">
        <div class="accordion-heading">
          <h3>PRODUITS</h3>
          <i class="fas fa-angle-down"></i>
        </div>
        <p class="accordion-content">
          Nous proposons a la vente des produits des plus grandes marques presentes sur le marche.Ordinateurs,tablettes,smartphones,appareils photo,camera,casques,etc.Des produits d'excellente qualite,efficaces et simples a utiliser,avec des prix abordables et adaptes a la realite socio-economique du pays.
        </p>

      </div>

      <div class="accordion">
        <div class="accordion-heading">
          <h3>PAIEMENTS</h3>
          <i class="fas fa-angle-down"></i>
        </div>
        <p class="accordion-content">
          Les paiements se font essentiellement en ligne,via smartphones ou autre appareils connectes,par carte bancaire VISA,MASTERCARD,AMERICAN EXPRESS,PAYPAL,ORANGE MONEY,MTN MOBILE MONEY.
        </p>

      </div>

      <div class="accordion">
        <div class="accordion-heading">
          <h3>SECURITE</h3>
          <i class="fas fa-angle-down"></i>
        </div>
        <p class="accordion-content">
          La securite des paiements et des transactions constitue notre principale priorite.Aussi,quelque soit l'endroit ou sera effectue le paiement,au Cameroun ou a l'etranger,nous respectons les normes de securite relatifs au paiement en ligne imposees par les instances des differents Etats,tel que l'Afrique Centrale ou nous appliquons le Règlement du 21 décembre 2018 relatif aux services de paiement dans la
          zone CEMAC adoptee le 21/12/2018 a Yaoundé,ainsi que par celle de l’industrie des cartes de paiement(Payment Card Industry Data Security Standard ou PCI DSS),avec une certification qui atteste de la securite de vos donnees bancaires selon les 12 Exigences de la conformite PCI DSS.
        </p>

      </div>

      <div class="accordion">
        <div class="accordion-heading">
          <h3>CONTACTS</h3>
          <i class="fas fa-angle-down"></i>
        </div>
        <p class="accordion-content">
          Nous sommes disponibles 24/7 avec un service clientele a votre ecoute, quelque soit votre preocuppation.Vous pouvez nous joindre par:<br>
          Telephone:237 699 92 42 43<br>
          Email:Bambu@gmail.com<br>
          Vous pouvez aussi nous suivre sur nos comptes Facebook,Twitter,linkedin et Instagram.
        </p>

      </div>
    </div>








    </div>

  </section>



  </section>


  <section class="review">

    <h1 class="heading"> <span>témoignages</span> des clients</h1>

    <div class="swiper review-slider">

      <div class="swiper-wrapper">

        <div class="swiper-slide slide">
          <img src="images/pic-1.png" alt="">
          <h3>client 1</h3>
          <span>designer</span>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum eaque explicabo aperiam facere ab! Facere, ipsa, accusamus ipsam repellat iusto, quis laboriosam pariatur exercitationem ducimus officia temporibus quasi quia itaque?</p>
        </div>

        <div class="swiper-slide slide">
          <img src="images/pic-2.png" alt="">
          <h3>client 2</h3>
          <span>designer</span>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum eaque explicabo aperiam facere ab! Facere, ipsa, accusamus ipsam repellat iusto, quis laboriosam pariatur exercitationem ducimus officia temporibus quasi quia itaque?</p>
        </div>

        <div class="swiper-slide slide">
          <img src="images/pic-3.png" alt="">
          <h3>client 3</h3>
          <span>designer</span>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum eaque explicabo aperiam facere ab! Facere, ipsa, accusamus ipsam repellat iusto, quis laboriosam pariatur exercitationem ducimus officia temporibus quasi quia itaque?</p>
        </div>

        <div class="swiper-slide slide">
          <img src="images/pic-4.png" alt="">
          <h3>client 4</h3>
          <span>designer</span>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum eaque explicabo aperiam facere ab! Facere, ipsa, accusamus ipsam repellat iusto, quis laboriosam pariatur exercitationem ducimus officia temporibus quasi quia itaque?</p>
        </div>

        <div class="swiper-slide slide">
          <img src="images/pic-5.png" alt="">
          <h3>client 5</h3>
          <span>designer</span>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum eaque explicabo aperiam facere ab! Facere, ipsa, accusamus ipsam repellat iusto, quis laboriosam pariatur exercitationem ducimus officia temporibus quasi quia itaque?</p>
        </div>

        <div class="swiper-slide slide">
          <img src="images/pic-6.png" alt="">
          <h3>client 6</h3>
          <span>designer</span>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum eaque explicabo aperiam facere ab! Facere, ipsa, accusamus ipsam repellat iusto, quis laboriosam pariatur exercitationem ducimus officia temporibus quasi quia itaque?</p>
        </div>


      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

    </div>

  </section>


  <!-- Footer section starts -->
  <section class="quick-links">
    <a href="home.html" class="logo"> <i class="fa fa-shop"></i> BAMBU </a>

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