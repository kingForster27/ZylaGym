<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>ZYLAGYM</title>

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">

    <link rel="stylesheet" href="../css/payment-style.css">

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
                            <li class="scroll-to-section"><a href="#">Despre Noi</a></li>
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
                                <div class="card-3d-wrap mx-auto">
                                    <div class="card-3d-wrapper">
                                        <div class="card-front">
                                            <div class="center-wrap">
                                                <div class="section text-center">
                                                    <h4 class="mb-4 pb-3">Detalii plată</h4>
                                                    <?php
                                                        $conn = new mysqli('localhost', 'root', '', 'zylagym_db');
                                                        $id = $_SESSION['id'];
                                                        $res = mysqli_query($conn, "SELECT * FROM card_data WHERE user_id = '$id'");
                                                        $row = mysqli_fetch_array($res);
                                                    
                                                        if(mysqli_num_rows($res) >0){
                                                            $card_number_cr = $row['card_number'];
                                                            $card_date_cr = $row['card_date'];
                                                            $card_cvv_cr = $row['cvv'];
                                                            $ciphering = "AES-128-CTR";

                                                            // Use OpenSSl Encryption method
                                                            $iv_length = openssl_cipher_iv_length($ciphering);
                                                            $options = 0;

                                                            // Non-NULL Initialization Vector for decryption
                                                            $decryption_iv = '1234567891011121';

                                                            // Store the decryption key
                                                            $decryption_key = $_SESSION['encryption_key'];

                                                            // Use openssl_decrypt() function to decrypt the data
                                                            $decryption_card_number = openssl_decrypt ($card_number_cr, $ciphering, $decryption_key, $options, $decryption_iv);
                                                            $decryption_card_date = openssl_decrypt ($card_date_cr, $ciphering, $decryption_key, $options, $decryption_iv);
                                                            $decryption_card_cvv =openssl_decrypt ($card_cvv_cr, $ciphering, $decryption_key, $options, $decryption_iv);

                                                            $card_number = $decryption_card_number;
                                                            $card_date = $decryption_card_date;
                                                            $card_cvv = $decryption_card_cvv;
                                                        }else{
                                                           $card_number = '';
                                                           $card_date = '';
                                                           $card_cvv = '';
                                                        }
                                                    ?>
                                                    <form action="../php/payment.php" method="post" class="subscription-form">
                                                        <div class="form-group row">
                                                            <label for="phone-number" class="col-4 col-form-label">Numărul cardului</label>
                                                            <div class="col-8">
                                                                <div class="input-group">
                                                                    <input id="card-number" name="card-number" value="<?php echo $card_number ?>" placeholder="ex: 1234 1234 1234 1234" type="number" class="form-control" min="1000000000000000" max="9999999999999999" title="introduceti 16 caractere" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="text1" class="col-4 col-form-label">Dată expirare</label>
                                                            <div class="col-8">
                                                                <div class="input-group">
                                                                    <input name="card-date" type="month" required value="<?php echo $card_date ?>" min="2023-07" placeholder="">
                                                                </div>
                                                            </div>
                                                            <label for="phone-number" class="col-4 col-form-label">CVV</label>
                                                            <div class="col-8">
                                                                <div class="input-group">
                                                                    <input id="card-cvv" name="card-cvv" value="<?php echo $card_cvv ?>" placeholder="ex: 123" min="100" max="999" type="number" class="form-control" required>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
                                                            <input type="hidden" name="recurrence" value="<?php echo $_POST['recurrence']; ?>">
                                                            <input type="hidden" name="subscription_plan" value="<?php echo $_POST['subscription_plan']; ?>">
                                                            <input type="hidden" name="date" value="<?php echo $_POST['date']; ?>">
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="offset-4 col-8">
                                                                <button name="submit" type="submit" class="btn btn-primary">Confirmă</button>
                                                            </div>
                                                        </div>
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
    <script>
        function redirectToPage() {
            window.location.href = "account.php"; // Replace with the desired URL
        }

    </script>
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
