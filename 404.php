    <?php 
    $title = "404 | Kaykar CCTV";
    $pageName = "404";
    $keywords = "CCTV Install";
    $describtion = "";
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
    <?php include('inc/header.php'); ?>
    </head>

    <body>
    <?php include('inc/nav.php'); ?>


        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5 mb-5">
            <div class="container py-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">404 Error</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">404 Error</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- 404 Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                        <h1 class="display-1">404</h1>
                        <h1 class="mb-4">Page Not Found</h1>
                        <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="/" title="Go Back To Home">Go Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- 404 End -->
            
    <?php 
        include('inc/footer-menu.php');
        include('inc/copyrights.php');
     ?>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top" title="Back to Top"><i class="bi bi-arrow-up"></i></a>

    <?php include('footer.php'); ?>

    </body>

    </html>