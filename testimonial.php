<?php 
$title = "Testimonial |Kaykar CCTV";
$pageName = "testimonial";
$keywords = "";
$describtion = "Kaykar offers top-notch CCTV server solutions tailored for your security needs. From professional installation to reliable maintenance, our expert team ensures high-quality surveillance systems for homes and businesses. Contact Kaykar today for secure and efficient CCTV server services in Tamil Nadu.";
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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Testimonial</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="kaykar.com" title="kaykar Enterprice">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Testimonial</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
                <h1 class="display-5 mb-5">Testimonial</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-1.jpg' alt='testimonial'>">
                    <p class="fs-5">Kaykar's company provided outstanding service for our office CCTV installation. They were incredibly knowledgeable, answered all our questions, and ensured that everything was working perfectly before leaving. The installation was quick and hassle-free. I'm very satisfied with the results and would definitely use their services again.</p>
                    <h4>Meera R.</h4>
                    <span class="text-primary">Coimbatore</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-2.jpg' alt='testimonial'>">
                    <p class="fs-5">I am extremely pleased with the CCTV installation done by Ravi and his team. They were very professional, and the installation was completed on time. The quality of the equipment is excellent, and the customer service was beyond my expectations. If you need CCTV installation in Salem, Ravi’s company is the way to go!</p>
                    <h4>SadaSivam</h4>
                    <span class="text-primary">Tirupur</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-3.jpg' alt='testimonial'>">
                    <p class="fs-5">The cameras are of high quality and the system is very user-friendly. I would recommend Ravi’s services to anyone in Tamil Nadu looking for reliable and professional CCTV solutions.</p>
                    <h4>Renganathan</h4>
                    <span class="text-primary">Gobichettipalayam</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        
<?php 
    include('inc/footer-menu.php');
    include('inc/copyrights.php');
 ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top" title="Back to Top"><i class="bi bi-arrow-up"></i></a>

<?php include('footer.php'); ?>
</body>

</html>