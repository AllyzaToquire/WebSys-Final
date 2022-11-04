<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--========== BOX ICONS ==========-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <!--========== CSS ==========-->
        <link rel="stylesheet" href="libs/css/styles.css">
</head>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>

        <main class="l-main">
            <!--========== HOME ==========-->
            <section class="home" id="home">
                <div class="home__container bd-container bd-grid">
                    <div class="home__data">
                        <h1 class="home__title">Polylister</h1>
                        <h2 class="home__subtitle">We Make A Different Way To Control Your Asset</h2>
                        <a href="#services" class="button">View Services</a>
                    </div>
    
                    <img src="libs/images/home.png" alt="" class="home__img">
                </div>
            </section>
            
            <!--========== ABOUT ==========-->
            <section class="about section bd-container" id="about">
                <div class="about__container  bd-grid">
                    <div class="about__data">
                        <span class="section-subtitle about__initial">About us</span>
                        <h2 class="section-title about__initial"> Polylister Team</h2>
                        <p class="about__description">“We hope this app can help for the entrepreneurs to easily monitor stocks on their market or store”</p>
                        <a href="#" class="button">Explore history</a>
                    </div>
                    <img src="libs/images/about.png" alt="" class="about__img">
                </div>
            </section>

            <!--========== SERVICES ==========-->
            <section class="services section bd-container" id="services">
                <span class="section-subtitle">Offering</span>
                <h2 class="section-title">Our amazing services</h2>

                <div class="services__container  bd-grid">
                    <div class="services__content">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam services__img" viewBox="0 0 16 16">
                            <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
                          </svg>
                        <h3 class="services__title">Easy to Use</h3>
                        <p class="services__description">The system can be used anytime and anywhere and can be accessed on the web or the application.</p>
                    </div>

                    <div class="services__content">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-terminal services__img" viewBox="0 0 16 16">
                            <path d="M6 9a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3A.5.5 0 0 1 6 9zM3.854 4.146a.5.5 0 1 0-.708.708L4.793 6.5 3.146 8.146a.5.5 0 1 0 .708.708l2-2a.5.5 0 0 0 0-.708l-2-2z"/>
                            <path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12z"/>
                          </svg>
                        
                        <h3 class="services__title">Easy Implementation</h3>
                        <p class="services__description">No additional investment for device capabilities, Use only a common computer and android device and you're good to go.</p>
                    </div>

                    <div class="services__content">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock services__img" viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                          </svg>
                    
                        <h3 class="services__title">Real-Time Analytics</h3>
                        <p class="services__description">Real-time tracking your assets position, moving in and out from warehouses using only your internet connection.</p>
                    </div>
                </div>
            </section>

                 <!--========== MENU ==========-->
                 <section class="menu section bd-container" id="menu">
                    <span class="section-subtitle">History</span>
                    <h2 class="section-title">Behind the Application</h2>
    
                    <div class="menu__container bd-grid">
                        <div class="menu__content">
                            <img src="libs/images/plate1.png" alt="" class="menu__img">
                            <h3 class="menu__name">Story</h3>
                            <span class="menu__detail">The Polylister made the website for small businesses 
                                that cannot still afford the Inventory Management System. </span>
                        </div>
    
                        <div class="menu__content">
                        <img src="libs/images/plate2.png" alt="" class="menu__img">
                            <h3 class="menu__name">Vision</h3>
                            <span class="menu__detail">To ensure a continuous supply of materials and stock so that the production should not suffer at the time of
                                 customers demand and to help small businesses easily monitor stocks on a market or store</span>
                        </div>
                        
                        <div class="menu__content">
                          <img src="libs/images/plate3.png" alt="" class="menu__img">
                            <h3 class="menu__name">Technology</h3>
                            <span class="menu__detail">It's designed to properly sort control and act upon information with the company's inventory.</span>
                        </div>
                    </div>
                </section>

                
            <!--===== APP =======-->
            <section class="app section bd-container">
                <div class="app__container bd-grid">
                    <div class="app__data">
                        <span class="section-subtitle app__initial">Web Application</span>
                        <h2 class="section-title app__initial">Polylister is Available</h2>
                        <p class="app__description">Using android phone or PC Polylister app capable to check your last stock by shrinkage in long period and decrease qty by other factor</p>
                       
                    </div>

                 
                    <img src="libs/images/movil-app.png" alt="" class="app__img">
                </div>
            </section>

            <!--========== CONTACT US ==========-->
            <section class="contact section bd-container" id="contact">
                <div class="contact__container bd-grid">
                    <div class="contact__data">
                        <span class="section-subtitle contact__initial">Let's talk</span>
                        <h2 class="section-title contact__initial">Request a Demo</h2>
                        <p class="contact__description">Schedule a demo with one of our Application consultants.</p>
                    </div>

                    <div class="contact__button">
                        <a href="#" class="button">Contact us now</a>
                    </div>
                </div>
            </section>
        </main>

        <!--========== FOOTER ==========-->
        <footer class="footer section bd-container">
            <div class="footer__container bd-grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">Polylister</a>
                    <span class="footer__description">Inventory System</span>
                    <div>
                        <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Services</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Pricing</a></li>
                        <li><a href="#" class="footer__link">Reserve your spot</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Information</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Contact us</a></li>
                        <li><a href="#" class="footer__link">Privacy policy</a></li>
                        <li><a href="#" class="footer__link">Terms of services</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Adress</h3>
                    <ul>
                        <li>Marcos Alvarez</li>
                        <li>Las Piñas City</li>
                        <li>999 - 888 - 777</li>
                        <li>Polylister@outlook.com</li>
                    </ul>
                </div>
            </div>
        </footer>

        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script src="assets/js/main.js"></script>

</div>
<?php include_once('layouts/footer.php'); ?>
