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

    <link rel="stylesheet" href="../css/account-style.css">

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
                                <span>Menu</span>
                            </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Profilul <em>tău</em></h2>
                        <img src="../images/line-dec.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
                <div class="col-lg-4">
                    <ul>
                        <li><a href='#tabs-1'><img src="../images/tabs-first-icon.png" alt="">Datele tale</a></li>
                        <li><a href='#tabs-2'><img src="../images/tabs-first-icon.png" alt="">Abonamente</a></li>
                        <li><a href='#tabs-3'><img src="../images/tabs-first-icon.png" alt="">Metode de plată</a></li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <?php

                                error_reporting(E_ERROR | E_PARSE);

                                $conn = new mysqli('localhost', 'root', '', 'zylagym_db');
                                $id = $_SESSION['id'];
                                $res = mysqli_query($conn, "SELECT * FROM user_data WHERE id = '$id'");
                                $data = mysqli_fetch_array($res);
                                if (isset($_POST['update']))
                                {
                                    $name = $_POST['name'];
                                    $email = $_POST['email'];
                                    $phone_number = $_POST['phone_number'];

                                    $edit = mysqli_query($conn, "update user_data set name='$name', email='$email', phone_number='$phone_number' where id='$id'");

                                    if ($edit) {
                                        mysqli_close($conn);
                                        header("location: account.php");
                                        exit;
                                    }
                                }

                            ?>
                            <form class="form-horizontal" method="post">
                                <fieldset>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nume si Prenume">Nume și Prenume</label>
                                        <div class="col-md-4">
                                            <input id="name" name="name" type="text" value="<?php echo $data['name'] ?>" placeholder="" class="form-control input-md" required="">

                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Email">Email</label>
                                        <div class="col-md-4">
                                            <input id="email" name="email" type="text" value="<?php echo $data['email'] ?>" placeholder="" class="form-control input-md" required="">

                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="phone_number">Număr de telefon</label>
                                        <div class="col-md-4">
                                            <input id="phone_number" name="phone_number" type="text" value="<?php echo $data['phone_number'] ?>" placeholder="" class="form-control input-md" required="">

                                        </div>
                                    </div>
                                    <input type="submit" class="btn m-auto btn-danger" name="update" value="Update">
                                    <a class="main-button" href="../php/signout.php">  Deconectare</a>
                                </fieldset>
                            </form>

                        </article>
                        <article id='tabs-2'>
                            <?php

                                error_reporting(E_ERROR | E_PARSE);

                                $conn = new mysqli('localhost', 'root', '', 'zylagym_db');
                                $id = $_SESSION['id'];
                                $sql = "SELECT * FROM subscription WHERE user_id = '$id'";
                                $result = $conn->query($sql);
                                
                                echo '<table class="table table-light">
                                            <thead>
                                            <tr><th scope="col">#</th>
                                              <th scope="col">Abonament</th>
                                              <th scope="col">Recurenta</th>
                                              <th scope="col">Data incepere</th>
                                              <th scope="col">Data finalizare</th>
                                            </tr>
                                            </thead>
                                            <tbody>';
                                                   
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                            echo '<tr>
                                              <th scope="row">' . $row['id'] . '</th>
                                              <td>' . $row['subscription_plan'] . '</td>
                                              <td>' . $row['recurrence'] . '</td>
                                              <td>' . $row['date_start'] . '</td>
                                              <td>' . $row['date_end'] . '</td>
                                            </tr>';

                                    }
                                } else {
                                    echo "<p>Nu exista date pentru acest utilizator</p>";
                                }
                                echo'</tbody></table>';
                            ?>
                        </article>
                        <article id='tabs-3'>
                            <?php

                                error_reporting(E_ERROR | E_PARSE);

                                $conn = new mysqli('localhost', 'root', '', 'zylagym_db');
                                $id = $_SESSION['id'];
                                $sql = "SELECT * FROM card_data WHERE user_id = '$id'";
                                $result = $conn->query($sql);
                            
                                echo '<table class="table table-light">
                                            <thead>
                                            <tr><th scope="col">#</th>
                                              <th scope="col">Numărul cardului</th>
                                              <th scope="col">Data expirare</th>
                                            </tr>
                                            </thead>
                                            <tbody>';
                                                   
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        
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
                                        
                                            echo '<tr>
                                              <th scope="row">' . $row['id'] . '</th>
                                              <td>' . $decryption_card_number . '</td>
                                              <td>' . $decryption_card_date . '</td>
                                              <td><a href="../php/delete_payment.php?id=' . $row['id'] . '&tablename=card_data">Sterge</a></td>
                                            </tr>';

                                    }
                                } else {
                                    echo "<p>Nu există date pentru acest utilizator</p>";
                                }
                                echo'</tbody></table>';
                                ?>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item Start ***** -->

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
