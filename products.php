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
            <i class="fa fa-shop"></i> TWF mobile store
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

    <div class="sidebar">
        <div id="side-bar" class="fa fa-times"></div>
        <div class="user">
            <img src="images/Fepa1.png" alt="">
            <h3>brayce fepa</h3>
            <a href="#">log out</a>
        </div>

        <nav class="navbar">
            <a href="home.html"> <i class="fa fa-angle-right"></i> home </a>
            <a href="about.html"> <i class="fa fa-angle-right"></i> about </a>
            <a href="products.html"> <i class="fa fa-angle-right"></i> products </a>
            <a href="contacts.html"> <i class="fa fa-angle-right"></i> contacts </a>
            <a href="login.html"> <i class="fa fa-angle-right"></i> login </a>
            <a href="register.html"> <i class="fa fa-angle-right"></i> register </a>
            <a href="cart.html"> <i class="fa fa-angle-right"></i> cart </a>
        </nav>
    </div>

    <!-- Sidebar section ends  -->




    <!-- Footer section starts -->
    <section class="quick-links">
        <a href="home.html" class="logo"> <i class="fa fa-shop"></i> TWF mobile store </a>

        <div class="links">
            <a href="home.html"> home </a>
            <a href="about.html"> about </a>
            <a href="products.html"> products </a>
            <a href="contacts.html"> contacts </a>
            <a href="login.html"> login </a>
            <a href="register.html"> register </a>
            <a href="cart.html"> cart </a>
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
    <script src="js/script.js"></script>
</body>

</html>