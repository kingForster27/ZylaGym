<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>ZYLAGYM</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/index-style.css">

</head>

<body>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">ZYLA<em>GYM</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Acasă</a></li>
                            <li class="scroll-to-section"><a href="assets/pages/about-us.php">Despre Noi</a></li>
                            <li class="scroll-to-section"><a href="assets/pages/classes.php">Clase</a></li>
                            <li class="scroll-to-section"><a href="assets/pages/contact.php">Contact</a></li>
                            <?php 
                                session_start();  
                                
                                 if (isset($_SESSION['name']) && $_SESSION['name'] === 'Admin') {
                                    echo'<li class="main-button"><div class="dropdown">
                                        <button onclick="redirectToPage()" class="dropbtn">';
                                    echo $_SESSION['name']; 
                                    echo'</button>
                                          <div class="dropdown-content">
                                            <a class="drop-link" href="account.php">Profil</a>
                                            <a class="drop-link" href="assets/adminpanel/adminpanel.php">Admin Panel</a>
                                            <a class="drop-link" href="assets/php/signout.php">Deloghează-te</a>
                                          </div>
                                        </div></li>';
                                 }else if (isset($_SESSION['name'])) {
                                    echo'<li class="main-button"><div class="dropdown">
                                        <button onclick="redirectToPage()" class="dropbtn">';
                                    echo $_SESSION['name']; 
                                    echo'</button>
                                          <div class="dropdown-content">
                                            <a class="drop-link" href="assets/pages/account.php">Profil</a>
                                            <a class="drop-link" href="assets/php/signout.php">Deloghează-te</a>
                                          </div>
                                        </div></li>';
                                } else {
                                    echo '<li class="main-button"><a href="assets/pages/login-form.php">Autentificare / Inregistrare</a></li>';
                                }
                                ?>

                        </ul>
                        <a class='menu-trigger'>
                            <span>Meniu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/gym-video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>lucrează intens, devino mai puternic</h6>
                <h2>simplu la <em> ZYLA</em>GYM</h2>
                <div class="main-button scroll-to-section">
                    <?php 
                        if (isset($_SESSION['name'])) {
                            echo'<a href="assets/pages/subscription-form.php">Devino un membru</a>';
                        } else {
                            echo '<a href="assets/pages/login-form.php">Devino un membru</a>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Alege Un <em>Program</em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                        <p>Suspendisse fringilla et nisi et mattis. Curabitur sed finibus nisi. Integer nibh sapien, vehicula et auctor.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Fitness Obișnuit</h4>
                                <p>Suspendisse fringilla et nisi et mattis. Curabitur sed finibus nisi. Integer nibh sapien, vehicula et auctor.</p>
                                <a href="assets/pages/classes.php" class="text-button">Descoperă mai mult</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>Antrenament Nou</h4>
                                <p>Suspendisse fringilla et nisi et mattis. Curabitur sed finibus nisi. Integer nibh sapien, vehicula et auctor.</p>
                                <a href="assets/pages/classes.php" class="text-button">Descoperă mai mult</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="third gym training">
                            </div>
                            <div class="right-content">
                                <h4>Curs Simplu Pentru Mușchi</h4>
                                <p>Suspendisse fringilla et nisi et mattis. Curabitur sed finibus nisi. Integer nibh sapien, vehicula et auctor.</p>
                                <a href="assets/pages/classes.php" class="text-button">Descoperă mai mult</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4>Curs Avansat Pentru Mușchi</h4>
                                <p>Suspendisse fringilla et nisi et mattis. Curabitur sed finibus nisi. Integer nibh sapien, vehicula et auctor.</p>
                                <a href="assets/pages/classes.php" class="text-button">Descoperă mai mult</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4>Antrenament Yoga</h4>
                                <p>Suspendisse fringilla et nisi et mattis. Curabitur sed finibus nisi. Integer nibh sapien, vehicula et auctor.</p>
                                <a href="assets/pages/classes.php" class="text-button">Descoperă mai mult</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="gym training">
                            </div>
                            <div class="right-content">
                                <h4>Curs Body Building</h4>
                                <p>Suspendisse fringilla et nisi et mattis. Curabitur sed finibus nisi. Integer nibh sapien, vehicula et auctor.</p>
                                <a href="assets/pages/classes.php" class="text-button">Descoperă mai mult</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Nu <em>te</em> mai<em> gândi</em>, începe <em>azi</em>!</h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                        <div class="main-button scroll-to-section">
                            <?php 
                                if (isset($_SESSION['name'])) {
                                    echo'<a href="assets/pages/subscription-form.php">Devino un membru</a>';
                                } else {
                                    echo '<a href="assets/pages/login-form.php">Devino un membru</a>';
                                }
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Antrenori <em>Experti</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/first-trainer.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>Antrenor Forță</span>
                            <h4>Bret D. Bowers</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/second-trainer.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>Antrenor Mușchi</span>
                            <h4>Hector T. Daigl</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/third-trainer.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>Antrenor Putere</span>
                            <h4>Paul D. Newman</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->

    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Intră <em>în</em> legătură <em> cu </em>noi!</h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                        <div class="main-button scroll-to-section">
                            <a href="assets/pages/contact.php">Contactează-ne!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Contact Us Area Ends ***** -->

    <section class="section" id="bmi-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ml-auto mt-5">
                    <div class="section-title mb-0">
                        <h2 style="text-align: center;color: red;font-weight: 800; margin: 20px;">CALCULEAZA-ȚI BMI-UL</h2>
                        <p>Vivamus libero mauris, bibendum eget sapien ac, ultrices rhoncus ipsum nec sapien.Vivamus libero mauris, bibendum eget sapien ac, ultrices rhoncus ipsum nec sapien.</p>
                    </div>
                    <div class="bmi-calculator-warp">
                        <div class="bmi-calculator">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Greutate (KG)" id="bmi-weight">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Inaltime (M)" id="bmi-hight">
                                </div>
                                <div class="col-sm-6">
                                    <button class="site-btn" id="bmi-submit">Calculează</button>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" id="bmi-result" readonly>
                                </div>
                            </div>
                            <p>Vivamus libero mauris, bibendum eget sapien ac, ultrices rhoncus ipsum nec sapien.Vivamus libero mauris, bibendum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <!-- Grid container -->
        <div class="container">
            <!-- Section: Links -->
            <section class="mt-5">
                <!-- Grid row-->
                <div class="row text-center d-flex justify-content-center pt-5">
                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#" style="color: black;">Acasă</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="assets/pages/about-us.php" style="color: red;">Despre Noi</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="assets/pages/classes.php" style="color: black;">Clase</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="assets/pages/contact.php" style="color: red;">Contact</a>
                        </h6>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row-->
            </section>
            <!-- Section: Links -->

            <hr class="my-5" />

            <!-- Section: Text -->
            <section class="mb-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                            distinctio earum repellat quaerat voluptatibus placeat nam,
                            commodi optio pariatur est quia magnam eum harum corrupti
                            dicta, aliquam sequi voluptate quas.
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </footer>
    <!-- Footer -->
    <script>
        function redirectToPage() {
            window.location.href = "assets/pages/account.php"; // Replace with the desired URL
        }

    </script>
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/mixitup.js"></script>
    <script src="assets/js/accordions.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

</body>

</html>
