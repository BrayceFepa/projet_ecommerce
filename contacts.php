<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>

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


    <!-- contact info section starts -->
<section class="infos-container">

<div class="box-container">

<div class="box">
    <i class="fas fa-map"></i>
    <h3>adresse</h3>
    <p>mumbai, india - 400104</p>
</div>

<div class="box">
    <i class="fas fa-envelope"></i>
    <p>shaikhanaa@gmail.com</p>
    <p> anasbhai@gmail.com</p>
</div>

<div class="box">
    <i class="fas fa-phone"></i>
    <h3>number</h3>
    <p>+123-456-7890</p>
    <p>+111-222-3333</p>
</div>

</div>

</section>

<!-- contact info section ends -->


<!-- contact section starts -->
<section class="contact">
    <form action="">
        <h3>get in touch</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic unde tempore cum sapiente repudiandae,
             eligendi nisi vel fugit eos quibusdam.</p>
             <div class="inputBox">
                 <input type="text" placeholder="your name">
                 <input type="email" placeholder="your email">
             </div>

             <div class="inputBox">
                 <input type="phone" placeholder="your phone">
                 <input type="text" placeholder="subject">
             </div>

             <textarea name="" placeholder="your message" id="" cols="30" rows="10"></textarea>
             <input type="submit" value="send message" class="btn btn-primary"> 
    </form>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15076.895920873152!2d72.83196972692602!3d19.14167056419408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Bombay%2C%20Maharashtra%20400047%2C%20Inde!5e0!3m2!1sfr!2scm!4v1659483036709!5m2!1sfr!2scm"
     allowfullscreen="" loading="lazy"></iframe>

</section>

<!-- contact section ends -->



<!-- newsletter section starts -->

<section class="newsletter">
    <div class="content">
        <h3>newsletter</h3>
        <p>suscribe for wekly newsletter.</p>
    </div>
     
    <form action="">
    <input type="email" name=" " placeholder="enter your email"  id=" " class=email>
    <input type="submit" value="subscribe" class="btn">
    </form>  
</section>
<!-- newsletter section ends -->



    <!-- Footer section starts -->
    <section class="quick-links">
        <a href="home.html" class="logo"> <i class="fa fa-shop"></i> TWF mobile store </a>

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