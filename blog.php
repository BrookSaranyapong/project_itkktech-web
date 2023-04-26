<?php 
      require_once('php/connect.php');
      $tag = isset($_GET['tag']) ? $_GET['tag'] : 'all';
      $sql = "SELECT * FROM `articles` ar
              INNER JOIN `admin` a ON ar.admin_id = a.id 
              WHERE ar.tag 
              LIKE '%".$tag."%' 
              AND ar.status = 'true' 
              ORDER BY ar.ar_id DESC LIMIT 12";
      $result = $conn->query($sql);
      if(!$result){
          header('Location: blog.php');
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ข่าวสาร</title>
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
         <header class="jarallax" data-speed="0.5"  style=" background-image: url(https://images.unsplash.com/photo-1495020689067-958852a7765e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80);">
            <div class="page-image">
                <h1 class="display-4 font-weight-bold">ข่าวสาร/กิจกรรม</h1>
                <p class="lead">รวมข่าวสารและกิจกรรมในแผนกวิชาเทคโนโลยีสารสนเทศ.</p>
            </div>
        </header> 
    
<!-- Section Blog -->
    <section class="container py-5">
        <div class="row pb-4">
            <div class="col-12 text-center">
                <div class="btn-group-custom">
                    <a href="blog.php?tag=all">
                        <button class="btn btn-primary <?php echo $tag == 'all' ? 'active' : '' ?>">ทั้งหมด</button>
                    </a>
                    <a href="blog.php?tag=news">
                        <button class="btn btn-primary <?php echo $tag == 'news' ? 'active' : '' ?>">ข่าวสาร</button>
                    </a>
                    <a href="blog.php?tag=activity">
                        <button class="btn btn-primary <?php echo $tag == 'activity' ? 'active' : '' ?>">กิจกรรม</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
              <?php 
              if($result->num_rows) {
                  while($row = $result->fetch_assoc()) { 
              ?>
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
                                        <i class="fas fa-eye"></i>
                                        ฮิต: <?php echo $row['views']; ?>
                                        <i class="fas fa-user"> :</i> <?php echo $row['first_name'] ?> <br>
                                        <i class="fas fa-calendar"></i>
                                        <?= date_format(new DateTime($row['update_at']),"j/m/Y H:i:s"); ?>
                                    </p>
                                </div>

                                <div class="p-3">
                                      <a href="blog-detail.php?id=<?php echo $row['ar_id']; ?>" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                                </div>
                          </div>
                      </section>
              <?php
                  } 
              } else { 
              ?>
              <section class="col-12">
                  <p class="text-center">ไม่มีข้อมูล</p>
              </section>
              <?php } ?>
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