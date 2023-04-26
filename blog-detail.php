<?php 
    require_once('php/connect.php');
    $sql = "SELECT * FROM articles WHERE ar_id = '".$_GET['id']."' AND `status` = 'true'";
    $result = $conn->query($sql) or die($conn->error);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
    }else{
        header('Location: blog.php');
    }
    
    $sql_RAND = "SELECT * FROM `articles` WHERE `status` = 'true' ORDER BY RAND() LIMIT 6";
    $result_RAND = $conn->query($sql_RAND) or die($conn->error);

    // hit counter
    include('php/hitcounter.php');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $row['subject']; ?></title>

<!-- COMMON TAGS -->
    <meta charset="utf-8">

<!-- Search Engine -->
    <meta property="description" content="<?php echo $row['sub_title']; ?>">
    <meta property="title" content="เว็บไซต์แผนกวิชาเทคโนโลยีสารสนเทศวิทยาลัยเทคนิคขอนแก่น">
    <meta property="keywords" content="KKTECH IT, เว็บไซต์แผนกวิชาเทคโนโลยีสารสนเทศขอนแก่น,วิทยาลัยเทคนิคขอนแก่น">
    <meta property="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta property="language" content="English">
    <meta property="author" content="BrookSaranyapong">

<!-- Schema.org for Google -->
    <meta property="name" content="เว็บไซต์แผนกวิชาเทคโนโลยีสารสนเทศวิทยาลัยเทคนิคขอนแก่น">
    <meta property="description" content="<?php echo $row['sub_title']; ?>">

<!-- facebook comment -->
    <meta property = "fb: app_id" content = "2293583147451527&autoLogAppEvents=1">
    
<!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta property="og:title" content="<?php echo $row['subject']; ?>">
    <meta property="og:description" content="<?php echo $row['sub_title']; ?>">
    <meta property="og:url" content="https://kktech-c65b7.firebaseapp.com">
    <meta property="og:site_name" content="https://kktech-c65b7.firebaseapp.com">
    <meta property="og:type" content="website">

<!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="assets/images/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="assets/images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
<!-- CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet"> 

    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=61dc3631fa9c81001d245655&product=inline-share-buttons" async="async"></script></head>
    
<body>
    <!-- Section: Navbar -->
        <?php include_once('includes/navbar.php'); ?>
        
          
    <!-- Section page-title -->
         <header class="jarallax" data-speed="0.5"  style=" background-image: url(<?php echo $base_path_blog.$row['image']; ?>);">
            <div class="page-image">
                <h1 class="display-4 font-weight-bold"><?php echo $row['subject']; ?></h1>
                <p class="lead"><?php echo $row['sub_title']; ?></p>
            </div>
        </header> 
    
    <!-- Section Blog -->
        <div class="container blog-content">
            <div class="row">
                <div class="col-12">
                        <?php echo $row['detail']; ?>
                </div>
                <div class="col-12">
                    <hr>
                    <!-- ShareThis BEGIN -->
                        <div class="sharethis-inline-share-buttons"></div>
                    <!-- ShareThis END -->
                        <p class="text-right text-muted"><?php echo date_format(new DateTime($row['update_at']),"j F Y"); ?></p>
                </div>
                <div class="col-12">
                    <div class="owl-carousel owl-theme">
                        <?php while($row_RAND = $result_RAND->fetch_assoc()){ ?>
                        <section class="col-12 p-2">
                            <div class="card h-100">
                              <a href="blog-detail.php?id=<?php echo $row_RAND['ar_id']; ?>" class="warpper-card-img">
                                <img class="card-img-top" src="<?php echo $base_path_blog.$row_RAND['image']; ?>"  alt="...">
                              </a>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row_RAND['subject']; ?></h5>
                                    <p class="card-text"><?php echo $row_RAND['sub_title']; ?></p>
                                </div>
                                <div class="p-3">
                                    <a href="blog-detail.php?id=<?php echo $row_RAND['ar_id']; ?>" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                                </div>
                            </div>
                        </section>
                        <?php } ?>
                      </div>
                </div>
            </div>
        </div>
    
    <!-- Section Footer -->
    <?php include_once('includes/footer.php'); ?>
    
        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="node_modules/jarallax/dist/jarallax.js"></script>
        <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script>
            $(document).ready(function(){
                $('.owl-carousel').owlCarousel({
                    loop:true,                
                    nav:false,
                    dot:true,
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:2
                        },
                        1000:{
                            items:3
                        }
                    }
                });
            });
        </script>
</body>
</html>