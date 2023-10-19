<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="static/fonts/Montserrat/fonts/webfonts/Montserrat-Alt1.css">

    <title>ZYLAGYM</title>

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">

    <link rel="stylesheet" href="../css/about-us-style.css">

</head>

<body>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="../../index.php" class="logo">ZYLA<em>GYM</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="../../index.php">Acasă</a></li>
                            <li class="scroll-to-section"><a href="#" class="active">Despre Noi</a></li>
                            <li class="scroll-to-section"><a href="classes.php">Clase</a></li>
                            <li class="scroll-to-section"><a href="contact.php">Contact</a></li>
                            <?php 
                                session_start();  
                                
                                 if (isset($_SESSION['name']) && $_SESSION['name'] === 'Admin') {
                                    echo'<li class="main-button"><div class="dropdown">
                                        <button onclick="redirectToPage()" class="dropbtn">';
                                    echo $_SESSION['name']; 
                                    echo'</button>
                                          <div class="dropdown-content">
                                            <a class="drop-link" href="account.php">Profil</a>
                                            <a class="drop-link" href="../adminpanel/adminpanel.php">Admin Panel</a>
                                            <a class="drop-link" href="../php/signout.php">Deloghează-te</a>
                                          </div>
                                        </div></li>';
                                 }else if (isset($_SESSION['name'])) {
                                    echo'<li class="main-button"><div class="dropdown">
                                        <button onclick="redirectToPage()" class="dropbtn">';
                                    echo $_SESSION['name']; 
                                    echo'</button>
                                          <div class="dropdown-content">
                                            <a class="drop-link" href="account.php">Profil</a>
                                            <a class="drop-link" href="../php/signout.php">Deloghează-te</a>
                                          </div>
                                        </div></li>';
                                } else {
                                    echo '<li class="main-button"><a href="login-form.php">Autentificare / Inregistrare</a></li>';
                                }
                                ?>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="../images/gym-video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h2>Despre <em>noi</em></h2>
                <div class="main-button scroll-to-section">
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Features Item Start ***** -->

    <!-- About section -->
    <section class="about-section">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-5">
                    <div class="section-title text-center">
                        <h2><span>Ne pasă</span> de sănătatea ta!</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="about-text">
                        <p>Donec nec sapien in urna fermentum ornare. Morbi vel ultrices leo. Sed eu turpis eu arcu vehicula frin-gilla ut vitae orci. Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobor-tis a enim eget tempus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-text">
                        <p>Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci, onec nec sapien in urna fermentum ornare. Morbi vel ultrices leo. Sed eu turpis eu arcu vehicula fringilla ut vitae orci. Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-img">
                        <img src="../images/third-trainer.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="about-img">
                        <img src="../images/second-trainer.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-text">
                        <p>Donec nec sapien in urna fermentum ornare. Morbi vel ultrices leo. Sed eu turpis eu arcu vehicula frin-gilla ut vitae orci. Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobor-tis a enim eget tempus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-text">
                        <p>Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci, onec nec sapien in urna fermentum ornare. Morbi vel ultrices leo. Sed eu turpis eu arcu vehicula fringilla ut vitae orci. Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus.</p>
                    </div>
                </div>
            </div>
            <div class="text-center pt-4">
                <a href="classes.html" class="site-btn">Vezi clasele noastre</a>
            </div>
        </div>
    </section>
    <!-- About section end -->

    <!-- Newsletter section  -->
    <section class="newsletter-section set-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title text-white mb-0">
                        <h2>Abonează-te la <span>newsletter</span></h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="../php/newsletter.php" method="post" class="newsletter-form">
                        <input type="text" name="news_email" placeholder="  Your e-mail here">
                        <button class="site-btn" type="submit">Abonează-te</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter section end -->

    <!-- Footer -->
    <footer class="text-center" style="">
        <!-- Grid container -->
        <div class="container">
            <!-- Section: Links -->
            <section class="mt-5">
                <!-- Grid row-->
                <div class="row text-center d-flex justify-content-center pt-5">
                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="../../index.php" style="color: black;">Acasă</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="../pages/about-us.php" style="color: red;">Despre Noi</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="../pages/classes.php" style="color: black;">Clase</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="../pages/contact.php" style="color: red;">Contact</a>
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
            window.location.href = "account.php"; // Replace with the desired URL
        }

    </script>
    <!-- jQuery -->
    <script src="../js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="../js/scrollreveal.min.js"></script>
    <script src="../js/waypoints.min.js"></script>
    <script src="../js/jquery.counterup.min.js"></script>
    <script src="../js/imgfix.min.js"></script>
    <script src="../js/mixitup.js"></script>
    <script src="../js/accordions.js"></script>

    <!-- Global Init -->
    <script src="../js/custom.js"></script>

</body>

</html>
