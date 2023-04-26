<?php 
      session_start();
      require_once('php/connect.php');
      $sql = "SELECT * FROM `articles` as ar 
              INNER JOIN `admin` as a on ar.admin_id = a.id 
              WHERE ar.tag 
              LIKE '%news%' 
              AND ar.status = 'true' 
              ORDER BY `ar`.`ar_id` DESC LIMIT 4";
      $result = $conn->query($sql);
      if(!$result){
        header('Location: index.php');
      }
      $sqlac = "SELECT * FROM `articles` as ar 
                INNER JOIN admin as a on ar.admin_id = a.id 
                WHERE ar.tag 
                LIKE '%activity%' 
                AND ar.status = 'true' 
                ORDER BY `ar`.`ar_id` DESC LIMIT 4";
      $resactivity = $conn->query($sqlac);
      if(!$resactivity){
          header('Location: index.php');
      }


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>เว็บไซต์แผนกวิชาเทคโนโลยีสารสนเทศวิทยาลัยเทคนิคขอนแก่น</title>
<!-- Section Meta tag -->
    <?php include('includes/meta.php'); ?>
<!-- CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- Animate CSS -->
    <link
            rel="stylesheet"
            href="./node_modules/animate.css/animate.min.css"
    />
    <link
            href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap"
            rel="stylesheet"
    />
    <style>
        .img-pic {
            display: block;
            max-width: 50%;
            height: auto;
        }
        .myfadeRight {
            display: inline-block;
            margin: 0 0.5rem;

            animation: fadeInRight; /* referring directly to the animation's @keyframe declaration */
            animation-duration: 2s; /* don't forget to set a duration! */
        }
        
        .myfadeLeft {
            display: inline-block;
            margin: 0 0.5rem;

            animation: fadeInLeft; /* referring directly to the animation's @keyframe declaration */
            animation-duration: 2s; /* don't forget to set a duration! */
        }
        .animate__pulse{
            display: inline-block;
            margin: 0 0.5rem;

            animation: pulse infinite; /* referring directly to the animation's @keyframe declaration */
            animation-duration: 5s; 
        }
    </style>
</head>

<body>
    <!-- Section: Navbar -->
    <?php include_once('includes/navbar.php');?>
    
    <!-- Section Carousel -->
    <section id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-img" style="background-image: url('assets/images/เทคโนโลยีสารสนเทศ/bannerITKKTECH1.jpg') ;">
                    <div class="carousel-caption">
                    </div>
                    <div class="backscreen"></div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img" style="font-family: 'Open Sans', sans-serif; background-image: url('assets/images/เทคโนโลยีสารสนเทศ/bannerITKKTECH1-1.jpg') ;">
                    <div class="carousel-caption">
                    </div>
                    <div class="backscreen"></div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img" style="font-family: 'Open Sans', sans-serif; background-image: url('assets/images/เทคโนโลยีสารสนเทศ/bannerITKKTECH2.jpg') ;">
                    <div class="carousel-caption">
                    </div>
                    <div class="backscreen"></div>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </section>


            <!-- Section TODO -->
    <Section class="container py-4">
    <h1 class="border-short-bottom text-center">แนะนำ<span class="text-warning-custom">วิทยาลัยเทคนิคขอนแก่น</span></h1>
        <div class="row justify-content-center">
            <div class="col-lg-6 py-3 p-lg-0">
                <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item"
                        src="https://www.youtube.com/embed/jReaN6ysx7o" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                </iframe>
                </div>
            </div>
        </div>
    </Section>

    <!-- Section Hope -->

    <!-- Section Blog --> 
    <section class="jarallax" data-speed="0.5" style="background-image: url(./assets/images/newspapers.jpg);">
            <div class="page-image-about">
                    <img class="img-fluid" width="140" src="assets/images/logo/it.png" alt="" >
                    <h1 class="text-white display-6 font-weight-bold p-3">ข่าวสารและกิจกรรม</h1>
            </div>
        </section>


<section class="container">
    <h1 class="text-center py-5"><i class="mr-3 fas fa-newspaper"></i>ข่าวสาร</h1>
    <div class="row">
        <?php while($row = $result->fetch_assoc()) {  ?>
        <section class="col-12 col-md-3 col-sm-6 p-2">
                <div class="card h-100">
                    <a href="blog-detail.php?id=<?php echo $row['ar_id']; ?>" class="warpper-card-img">
                            <img src="<?php echo $base_path_blog.$row['image']; ?>" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                            <h5 class="card-title"><?php echo $row['subject']; ?></h5>
                            <p class="card-text"><?php echo $row['sub_title']; ?></p>
                    </div>
                    <div class="mx-3">
                                <p class="px-3">
                                <!-- ผู้เข้าชม -->
                                <i class="fas fa-eye"></i>
                                    ฮิต: <?php echo $row['views']; ?>
                                 <!-- เขียนโดย -->
                                <i class="fas fa-user"> :</i> <?php echo $row['first_name']; ?>  <br>
                                <!-- date -->
                                <i class="fas fa-calendar"></i>
                                    <?= date_format(new DateTime($row['update_at']),"j/m/Y H:i:s"); ?>
                                </p>
                    </div>
                    <div class="p-3">
                            <a href="blog-detail.php?id=<?php echo $row['ar_id']; ?>" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                    </div>
                </div>
        </section>
        <?php } ?>
    </div>
</section>
        <!-- Section Blog Activity --> 
        <section class="container">
            <h1 class="text-center my-5"><i class="mr-3 fas fa-bullhorn"></i>กิจกรรม</h1>
            <div class="row">
                <?php while($rows = $resactivity->fetch_assoc()) {  ?>
                <section class="col-12 col-md-3 col-sm-6 p-2">
                        <div class="card h-100">
                            <a href="blog-detail.php?id=<?php echo $rows['ar_id']; ?>" class="warpper-card-img">
                                    <img src="<?php echo $base_path_blog.$rows['image']; ?>" class="card-img-top" alt="...">
                            </a>
                            
                            <div class="card-body">
                                    <h5 class="card-title"><?php echo $rows['subject']; ?></h5>
                                    <p class="card-text"><?php echo $rows['sub_title']; ?></p>
                            </div>

                            <div class="mx-3">
                                <p class="px-3">
                                <i class="fas fa-eye"></i>
                                 ฮิต: <?php echo $rows['views']; ?>
                                <i class="fas fa-user"> :</i> <?php echo $rows['first_name']; ?> <br>
                                <i class="fas fa-calendar"></i>
                                <?= date_format(new DateTime($rows['update_at']),"j/m/Y H:i:s"); ?>
                                </p>
                            </div>

                            <div class="p-3">
                                    <a href="blog-detail.php?id=<?php echo $rows['ar_id']; ?>" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                            </div>
                        </div>
                </section>
                <?php } ?>
            </div>
        </section>


    <!-- Section Footer เว็บไซต์แผนกวิชาเทคโนโลยีสารสนเทศวิทยาลัยเทคนิคขอนแก่น -->
    <?php include_once('includes/footer.php') ?>
    <?php include_once('php/userlogs.php') ?>

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>