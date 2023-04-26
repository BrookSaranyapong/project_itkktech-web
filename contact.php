<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ติดต่อเรา</title>

<!-- Section Meta tag -->
<?php include('includes/meta.php'); ?>

<!-- CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet"> 
</head>

<body>
    <!-- Section: Navbar -->
        <?php include_once('includes/navbar.php');?>
            
    <!-- Section page-title -->
    
        <header class="jarallax" data-speed="0.5"  style="background-image: url(https://images.unsplash.com/photo-1423784346385-c1d4dac9893a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80);">
                    <div class="page-image">
                        <h1 class="display-4 font-weight-bold">ข้อมูลการติดต่อ</h1>
                        <p class="lead">แผนกวิชาเทคโนโลยีสารสนเทศวิทยาลัยเทคนิคขอนแก่น</p>
                    </div>
        </header>
    
    <!-- Section Blog -->
        <section class="container py-5">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="border-short-bottom">รายละเอียด</h2>
                </div>
                    <div class="col-sm-4 mb-3 mb-2">
                        <div class="card h-100">
                            <div class="card-body">
                                <i class="fa fa-address-card fa-4x py-2 text-muted " aria-hidden="true"></i>
                                <h4 class="card-title">ที่อยู่</h4>
                                <p class="card-text">67 ถ. ศรีจันทร์ ตำบลในเมือง อำเภอเมืองขอนแก่น ขอนแก่น 40000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3">
                        <div class="card  h-100">
                            <div class="card-body">
                                <i class="fa fa-phone-square fa-4x py-2 text-muted" aria-hidden="true"></i>
                                <h4 class="card-title">เบอร์โทรศัพท์</h4>
                                <p class="card-text">(+66)86-395-4794</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3">
                        <div class="card  h-100">
                            <div class="card-body">
                                <i class="fa fa-envelope fa-4x py-2 text-muted" aria-hidden="true"></i>
                                <h4 class="card-title">อีเมล</h4>
                                <p class="card-text">s63309010017@kktech.ac.th</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">แบบฟอร์มติดต่อเรา</h5>
                            <form method="post" action="php/contact.php">
                                    <div class="form-row ">
                                        <div class="form-group col-md-4">
                                            <label for="name">ชื่อ</label>
                                            <input class="form-control" name="name" type="text" id="name" required  placeholder="ชื่อของคุณ">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="phone">เบอร์โทรศัพท์</label>
                                            <input class="form-control" name="phone" type="text" id="phone" required placeholder="เบอร์โทรศัพท์">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="Email">อีเมลล์</label>
                                            <input class="form-control" name="email" type="email" id="email" required  placeholder="example@email.com">
                                        </div>
                                    </div>
    
                                    <div class="form-group">
                                        <label for="message">ข้อความของคุณ</label>
                                        <textarea id="message" name="message" rows="5" class="form-control" required placeholder="เขียนข้อความของคุณที่นี่"></textarea>
                                    </div>
                                    
                                    <div id="recaptcha-wrapper" class="text-center my-2">
                                        <div class="g-recaptcha d-inline-block" 
                                             data-callback="recaptchaCallback"
                                             data-sitekey="your_capchakey">
                                        </div>
                                    </div>
                                    
                                    <button type="submit" id="btn-submit" name="btn-submit" class="btn btn-primary d-block mx-auto" disabled>ส่งข้อความ</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    <!-- Section Footer -->
    <?php include_once('includes/footer.php'); ?>

<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="node_modules/jarallax/dist/jarallax.js"></script>
<script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
// If reCAPTCHA is still loading, grecaptcha will be undefined.
    grecaptcha.ready(function(){
        grecaptcha.render("container", 
        { sitekey: "your_captchakey" });
    });
</script>
<script>
    $(function(){
        // global variables
            captchaResized = false;
            captchaWidth = 304;
            captchaHeight = 78;
            captchaWrapper = $('#recaptcha-wrapper');
            captchaElements = $('#rc-imageselect, .g-recaptcha');
    
            $(window).on('resize', function() {
                resizeCaptcha();
            });
    
            resizeCaptcha();
    });

    function resizeCaptcha() {
        if (captchaWrapper.width() >= captchaWidth) {
            if (captchaResized) {
                captchaElements.css('transform', '').css('-webkit-transform', '').css('-ms-transform', '').css('-o-transform', '').css('transform-origin', '').css('-webkit-transform-origin', '').css('-ms-transform-origin', '').css('-o-transform-origin', '');
                captchaWrapper.height(captchaHeight);
                captchaResized = false;
            }
            } else {
                var scale = (1 - (captchaWidth - captchaWrapper.width()) * (0.05/15));
                captchaElements.css('transform', 'scale('+scale+')').css('-webkit-transform', 'scale('+scale+')').css('-ms-transform', 'scale('+scale+')').css('-o-transform', 'scale('+scale+')').css('transform-origin', '0 0').css('-webkit-transform-origin', '0 0').css('-ms-transform-origin', '0 0').css('-o-transform-origin', '0 0');
                captchaWrapper.height(captchaHeight * scale);
                if (captchaResized == false) captchaResized = true;
            }
    }
// resizeCaptcha();
    function recaptchaCallback(){
        $('#btn-submit').removeAttr("disabled");
    }
</script>
      
    </body>
    </html>