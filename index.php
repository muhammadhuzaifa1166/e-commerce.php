<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="style.css">
        <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

        <title>PlantPalace Website</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="index.php" class="nav__logo">
                   PlantPalace
                </a>

               
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="index.php" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="abdout.php" class="nav__link">About</a>
                    </li>
                    <li class="nav__item">
                        <a href="add-to-cart.php" class="nav__link">Products</a>
                    </li>
                    <li class="nav__item">
                        <a href="faqs.php" class="nav__link">FAQs</a>
                    </li>
                    <li class="nav__item">
                        <a href="contact.php" class="nav__link">Contact Us</a>
                    </li>
                </ul>

                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>

                <div class="nav__btns">
                    <!-- Theme change button -->
                    <i class="ri-moon-line change-theme" id="theme-button"></i>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line"></i>
                    </div>
                </div>
            </nav>
        </header>

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <div class="home__container container grid">
                    <img src="img/home.png" alt="" class="home__img">

                    <div class="home__data">
                        <h1 class="home__title">
                            Plants will make <br> your life better
                        </h1>
                        <p class="home__description">
                            Create incredible plant design for your offices or apastaments. 
                            Add fresness to your new ideas.
                        </p>
                        <a href="#about" class="button button--flex" style="color: white;">
                            Explore <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </div>

                    <div class="home__social">
                        <span class="home__social-follow">Follow Us</span>

                        <div class="home__social-links">
                            <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="home__social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section container" id="about">
                <div class="about__container grid">
                    <img src="img/about.png" alt="" class="about__img">

                    <div class="about__data">
                        <h2 class="section__title about__title">
                            Who we really are & <br> why choose us
                        </h2>

                        <p class="about__description">
                            We have over 4000+ unbiased reviews and our customers 
                            trust our plant process and delivery service every time
                        </p>

                        <div class="about__details">
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                We always deliver on time.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                We give you guides to protect and care for your plants.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                We always come over for a check-up after sale.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                100% money back guaranteed.
                            </p>
                        </div>

                        <a href="add-to-cart.html" class="button button--flex"  class="nav__link" style="color: white;"  >
                            Shop Now <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </div>
                </div>
            </section>

            <!--==================== STEPS ====================-->
            <section class="steps section container">
                <div class="steps__bg">
                    <h2 class="section__title-center steps__title">
                        Steps to start your <br> plants off right
                    </h2>

                    <div class="steps__container grid">
                        <div class="steps__card">
                            <div class="steps__card-number">01</div>
                            <h3 class="steps__card-title">Choose Plant</h3>
                            <p class="steps__card-description">
                                We have several varieties plants you can choose from.
                            </p>
                        </div>

                        <div class="steps__card">
                            <div class="steps__card-number">02</div>
                            <h3 class="steps__card-title">Place an order</h3>
                            <p class="steps__card-description">
                                Once your order is set, we move to the next step which is the shipping.
                            </p>
                        </div>

                        <div class="steps__card">
                            <div class="steps__card-number">03</div>
                            <h3 class="steps__card-title">Get plants delivered</h3>
                            <p class="steps__card-description">
                                Our delivery process is easy, you receive the plant direct to your door.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== PRODUCTS ====================-->
            <section class="product section container" id="products">
                <h2 class="section__title-center">
                    Check out our <br> products
                </h2>

                <p class="product__description">
                    Here are some selected plants from our showroom, all are in excellent 
                    shape and has a long life span. Buy and enjoy best quality.
                </p>

                <div class="product__container grid">
                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="img/product1.png" alt="" class="product__img">

                        <h3 class="product__title">Cacti Plant</h3>
                        <span class="product__price">$19.99</span>

                        <button class="button--flex product__button add-to-cart-btn" onclick="addToCart()">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="img/product2.png" alt="" class="product__img">

                        <h3 class="product__title">Cactus Plant</h3>
                        <span class="product__price">$11.99</span>

                        <button class="button--flex product__button add-to-cart-btn" onclick="addToCart()">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="img/product3.png" alt="" class="product__img">

                        <h3 class="product__title">Aloe Vera Plant</h3>
                        <span class="product__price">$7.99</span>

                        <button class="button--flex product__button add-to-cart-btn" onclick="addToCart()">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="img/product4.png" alt="" class="product__img">

                        <h3 class="product__title">Succulent Plant</h3>
                        <span class="product__price">$5.99</span>

                        <button class="button--flex product__button add-to-cart-btn" onclick="addToCart()">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="img/product5.png" alt="" class="product__img">

                        <h3 class="product__title">Succulent Plant</h3>
                        <span class="product__price">$10.99</span>

                        <button class="button--flex product__button add-to-cart-btn" onclick="addToCart()">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="img/product6.png" alt="" class="product__img">

                        <h3 class="product__title">Green Plant</h3>
                        <span class="product__price">$8.99</span>

                        <button class="button--flex product__button add-to-cart-btn" onclick="addToCart()">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>
                </div>
            </section>
                                    <!---------------- add new buttom -------------------->



                                    <div id="view-more">
                    <a   href="add-to-cart.php"   style="color: white;"  class="button button--flex">
                    VIEW More <i class="ri-arrow-right-down-line button__icon"></i></a>
                 </div>                   
            <!--==================== QUESTIONS ====================-->
            <section class="questions section" id="faqs">
                <h2 class="section__title-center questions__title container">
                    Some common questions <br> were often asked
                </h2>

                <div class="questions__container container grid">
                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    My flowers are falling off or dying?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    What causes leaves to become pale?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    What causes brown crispy leaves?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    How do i choose a plant?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    How do I change the pots?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Why are gnats flying around my plant?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== CONTACT ====================-->
            <section class="contact section container" id="contact">                
                <div class="contact__container grid">
                    <div class="contact__box">
                        <h2 class="section__title">
                            Reach out to us today <br> via any of the given <br> information
                        </h2>

                        <div class="contact__data">
                            <div class="contact__information">
                                <h3 class="contact__subtitle">Call us for instant support</h3>
                                <span class="contact__description">
                                    <i class="ri-phone-line contact__icon"></i>
                                  <a href="contact.html" class="nav__link" >+111 111 111</a>
                                </span>
                            </div>

                            <div class="contact__information">
                                <h3 class="contact__subtitle">Write us by mail</h3>
                                <span class="contact__description">
                                    <i class="ri-mail-line contact__icon"></i>
                                   <a href="https://mail.google.com/mail/" target="_blank" class="nav__link"> Nerdherd@email.com</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <form action="" class="contact__form" id="contact-form" onsubmit="return validateForm();">

                    <div class="contact__inputs">
                        <div class="contact__content">
                            <input type="email" placeholder=" " class="contact__input" >
                            <label for="" class="contact__label">Email</label>
                           </div>
                    
                        <div class="contact__content">
                            <input type="text" placeholder=" " class="contact__input" >
                            <label for="" class="contact__label">Subject</label>
                        </div>

                        <div class="contact__content contact__area">
                            <textarea name="message" placeholder=" " class="contact__input"></textarea>                              
                            <label for="" class="contact__label">Message</label>
                        </div>
                    </div>                    
                        <button class="button button--flex">
                            Send Message
                            <i class="ri-arrow-right-up-line button__icon"></i>
                        </button>
                    </form>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__content">
                <a href="index.PHP" class="footer__logo">
                 Plantex
                </a>

                <h3 class="footer__title">
                    Subscribe to our Page Nerdherd <br> to stay update
                </h3>

                <div class="footer__subscribe">
                <form action="" class="contact__form" id="contact-form" onsubmit="return validateForm1();">
            <input type="email" placeholder="Enter your email" class="footer__input"  >

                    <button class="button button--flex footer__button" style=" margin-left: 264px;" >
                        Subscribe
                        <i class="ri-arrow-right-up-line button__icon"></i>
                    </button>
                </div>
           
              </form>
                 </div>


            <div class="footer__content">
                <h3 class="footer__title">Our Pages</h3>

                <ul class="footer__data">
                    <li  class="footer__information">
                        <a href="contact.html" class="nav__link"> Aptech</a></li>
                    <li  class="footer__information">
                        <a href="abdout.html" class="nav__link"> index</a></li>
                    <li  class="footer__information">
                        <a href="add-to-cart.html" class="nav__link"> Add-to-cart</a></li>
              
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Contact Us</h3>

                <ul class="footer__data">
                    <li class="footer__information"><a href="contact.html" class="nav__link" >111 111 111</a></li>
                    
                    <div class="footer__social">
                        <a href="https://www.facebook.com/" class="footer__social-link">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" class="footer__social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <a href="https://twitter.com/" class="footer__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">
                    We accept all credit cards
                </h3>

                <div class="footer__cards">
                    <img src="img/card1.png" alt="" class="footer__card">
                    <img src="img/card2.png" alt="" class="footer__card">
                    <img src="img/card3.png" alt="" class="footer__card">
                    <img src="img/card4.png" alt="" class="footer__card">
                </div>
            </div>
        </div>

        <p class="footer__copy">&#169; Nerdherd. All rigths reserved</p>
    </footer>

    <a href="#" class="scrollup" id="scroll-up"> 
        <i class="ri-arrow-up-fill scrollup__icon"></i>
    </a>
</body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    


</html>