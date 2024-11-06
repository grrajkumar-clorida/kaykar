<?php 
$title = "Professional Expert CCTV Installation Services in Gobi, Tamil Nadu | Kaykar CCTV";
$metatitle= "Professional Expert CCTV Installation Services in Gobichettipalayam Tamil Nadu | Kaykar CCTV";
$pageName = "contact";
$keywords = "Kaykar CCTV systems, CCTV surveillance systems, CCTV Installation, CCTV Repair, 4g Internet, Wifi Internet, Brand, Hikvision, Colour CCTV Camera, HD 4k CCTV Camera, Company, CCTV surveillance systems, Best Cctv Installation Services in Tamil nadu, Reviews, Map, Address, Phone Number, Contact Number, local, popular Cctv Installation Services, Cctv Installation Services";

$describtion = "Kaykar offers top-notch CCTV server solutions tailored for your security needs. From professional installation to reliable maintenance, our expert team ensures high-quality surveillance systems for homes and businesses. Contact Kaykar today for secure and efficient CCTV server services in Tamil Nadu. Get best quote, read reviews and find contact us";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <script>
       function onSubmit(token) {
         document.getElementById("enquiry_forms").submit();
       }
     </script>
    <?php 
    include('meta.php');
    include('head-off.php'); ?>
    <script src="js/jquery-3.6.0.min.js"></script>
</head>

<body>
    <?php include('inc/nav.php'); ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Contact us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="karkar.com" title="kaykar enterprises">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid bg-light overflow-hidden px-lg-0">
        <div class="container contact px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">Contact Us</h1>
                        </div>
                        <p class="mb-4">The contact offers top-notch CCTV server solutions tailored for your security needs. From professional installation to reliable maintenance, our expert team ensures high-quality surveillance systems for homes and businesses. Contact Kaykar today for secure and efficient CCTV server services in Tamil Nadu</p>
                        <form action="get_response.php" method="post" name="form" id="enquiry_form" class="comment-one__form enquiry_form-validated">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="fname" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Your Email">
                                        <label for="emailid">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Mobile">
                                        <label for="phone">Your Contact Number</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select border-0" style="height: 55px;" name="interstedin">
                                        <option selected>CCTV</option>
                                        <option value="soloar-cctv">Solar CCTV</option>
                                        <option value="wifi_cctv">Wifi CCTV</option>
                                        <option value="internet">Internet</option>
                                        <option value="solar_panel">Soalar Panel</option>
                                        <option value="ip_cam">Bullot | IP Camera</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" name="message" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                        <input type="text" name="captcha" value="gr8" >
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button data-sitekeys="your_site_key" data-callback="onSubmit" class="btn btn-primary w-100 py-3 g-recaptcha" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <iframe class="position-absolute w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15641.48511673614!2d77.4212445!3d11.4531048!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba93d55273dca1f%3A0x16f69f8575d48101!2sKAYKAR%20ENTERPRISES!5e0!3m2!1sen!2sin!4v1723802382772!5m2!1sen!2sin" style="object-fit: cover; border:0; width: 350px; height: 450px;" allowfullscreen="" tabindex="0" aria-hidden="false" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
<script>
$(document).ready(function(){
 
    $("#enquiry_form").on("submit",function(e){
        e.preventDefault();
        if($("#enquiry_form [name='name']").val() === '')
        {
            $("#enquiry_form [name='name']").css("border","1px solid red");
        }
        else if ($("#enquiry_form [name='emailid']").val() === '')
        {
            $("#enquiry_form [name='emailid']").css("border","1px solid red");
        }
        else
        {
            $("#loading-img").css("display","block");
            var sendData = $("#enquiry_form").serialize();
            console.log(sendData);
            $.ajax({
            type: "POST",
            url: "get_response.php",
            data: sendData,
            success: function(data){
                $("#loading-img").css("display","none");
                $(".response_msg").text(data);
                $(".response_msg").slideDown();
                $(".response_msg").slideDown().fadeOut(3000);
                //$("#enquiry_form").find("input[type=text], input[type=email], textarea").val("");
            }

            });
        }
        });

        $("#enquiry_form input").blur(function(){
        var checkValue = $(this).val();
        if(checkValue != '')
        {
            $(this).css("border","1px solid #eeeeee");
        }
    });
});
</script>

<?php 
    include('inc/footer-menu.php');
    include('inc/copyrights.php');
 ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top" title="Back to Top"><i class="bi bi-arrow-up"></i></a>


<?php include('footer.php'); ?>
</body>

</html>