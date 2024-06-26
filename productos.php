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
        <link rel="shortcut icon" href=" <?php bloginfo('template_url'); ?>/assets/images/favicon.ico">

        <!-- App css -->
        <link href=" <?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href=" <?php bloginfo('template_url'); ?>/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href=" <?php bloginfo('template_url'); ?>/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">
            <div class="header-border"></div>
        
            <?php
            include ("include/menu.php");
            ?>

            <!-- ========== Left Sidebar Start ========== -->
           
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
                                    <h4 class="mb-0 font-size-18">Starter</h4>


                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                            <li class="breadcrumb-item active">Starter</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="container-fluid row">
    <?php
    for ($i = 0; $i < 10; $i++) {
    ?>
    <div class="col-lg-2 col-md-3 col-ms-6">
        <div class="card">
            <img src=" <?php bloginfo('template_url'); ?>/https://juntozstgsrvproduction.blob.core.windows.net/default-blob-images/200x200_ps5-slim-discja1_123238.jpg" alt="...">
            <div>
                <h5 class="card-title">Título de la tarjeta</h5>
                <p class="card-text">Un texto de ejemplo para construir sobre el título de la tarjeta y componer la mayor parte del contenido de la tarjeta.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Un elemento</li>
                <li class="list-group-item">Un segundo elemento</li>
                <li class="list-group-item">Un tercer elemento</li>
            </ul>
            <div class="card-body">
                <button type="button" class="btn btn-success">Agregar al carrito</button>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
</div>
                        <!-- end page title -->

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
        <script src=" <?php bloginfo('template_url'); ?>/assets/js/jquery.min.js"></script>
        <script src=" <?php bloginfo('template_url'); ?>/assets/js/bootstrap.bundle.min.js"></script>
        <script src=" <?php bloginfo('template_url'); ?>/assets/js/metismenu.min.js"></script>
        <script src=" <?php bloginfo('template_url'); ?>/assets/js/waves.js"></script>
        <script src=" <?php bloginfo('template_url'); ?>/assets/js/simplebar.min.js"></script>

        <!-- App js -->
        <script src=" <?php bloginfo('template_url'); ?>/assets/js/theme.js"></script>

    </body>

</html>