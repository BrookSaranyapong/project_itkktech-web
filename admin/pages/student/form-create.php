<?php include_once('../authen.php');?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Student Management</title>
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
            <h1>ระบบจัดการนักศึกษา</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="../student">ระบบจัดการนักศึกษา</a></li>
              <li class="breadcrumb-item active">Create Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Create Data</h3>
        </div>
        <!-- /.card-header -->

        

        <!-- form start -->
        <div class="card-body">
        <form role="form" action="create.php" method="post" enctype="multipart/form-data">
        <div class="form-row">
            

            <div class="form-group  col-md-12">
              <label for="stdid">รหัสนักศึกษา</label>
              <input type="text" class="form-control" name="stdid" id="stdid" placeholder="รหัสนักศึกษา" required>
            </div>

            <div class="form-group col-md-6">
              <label for="firstName">ชื่อ</label>
              <input type="text" class="form-control" name="first_name" id="firstName" placeholder="ชื่อ" required>
            </div>
            
            <div class="form-group col-md-6">
              <label for="lastName">นามสกุล</label>
              <input type="text" class="form-control" name="last_name" id="lastName" placeholder="นามสกุล" required>
            </div>

            <div class="form-group  col-md-12">
              <label for="program">สาขาวิชา</label>
              <select class="form-control" name="selectprogram" required>
                <option value="" disabled selected>--สาขาวิชา--</option>
                <option value="นักพัฒนาซอต์ฟแวร์คอมพิวเตอร์">นักพัฒนาซอต์ฟแวร์คอมพิวเตอร์</option>
                <option value="เทคโนโลยีสารสนเทศ">เทคโนโลยีสารสนเทศ</option>
              </select>
            </div>
            <div class="form-group  col-md-12">
                <label for="department">สาขางาน</label>
                <select class="form-control" name="selectdepartment" required>
                      <option value="เทคโนโลยีสารสนเทศ">เทคโนโลยีสารสนเทศ</option>
                </select>
            </div>
            

                <div class="form-group  col-md-12">
                  <label>เลือกระดับชั้น</label>
                      <select class="form-control" name="selectclass" required>
                            <option value="" disabled selected>--ปวช--</option>
                            <option value="ชทท.1/1">ชทท.1/1</option>
                            <option value="ชทท.1/2">ชทท.1/2</option>
                            <option value="ชทท.2/1">ชทท.2/1</option>
                            <option value="ชทท.2/2">ชทท.2/2</option>
                            <option value="ชทท.3/1">ชทท.3/1</option>
                            <option value="ชทท.3/2">ชทท.3/2</option>
                            <option value="" disabled selected>--ปวส--</option>
                            <option value="สทท.1/1">สทท.1/1</option>
                            <option value="สทท.2/1">สทท.2/1</option>
                      </select>
                </div>
          </div>

          </div>
          <div class="card-footer">
              <a href="index.php" class="btn btn-warning float-left">ย้อนกลับ</a>
              <button type="submit" name="submit" class="btn btn-primary float-right">บันทึก</button>
          </div>
        </form>
      </div>    
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

<script>
  $(function () {
    $('#dataTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });

  $('.custom-file-input').on('change', function(){
        var size = this.files[0].size / 1024 / 1024
        console.log(size.toFixed(2))

        if(size.toFixed(2) > 2){
          alert('to big, maximum is 2MB')
        }else{
            var fileName = $(this).val().split('\\').pop()
            $(this).siblings('.custom-file-label').html(fileName)
            if (this.files[0]) {
                var reader = new FileReader()
                $('.figure').addClass('d-block')
                reader.onload = function (e) {
                    $('#imgUpload').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0])
              }
        }
    })
</script>

</body>
</html>
