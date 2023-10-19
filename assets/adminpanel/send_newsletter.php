<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <link rel="stylesheet" href="../CSS/table.css">
    <link rel="stylesheet" href="../CSS/admin.css">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script src="../JS/datatable.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../index.html" class="nav-link">Înapoi la site</a>
                </li>
            </ul>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="adminpanel.php" class="brand-link ">
                    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">ZylaGYM Admin</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar ">
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a href="adminpanel.php" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item menu-open">
                                <a href="#" class="nav-link bg-danger active">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Administrare date
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="clienti_admin.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Utilizatori</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="abonamente_admin.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Abonamente</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="plati_admin.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Plăți</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="newsletter_admin.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Abonări la newsletter</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </br>
                            <li class="nav-item">
                                <a href="send_newsletter.php" class="nav-link active">
                                    <i class="nav-icon fas fa-envelope"></i>
                                    <p>
                                        Trimite newsletter
                                    </p>
                                </a>
                            </li>
                            <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
        </nav>

        <!-- Content Wrapper. Contains page content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- /.col -->
                    <div class="col-md-9 mt-5 offset-md-2">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Trimite un newsletter</h3>
                            </div>
                            <!-- /.card-header -->
                            <form action="../php/send_newsletter.php" method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="subject" placeholder="Subject:">
                                    </div>
                                    <div class="form-group">
                                        <textarea id="compose-textarea" type="text" name="message" class="form-control" style="height: 300px"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="btn btn-default btn-file">
                                            <i class="fas fa-paperclip"></i> Attachment
                                            <input type="file" name="attachment">
                                        </div>
                                        <p class="help-block">Max. 32MB</p>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
                                    </div>
                                    <button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Discard</button>
                                </div>
                            </form>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>


        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2023 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.1.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/adminlte.js"></script>
</body>

</html>
