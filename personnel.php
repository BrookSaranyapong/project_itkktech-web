<?php 
      require_once('php/connect.php');

      $sql = "SELECT * FROM `teacher`
              WHERE `t_position` = 'หัวหน้าแผนกวิชา'  
              ORDER BY t_id ";
      $result = $conn->query($sql);

      $sql1 = "SELECT * FROM `teacher`
              WHERE `t_position` = 'ประจำแผนกวิชา'  
              ORDER BY t_id ";
      $result1 = $conn->query($sql1);

      $sql2 = "SELECT * FROM `teacher`
              WHERE `t_position` = 'ประจำแผนก'  
              ORDER BY t_id ";
      $result2 = $conn->query($sql2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>บุคลากร</title>
<!-- COMMON TAGS -->
  <meta charset="utf-8">

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
         <header class="jarallax" data-speed="0.5"  style=" background-image: url(https://images.unsplash.com/photo-1501290741922-b56c0d0884af?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80);">
            <div class="page-image">
                <h1 class="display-4 font-weight-bold">บุคลากร</h1>
                <p class="lead">บุคลากรในแผนกวิชาเทคโนโลยีสารสนเทศ.</p>
            </div>
        </header> 
    
    <!-- Section Blog -->
    
    
    <section class="container py-5">
        <h1 class="border-short-bottom text-center">บุคลากรทางการศึกษาในแผนกวิชาเทคโนโลยีสารสนเทศ <br> วิทยาลัยเทคนิคขอนแก่น</h1>

        <div class="row justify-content-center">
            <?php while($row = $result->fetch_assoc()) { ?>
                <div class="col-12 col-md-3 col-sm-6 p-2">
                    <div class="card h-100">
                            <img src="<?= $base_path_personnel.$row['t_image']; ?>" class="p-3 card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="text-center card-title"><?= $row['t_sex']?><?= $row['t_first_name'] ?> <?= $row['t_lastname'] ?></h6>
                            <h6 class="text-center">ตำแหน่ง <?= $row['t_position']?></h6>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
                 


        <div class="row justify-content-center">
            <?php while($row = $result1->fetch_assoc()) { ?>
                <div class="col-12 col-md-3 col-sm-6 p-2">
                    <div class="card h-100">
                            <img src="<?= $base_path_personnel.$row['t_image']; ?>" class="p-3 card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="text-center card-title"><?= $row['t_sex']?><?= $row['t_first_name'] ?> <?= $row['t_lastname'] ?></h6>
                            <h6 class="text-center">ตำแหน่ง <?= $row['t_position']?></h6>
                        </div>
                    </div>
                </div>
            <?php   }   ?> 
        </div>


        <div class="row justify-content-center">
            <?php while($row = $result2->fetch_assoc()) { ?>
                <div class="col-12 col-md-3 col-sm-6 p-2">
                    <div class="card h-100">
                            <img src="<?= $base_path_personnel.$row['t_image']; ?>" class="p-3 card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="text-center card-title"><?= $row['t_sex']?><?= $row['t_first_name'] ?> <?= $row['t_lastname'] ?></h6>
                            <h6 class="text-center">ตำแหน่ง <?= $row['t_position']?></h6>
                        </div>
                    </div>
                </div>
            <?php   }   ?> 
        </div>
        
    </section>
    



  <!-- Section Footer -->
        <?php include_once('includes/footer.php'); ?>

        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="node_modules/jarallax/dist/jarallax.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>