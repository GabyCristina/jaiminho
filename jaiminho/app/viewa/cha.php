<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Herbaqualy</title>
    <!-- Bootstrap core CSS-->
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="../../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="../../assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../../assets/css/sb-admin.css" rel="stylesheet">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php" img-crf="">Herbaqualy</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Inicio">
                <a class="nav-link" href="index.php">
                    <i class="fa fa-bars"></i>
                    <span class="nav-link-text">Inicio</span>
                </a>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Biblioteca">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                    <i class="fa fa-university"></i>
                    <span class="nav-link-text">Biblioteca</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseMulti">
                    <li>
                        <a href="cha.php">Plantas para chás</a>
                    </li>
                    </li>
                    <li>
                        <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Categorias</a>
                        <ul class="sidenav-third-level collapse" id="collapseMulti2">
                          <li>
                            <a href="planta.php">Verduras</a>
                          </li>
                          <li>
                            <a href="planta.php">Oleaginosas</a>
                          </li>
                          <li>
                            <a href="planta.php">Vegetais</a>
                          </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Procurar por">
                        <span class="input-group-btn">
                <button class="btn btn-success" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
                    </div>
                </form>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="criaperg.php">Criar pergunta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>
<div class="content-wrapper">
    <div class="container-fluid">
    <div class="container-fluid">
            <!--meio-->
        <div class="row">
            <div class="col-md-7">

                    <img class="img-fluid rounded mb-3 mb-md-0" src="../../assets/img/euae.jpg" style="">

            </div>
            <div class="col-md-5">
                <h3>Abacateiro</h3>
                <p>Rico em vitaminas e proteínas, é diurético, usado popularmente no combate à gota, ácido úrico e para eliminar cálculos renais e biliares...</p>
                <a class="btn btn-success" href="planta.php">Ver mais</a>
            </div>
        </div>

    </div>


        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small></small>
                </div>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pronto para sair?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Selecione "Logout" para sair de sua sessão atual</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-outline-success" href="login.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="../../assets/vendor/jquery/jquery.min.js"></script>
        <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Page level plugin JavaScript-->
        <script src="../../assets/vendor/chart.js/Chart.min.js"></script>
        <script src="../../assets/vendor/datatables/jquery.dataTables.js"></script>
        <script src="../../assets/vendor/datatables/dataTables.bootstrap4.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="../../assets/js/sb-admin.min.js"></script>
        <!-- Custom scripts for this page-->
        <script src="../../assets/js/sb-admin-datatables.min.js"></script>
        <script src="../../assets/js/sb-admin-charts.min.js"></script>
    </div>
</body>

</html>
