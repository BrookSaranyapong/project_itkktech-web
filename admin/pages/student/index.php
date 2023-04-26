<?php include_once('../authen.php');
  error_reporting(0);
  $tag = $_GET['tag'];
  $sql = "SELECT * FROM `student` WHERE `std_class` = '$tag' ORDER BY `student`.`std_id` ASC";
  $result = $conn->query($sql);


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Management</title>
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
              <li class="breadcrumb-item active">ระบบจัดการนักศึกษา</li>
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
          <h3 class="card-title d-inline-block">Student List</h3>
                  <a href="form-create.php" class="btn btn-primary float-right ">Add +</a>
        </div>
      <!-- ค้นหา -->
        <div class="container">
        <h2 class="text-center py-4"><i class="fas fa-user-graduate"></i> เลือกระดับชั้น</h2>

            <div class="row justify-content-center">
                    <div class="col-md-4">
                      <div class="form-group my-3 mx-5">
                          <h4 class="text-center">ปวช</h4>
                          <select class="form-control" name="status" onchange="location = this.value;">
                                  <option value="" disabled selected>--ปวช--</option>
                                  <option value="index.php?tag=ชทท.1/1" <?php echo $tag == 'ชทท.1/1' ? 'selected' : ''; ?>>ชทท.1/1</option>
                                  <option value="index.php?tag=ชทท.1/2" <?php echo $tag == 'ชทท.1/2' ? 'selected' : ''; ?>>ชทท.1/2</option>
                                  <option value="index.php?tag=ชทท.2/1" <?php echo $tag == 'ชทท.2/1' ? 'selected' : ''; ?>>ชทท.2/1</option>
                                  <option value="index.php?tag=ชทท.2/2" <?php echo $tag == 'ชทท.2/2' ? 'selected' : ''; ?>>ชทท.2/2</option>
                                  <option value="index.php?tag=ชทท.3/1" <?php echo $tag == 'ชทท.3/1' ? 'selected' : ''; ?>>ชทท.3/1</option>
                                  <option value="index.php?tag=ชทท.3/2" <?php echo $tag == 'ชทท.3/2' ? 'selected' : ''; ?>>ชทท.3/2</option>
                          </select>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group my-3 mx-5">
                          <h4 class="text-center">ปวส</h1>
                          <select class="form-control" name="status" onchange="location = this.value;">
                                  <option value="" disabled selected>--ปวส--</option>
                                  <option value="index.php?tag=สทท.1/1" <?php echo $tag == 'สทท.1/1' ? 'selected' : ''; ?>>สทท.1/1</option>
                                  <option value="index.php?tag=สทท.2/1" <?php echo $tag == 'สทท.2/1' ? 'selected' : ''; ?>>สทท.2/1</option>
                          </select>
                      </div>
                    </div>
            </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
          <table id="dataTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                  <th width="3%">ลำดับ.</th>
                  <th width="13%">รหัสนักศึกษา</th>
                  <th width="15%">ชื่อ</th>
                  <th width="10%">นามสกุล</th>
                  <th width="25%">สาขาวิชา</th>
                  <th width="17%">สาขางาน</th>
                  <th width="10%">ระดับชั้น</th>
                  <th width="10%">Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php 
              $num = 0;
              while($row = $result->fetch_assoc()) { 
                $num+=1;
            ?>
              <tr>
                <td><?php echo $num; ?></td>
                <td><?php echo $row['std_id']; ?></td>
                <td><?php echo $row['std_first_name']; ?></td>
                <td><?php echo $row['std_last_name']; ?></td>
                <td><?php echo $row['std_program']; ?></td>
                <td><?php echo $row['std_department']; ?></td>
                <td><?php echo $row['std_class']; ?></td>
                <td>
                  <a href="form-edit.php?id=<?php echo $row['s_id']; ?>" class="btn btn-sm btn-warning text-white">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="#" onclick="deleteItem(<?php echo $row['s_id']; ?>);" class="btn btn-sm btn-danger">
                        <i class="fas fa-trash-alt"></i>
                  </a>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
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

  function deleteItem (id) { 
    if( confirm('Are you sure, you want to delete this item?') == true){
      window.location=`delete.php?id=${id}`;
      // window.location='delete.php?id='+id;
    }
  };





      // datatables filter search

  function filterGlobal () {
  $('#ex').DataTable().search(
      $('#global_filter').val(),
 
  ).draw();
  }
 
  function filterColumn ( i ) {
      $('#ex').DataTable().column( i ).search(
          $('#col'+i+'_filter').val()
      ).draw();
  }
 
  $(document).ready(function() {
      $('#ex').DataTable();
 
      $('input.global_filter').on( 'keyup click', function () {
          filterGlobal();
      } );
 
      $('input.column_filter').on( 'keyup click', function () {
          filterColumn( $(this).parents('div').attr('data-column') );
      } );
  } );
 
      $('select.column_filter').on('change', function () {
          filterColumn( $(this).parents('div').attr('data-column') );
      } );



</script>

</body>
</html>
