<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ZYLAGYM</title>

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">

    <link rel="stylesheet" href="../css/classes-style.css">

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
                            <li class="scroll-to-section"><a href="classes.php" class="active">Clase</a></li>
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
                            <span>Meniu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Clasele <em>noastre</em></h2>
                        <img src="../images/line-dec.png" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
                <div class="col-lg-4">
                    <ul>
                        <li><a href='#tabs-1'><img src="../images/tabs-first-icon.png" alt="">Clasă Fitness</a></li>
                        <li><a href='#tabs-2'><img src="../images/tabs-first-icon.png" alt="">Antrenament Mușchi</a></li>
                        <li><a href='#tabs-3'><img src="../images/tabs-first-icon.png" alt="">Body Building</a></li>
                        <li><a href='#tabs-4'><img src="../images/tabs-first-icon.png" alt="">Antrenament Yoga</a></li>
                        <li><a href='#tabs-5'><img src="../images/tabs-first-icon.png" alt="">Antrenament Avansat</a></li>
                        <div class="main-rounded-button"><a href="#schedule">Vezi programul claselor</a></div>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <img src="../images/training-image-01.jpg" alt="First Class">
                            <h4>Clasa Fitness</h4>
                            <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>
                        </article>
                        <article id='tabs-2'>
                            <img src="../images/training-image-02.jpg" alt="Second Training">
                            <h4>Antrenament Mușchi</h4>
                            <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </article>
                        <article id='tabs-3'>
                            <img src="../images/training-image-03.jpg" alt="Third Class">
                            <h4>Body Building</h4>
                            <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel, accumsan a neque.</p>
                        </article>
                        <article id='tabs-4'>
                            <img src="../images/training-image-04.jpg" alt="Fourth Training">
                            <h4>Antrenament Yoga</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget venenatis ipsum commodo et.</p>
                        </article>
                        <article id='tabs-5'>
                            <img src="../images/training-image-01.jpg" alt="First Class">
                            <h4>Antrenament Avansat</h4>
                            <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->

    <section class="section" id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Programul <em>claselor</em></h2>
                        <img src="../images/line-dec.png" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="filters">
                        <ul class="schedule-filter">
                            <li class="active" data-tsfilter="monday">Luni</li>
                            <li data-tsfilter="tuesday">Marți</li>
                            <li data-tsfilter="wednesday">Miercuri</li>
                            <li data-tsfilter="thursday">Joi</li>
                            <li data-tsfilter="friday">Vineri</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="schedule-table filtering">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="day-time">Clasa Fitness</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">10:00AM - 11:30AM</td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday">2:00PM - 3:30PM</td>
                                    <td>William G. Stewart</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Antrenament Mușchi</td>
                                    <td class="friday ts-item" data-tsmeta="friday">10:00AM - 11:30AM</td>
                                    <td class="thursday friday ts-item" data-tsmeta="thursday" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                    <td>Paul D. Newman</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Body Building</td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday">10:00AM - 11:30AM</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">2:00PM - 3:30PM</td>
                                    <td>Boyd C. Harris</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Antrenament Yoga</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday">10:00AM - 11:30AM</td>
                                    <td class="friday ts-item" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                    <td>Hector T. Daigle</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Antrenament Avansat</td>
                                    <td class="thursday ts-item" data-tsmeta="thursday">10:00AM - 11:30AM</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday">2:00PM - 3:30PM</td>
                                    <td>Bret D. Bowers</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Antrenori <em>Experți</em></h2>
                        <img src="../images/line-dec.png" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="../images/first-trainer.jpg" alt="">
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
                            <img src="../images/second-trainer.jpg" alt="">
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
                            <img src="../images/third-trainer.jpg" alt="">
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
    <!-- ***** Features Item End ***** -->
    <section class="section" id="pricing">
        <div class="container">
            <!-- Pricing section end -->
            <section class="pricing-section set-bg">
                <div class="container">
                    <div class="section-title text-white text-center">
                        <h2>PREȚURI PENTRU TOȚI</h2>
                        <img src="../images/line-dec.png" alt="">
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="pricing-box">
                                <h2>50 lei</h2>
                                <p>/lună</p>
                                <ul>
                                    <li>Gym</li>
                                    <li>Fitness 24/7</li>
                                    <li><span></span></li>
                                    <li><span></span></li>
                                    <li><span></span></li>
                                </ul>
                                <?php 
                                if (isset($_SESSION['name'])) {
                                    echo'<a href="subscription-form.php" class="site-btn">Alege</a>';
                                } else {
                                    echo '<a href="login-form.php" class="site-btn">Alege</a>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="pricing-box">
                                <h2>125 lei</h2>
                                <p>/lună</p>
                                <ul>
                                    <li>Gym</li>
                                    <li>Fitness 24/7</li>
                                    <li>Saună</li>
                                    <li><span></span></li>
                                    <li><span></span></li>
                                </ul>
                                <?php  
                                if (isset($_SESSION['name'])) {
                                    echo'<a href="subscription-form.php" class="site-btn">Alege</a>';
                                } else {
                                    echo '<a href="login-form.php" class="site-btn">Alege</a>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="pricing-box">
                                <h2>200 lei</h2>
                                <p>/lună</p>
                                <ul>
                                    <li>Gym</li>
                                    <li>Fitness 24/7</li>
                                    <li>Saună</li>
                                    <li>Antrenor Personal</li>
                                    <li>Masaj</li>
                                </ul>
                                <?php 
                                if (isset($_SESSION['name'])) {
                                    echo'<a href="subscription-form.php" class="site-btn">Alege</a>';
                                } else {
                                    echo '<a href="login-form.php" class="site-btn">Alege</a>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="pricing-box">
                                <h2>300 lei</h2>
                                <p>/lună</p>
                                <ul>
                                    <li>Gym</li>
                                    <li>Fitness 24/7</li>
                                    <li>Saună</li>
                                    <li>Antrenor Personal</li>
                                    <li>Masaj</li>
                                    <li>Nutriționist</li>
                                </ul>
                                <?php 
                                if (isset($_SESSION['name'])) {
                                    echo'<a href="subscription-form.php" class="site-btn">Alege</a>';
                                } else {
                                    echo '<a href="login-form.php" class="site-btn">Alege</a>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Pricing section  -->
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
