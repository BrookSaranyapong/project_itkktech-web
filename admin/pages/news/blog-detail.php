<?php include_once('../authen.php');

    $sql = "SELECT * FROM articles WHERE ar_id = '".$_GET['id']."' AND `status` = 'true'";
    $result = $conn->query($sql) or die($conn->error);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
    }else{
        header('Location: index.php');
    }

    $sql_RAND = "SELECT * FROM `articles` WHERE `status` = 'true' ORDER BY RAND() LIMIT 6";
    $result_RAND = $conn->query($sql_RAND) or die($conn->error);

    include('../../../php/hitcounter.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ข่าวสาร/กิจกรรม</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/images/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/images/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/images/favicons/favicon-16x16.png">
  <link rel="manifest" href="../../../assets/images/favicons/site.webmanifest">
  <link rel="mask-icon" href="../../../assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="../../../assets/images/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="../../../assets/images/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">

  <!-- CSS -->
    <link rel="stylesheet" href="../../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <link rel="stylesheet" href="../../../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../../node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="../../../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet"> 
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=61dc3631fa9c81001d245655&product=inline-share-buttons" async="async"></script></head>

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar & Main Sidebar Container -->
  <?php include_once('../includes/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ข่าวสาร/กิจกรรม</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active">ข่าวสาร</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title d-inline-block">ข่าวสาร/กิจกรรม</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

        <!-- Section page-title -->
        <header class="jarallax" data-speed="0.5"  style=" background-image: url(<?php echo $base_path_news.$row['image']; ?>);">
            <div class="page-image">
                <h1 class="display-4 font-weight-bold"><?php echo $row['subject']; ?></h1>
                <p class="lead"><?php echo $row['sub_title']; ?></p>
            </div>
        </header> 

        <!-- Section Blog -->
        <div class="container blog-content">
            <div class="row">
                <div class="col-12">
                        <?php echo str_replace('./', '../../../',$row['detail'] ); ?>
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
                                <img class="card-img-top" src="<?php echo $base_path_news.$row_RAND['image']; ?>"  alt="...">
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



        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->
  <?php include_once('../includes/footer.php') ?>
  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- DataTables -->
<script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>


<script src="../../../node_modules/jarallax/dist/jarallax.js"></script>
<script src="../../../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="../../../assets/js/main.js"></script>
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
