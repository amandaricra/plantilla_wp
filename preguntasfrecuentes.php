<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Xeloro - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="header-border"></div>
        <?php
            include ("include/menu.php");
            ?>
      
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">preguntas frecuentes </h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Paginas</a></li>
                                        <li class="breadcrumb-item active">preguntas frecuentes </li>
                                    </ol>
                                </div>
                                
                            </div>
                        </div>
                    </div>     
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center mt-4">
                                <h4>Preguntas Frecuentes</h4>
                                <p class="text-muted mt-3 mb-4"> "Nuestras preguntas frecuentes  tienen respuestas a tus preguntas más comunes. Desde detalles sobre productos hasta políticas de envío, ¡aquí encontrarás lo que necesitas saber para sacar el máximo provecho de nuestra página!"</p>

                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->

                    
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mb-3 font-weight-bold text-uppercase">General</h5>
                                    <div id="accordion">
                                        <div class="card mb-1">
                                            <div class="card-header bg-white border-bottom-0 p-3" id="headingOne">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne" class="text-dark">
                                                        ¿Cuáles son los métodos de pago aceptados?
                                                    </a>
                                                </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show"
                                                    aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body text-muted pt-1">
                                                Aceptamos pagos mediante tarjeta de crédito/débito (Visa, Mastercard, American Express), PayPal y transferencia bancaria.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-1">
                                            <div class="card-header bg-white border-bottom-0 p-3" id="headingTwo">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    ¿Cuánto tiempo tarda en llegar mi pedido?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                <div class="card-body text-muted pt-1">
                                                El tiempo de envío varía según tu ubicación y el método de envío seleccionado. Por lo general, los pedidos tardan entre 3 y 7 días hábiles en llegar después de procesados.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-1">
                                            <div class="card-header bg-white border-bottom-0 p-3" id="headingThree">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    ¿Puedo realizar cambios o devoluciones?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                <div class="card-body text-muted pt-1">
                                                Sí, aceptamos cambios y devoluciones dentro de los 30 días posteriores a la recepción de tu pedido. El producto debe estar en condiciones originales y sin usar.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mb-3 font-weight-bold text-uppercase">PAGOS Y SOPORTE</h5>
                                    <div id="accordion2">
                                        <div class="card mb-1">
                                            <div class="card-header bg-white border-bottom-0 p-3" id="headingFour">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    ¿Cuáles son los métodos de pago aceptados?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion2">
                                                <div class="card-body text-muted pt-1">
                                                Aceptamos pagos mediante tarjeta de crédito/débito (Visa, Mastercard, American Express), PayPal y transferencia bancaria.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-1">
                                            <div class="card-header bg-white border-bottom-0 p-3" role="tab" id="headingFive">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                    ¿Qué hago si encuentro un error en la página web o la aplicación?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion2">
                                                <div class="card-body text-muted pt-1">
                                                Si encuentras un error en nuestra página web o aplicación, por favor, notifícanoslo lo antes posible. Puedes enviar un correo electrónico a nuestro equipo de soporte técnico detallando el problema que encontraste. Apreciamos tu ayuda para mejorar nuestra plataforma.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-0">
                                            <div class="card-header bg-white border-bottom-0 p-3" role="tab" id="headingSix">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                    ¿Qué debo hacer si no puedo acceder a mi cuenta?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion2">
                                                <div class="card-body text-muted pt-1">
                                                Si no puedes acceder a tu cuenta, asegúrate de que estás utilizando la dirección de correo electrónico correcta y la contraseña asociada con tu cuenta. Si sigues teniendo problemas, intenta restablecer tu contraseña o ponte en contacto con nuestro equipo de soporte para obtener ayuda adicional.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                        </div> <!-- end col -->
    
                    </div>

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php
                include ("include/pie_pagina.php")
                ?>

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay"></div>


    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="assets/js/theme.js"></script>

</body>

</html>