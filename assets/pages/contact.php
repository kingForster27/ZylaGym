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

    <link rel="stylesheet" href="../css/contact-style.css">

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
                            <li class="scroll-to-section"><a href="about-us.php">Despre Noi</a></li>
                            <li class="scroll-to-section"><a href="classes.php">Clase</a></li>
                            <li class="scroll-to-section"><a href="contact.php" class="active">Contact</a></li>
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
                            <span>Meniu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div>
                <div class="contact-first col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="Nume si prenume" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email-ul tau" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="subject" type="text" id="subject" placeholder="Subiect">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" id="message" placeholder="Mesaj" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button">Trimite mesajul</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="col-md-5 d-flex align-items-stretch">
                        <div class="info-wrap w-100 p-lg-5 p-4">
                            <h3 class="mb-4 mt-md-4">Contactează-ne</h3>
                            <div class="dbox w-100 d-flex align-items-start">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-map-marker"></span>
                                </div>
                                <div class="text pl-3">
                                    <p><span>Adresa:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                                </div>
                            </div>
                            <div class="dbox w-100 d-flex align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="text pl-3">
                                    <p><span>Telefon 1:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                                    <p><span>Telefon 2:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                                </div>
                            </div>
                            <div class="dbox w-100 d-flex align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-paper-plane"></span>
                                </div>
                                <div class="text pl-3">
                                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                                </div>
                            </div>
                            <div class="dbox w-100 d-flex align-items-center">
                                <div class="text pl-3">
                                    <p><span>Dăi mai jos pentru a vedea locația pe hartă.</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-map col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                        <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>
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
