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

    <link rel="stylesheet" href="../css/subscription-style.css">

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
        <?php
            $conn = new mysqli('localhost', 'root', '', 'zylagym_db');
            $id = $_SESSION['id'];
            $res = mysqli_query($conn, "SELECT * FROM user_data WHERE id = '$id'");
            $data = mysqli_fetch_array($res);
        ?>
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
                                                    <h4 class="mb-4 pb-3">Devino un membru</h4>
                                                    <form action="payment-form.php" method="post" class="subscription-form">
                                                        <div class="form-group row">
                                                            <label for="text" class="col-4 col-form-label">Nume și prenume</label>
                                                            <div class="col-8">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fa fa-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input id="text" name="name" value="<?php echo $data['name'] ?>" placeholder="ex: Alex Costinas" type="text" class="form-control" required="required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="phone-number" class="col-4 col-form-label">Număr de telefon</label>
                                                            <div class="col-8">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fa fa-phone"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input id="phone-number" name="phone_number" value="<?php echo $data['phone_number'] ?>" placeholder="ex: 0312342131" type="text" class="form-control" required="required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="text1" class="col-4 col-form-label">Adresă de email</label>
                                                            <div class="col-8">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fa fa-envelope"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input id="text1" name="email" value="<?php echo $data['email'] ?>" placeholder="ex: abcd@ceva.com" type="text" class="form-control" required="required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-4">Subscripție lunară?</label>
                                                            <div class="col-8">
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input name="recurrence" id="radio_0" type="radio" required class="custom-control-input" <?php if (isset($recurrence) && $recurrence=="Da") echo "checked";?> value="Da">
                                                                    <label for="radio_0" class="custom-control-label">Da</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input name="recurrence" id="radio_1" type="radio" required class="custom-control-input" <?php if (isset($recurrence) && $recurrence=="Nu") echo "checked";?> value="Nu">
                                                                    <label for="radio_1" class="custom-control-label">Nu</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="select" class="col-4 col-form-label">Selectează abonament-ul</label>
                                                            <div class="col-8">
                                                                <select id="select" name="subscription_plan" class="custom-select" required>
                                                                    <option value="">Selecteaza abonament-ul</option>
                                                                    <option value="Plan 50 lei">Abonament 50 Lei</option>
                                                                    <option value="Plan 125 lei">Abonament 125 Lei</option>
                                                                    <option value="Plan 200 lei">Abonament 200 Lei</option>
                                                                    <option value="Plan 300 lei">Abonament 300 Lei</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="text1" class="col-4 col-form-label">Data inceperii abonamentului</label>
                                                            <div class="col-8">
                                                                <div class="input-group">
                                                                    <?php 
                                                                        $conn = new mysqli('localhost', 'root', '', 'zylagym_db');
                                                                        $id = $_SESSION['id'];
                                                                        $result = mysqli_query($conn, "SELECT MAX(id) As highest_id FROM subscription where user_id = '$id'");
                                                                        $highest_id = implode(mysqli_fetch_assoc($result));
                                                                        $res = mysqli_query($conn, "SELECT * FROM subscription WHERE id = '$highest_id'");
                                                                        $data = mysqli_fetch_array($res);
                                                                    if(mysqli_num_rows($res) > 0){
                                                                       echo '<input name="date" type="date" placeholder="" min="' . $data['date_end'] . '" required">';
                                                                    }else{
                                                                       echo '<input name="date" type="date" placeholder="" min="' . date('Y-m-d') . '" required">';
                                                                    }
                                                                    
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="offset-4 col-8">
                                                                <button name="submit" type="submit" class="btn btn-primary">Spre plată</button>
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
