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

    <link rel="stylesheet" href="../css/login-style.css">

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
                            <li><a href="../../index.php">Acasă</a></li>
                            <li><a href="contact.php">Contact</a></li>
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
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="../images/gym-video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="section">
                <div class="container">
                    <div class="row full-height justify-content-center">
                        <div class="col-12 text-center align-self-center py-5">
                            <div class="section pb-5 pt-5 pt-sm-2 text-center">
                                <h6 class="mb-0 pb-3"> <span>Autentifică-te     </span><span>Înregistrează-te</span></h6>
                                <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                                <label for="reg-log"></label>
                                <div class="card-3d-wrap mx-auto">
                                    <div class="card-3d-wrapper">
                                        <div class="card-front">
                                            <div class="center-wrap">
                                                <div class="section text-center">
                                                    <form action="../php/login.php" method="post">
                                                        <h4 class="mb-4 pb-3">Autentifică-te</h4>
                                                        <?php if (isset($_GET['error'])) { ?>

                                                        <p class="error"><?php echo $_GET['error']; ?></p>

                                                        <?php } ?>
                                                        <div class="form-group">
                                                            <input type="email" name="email" class="form-style" placeholder="Adresa de email" id="logemail" autocomplete="off">
                                                            <i class="input-icon uil uil-at"></i>
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <input type="password" name="password" class="form-style" placeholder="Parola" id="logpass" autocomplete="off">
                                                            <i class="input-icon uil uil-lock-alt"></i>
                                                        </div>
                                                        <button type="submit" class="btn mt-4">Confirmă</button>
                                                        <p class="mb-0 mt-4 text-center"><a href="password_reset_email.php" class="link">Ai uitat parola?</a></p>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-back">
                                            <div class="center-wrap">
                                                <div class="section text-center">
                                                    <form action="../php/signup.php" method="post">
                                                        <h4 class="mb-4 pb-3">Înregistrează-te</h4>
                                                        <div class="form-group">
                                                            <input type="text" name="name" class="form-style" placeholder="Nume si prenume" id="logname" autocomplete="off">
                                                            <i class="input-icon uil uil-user"></i>
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <input type="email" name="email" class="form-style" placeholder="Adresa de email" id="logemail" autocomplete="off">
                                                            <i class="input-icon uil uil-at"></i>
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <input type="number" name="phone_number" class="form-style" placeholder="Numar de telefon" id="phone_number" autocomplete="off">
                                                            <i class="input-icon uil uil-lock-alt"></i>
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <input type="password" name="password" class="form-style" placeholder="Parola" id="logpass" autocomplete="off">
                                                            <i class="input-icon uil uil-lock-alt"></i>
                                                        </div>
                                                        <button type="submit" class="btn mt-4">Confirmă</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
