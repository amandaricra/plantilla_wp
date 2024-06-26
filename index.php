
         
            <?php  
            get_header();
            ?>

 <div class="main-content">

<div class="page-content">
    <div class="container-fluid">
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
           
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

                       
    <div class="row">
    <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
    
                    <h4 class="card-title">With Captions</h4>
                    <p class="card-subtitle mb-4">Add captions to your slides easily with the <code>.carousel-caption</code> element within any <code>.carousel-item</code>.</p>
                    
                    <div id="carouselExampleCaption" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img src=" <?php bloginfo('template_url'); ?>/assets/images/media/sm-3.jpg" alt="..." class="d-block img-fluid">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text-white">First slide label</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src=" <?php bloginfo('template_url'); ?>/assets/images/media/sm-4.jpg" alt="..." class="d-block img-fluid">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text-white">Second slide label</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src=" <?php bloginfo('template_url'); ?>/assets/images/media/sm-5.jpg" alt="..." class="d-block img-fluid">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text-white">Third slide label</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaption" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaption" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row-->
<!-- start page title -->
<div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <div class="container-fluid row">
                                    <?php 


if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        
   
                                    ?>
                                        <div class="col-lg-2 col-md-3 col-sm-6">
                                            <div class="card">
                                                <a href="<?php the_permalink(); ?>"> <?php
                                                if ( has_post_thumbnail() ) {
                                                    the_post_thumbnail( 'thumbnail', array( 'class' => 'card-img-top img-fluid' ));
                                                }
                                                 ?></a>
                                                <div class="card-body">
                                                    <h5 class="card-title">  <?php the_title(); ?></h5>
                                                    <p class="card-text">
                                                    <?php the_excerpt()?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php  endwhile;
else :
    _e( 'Nose encontraron productos en la categoria seleccionada', 'textdomain' );
endif; ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
</div>



                        <!-- end page title -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                
                <?php
                    get_footer();
                include ("include/pie_pagina.php")
                ?>
              
          