<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About</title>

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
    <a href="home.html" class="logo">
      <i class="fa fa-shop"></i> BAMBU
    </a>

    <form action="" class="search-form">
      <input type="search" id="search-box" placeholder="search here..." />
      <label for="search-box" class="fa fa-search"></label>
    </form>

    <div class="icons">
      <div id="menu-btn" class="fa fa-bars"></div>
      <div id="search-btn" class="fa fa-search"></div>
      <a href="login.html" class="fa fa-user"></a>
      <a href="#" class="fa fa-heart"></a>

      <span class="cart">
        <a href="cart.html" class="fa fa-shopping-cart"></a>
        <span id="number">0</span>
      </span>

    </div>
  </header>

  <!-- Header section ends  -->



  <!-- Sidebar section starts  -->

  <div class="side-bar">

    <div id="close-side-bar" class="fa fa-times"></div>

    <div class="user">
      <img src="images/user-img.png" alt="">
      <h3>user 1</h3>
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

  </div>

  <!-- Sidebar section ends  -->


  <section class="about">

    <div class="image">
      <img src="images/about-img.png" alt="">
    </div>

    <div class="content">
      <h3>our story</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, quidem earum voluptatum perferendis odio dolore recusandae ipsa, eveniet dolor magni maxime maiores. Doloremque unde voluptatibus vitae sapiente quasi quis assumenda!</p>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia deserunt totam et mollitia omnis, asperiores, distinctio nobis alias voluptatem, obcaecati saepe! Totam et eaque at amet eligendi esse consequuntur ducimus.</p>
      <a href="#" class="btn">read more</a>
    </div>
  </section>

  <section class="faq">

    <h1 class="heading">questions & <span>answers</span></h1>


    <div class="accordion-container">

      <div class="accordion">
        <div class="accordion-heading">
          <h3>how to make websites?</h3>
          <i class="fas fa-angle-down"></i>
        </div>
        <p class="accordion-content">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt consectetur eaque delectus repudiandae reprehenderit doloremque rerum autem enim quo ex dolorum eligendi ipsum impedit saepe, molestiae quas quaerat voluptatem natus.
        </p>

      </div>

      <div class="accordion">
        <div class="accordion-heading">
          <h3>how to place order online?</h3>
          <i class="fas fa-angle-down"></i>
        </div>
        <p class="accordion-content">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt consectetur eaque delectus repudiandae reprehenderit doloremque rerum autem enim quo ex dolorum eligendi ipsum impedit saepe, molestiae quas quaerat voluptatem natus.
        </p>

      </div>

      <div class="accordion">
        <div class="accordion-heading">
          <h3>how to pay online?</h3>
          <i class="fas fa-angle-down"></i>
        </div>
        <p class="accordion-content">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt consectetur eaque delectus repudiandae reprehenderit doloremque rerum autem enim quo ex dolorum eligendi ipsum impedit saepe, molestiae quas quaerat voluptatem natus.
        </p>

      </div>

      <div class="accordion">
        <div class="accordion-heading">
          <h3>Is online payment safe?</h3>
          <i class="fas fa-angle-down"></i>
        </div>
        <p class="accordion-content">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt consectetur eaque delectus repudiandae reprehenderit doloremque rerum autem enim quo ex dolorum eligendi ipsum impedit saepe, molestiae quas quaerat voluptatem natus.
        </p>

      </div>

      <div class="accordion">
        <div class="accordion-heading">
          <h3>How to contact service center?</h3>
          <i class="fas fa-angle-down"></i>
        </div>
        <p class="accordion-content">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt consectetur eaque delectus repudiandae reprehenderit doloremque rerum autem enim quo ex dolorum eligendi ipsum impedit saepe, molestiae quas quaerat voluptatem natus.
        </p>

      </div>
    </div>

  </section>

  <section class="review">

    <h1 class="heading">clients <span>review</span></h1>

    <div class="swiper review-slider">

      <div class="swiper-wrapper">

        <div class="swiper-slide slide">
          <img src="images/pic-1.png" alt="">
          <h3>John Doe</h3>
          <span>designer</span>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum eaque explicabo aperiam facere ab! Facere, ipsa, accusamus ipsam repellat iusto, quis laboriosam pariatur exercitationem ducimus officia temporibus quasi quia itaque?</p>
        </div>

        <div class="swiper-slide slide">
          <img src="images/pic-2.png" alt="">
          <h3>John Doe</h3>
          <span>designer</span>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum eaque explicabo aperiam facere ab! Facere, ipsa, accusamus ipsam repellat iusto, quis laboriosam pariatur exercitationem ducimus officia temporibus quasi quia itaque?</p>
        </div>

        <div class="swiper-slide slide">
          <img src="images/pic-3.png" alt="">
          <h3>John Doe</h3>
          <span>designer</span>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum eaque explicabo aperiam facere ab! Facere, ipsa, accusamus ipsam repellat iusto, quis laboriosam pariatur exercitationem ducimus officia temporibus quasi quia itaque?</p>
        </div>

        <div class="swiper-slide slide">
          <img src="images/pic-4.png" alt="">
          <h3>John Doe</h3>
          <span>designer</span>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum eaque explicabo aperiam facere ab! Facere, ipsa, accusamus ipsam repellat iusto, quis laboriosam pariatur exercitationem ducimus officia temporibus quasi quia itaque?</p>
        </div>

        <div class="swiper-slide slide">
          <img src="images/pic-5.png" alt="">
          <h3>John Doe</h3>
          <span>designer</span>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum eaque explicabo aperiam facere ab! Facere, ipsa, accusamus ipsam repellat iusto, quis laboriosam pariatur exercitationem ducimus officia temporibus quasi quia itaque?</p>
        </div>

        <div class="swiper-slide slide">
          <img src="images/pic-6.png" alt="">
          <h3>John Doe</h3>
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
  </section>

  <section class="credit">
    <p>made by <span>TWF students</span> | all right reserved!</p>
    <img src="images/card_img.png" alt="" />
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