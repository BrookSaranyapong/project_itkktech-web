<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>นักศึกษาชั้น ปวส.</title>
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
<!-- DataTables -->
    <link rel="stylesheet" href="./admin/plugins/datatables/dataTables.bootstrap4.min.css">
</head>

<body>
    <!-- Section: Navbar -->
         <?php include_once('includes/navbar.php');?>
            
            
    <!-- Section page-title -->
         <header class="jarallax" data-speed="0.5"  style=" background-image: url(https://images.unsplash.com/photo-1501290741922-b56c0d0884af?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80);">
            <div class="page-image">
                <h1 class="display-4 font-weight-bold">นักศึกษาชั้น ปวส.</h1>
                <p class="lead">วิทยาลัยเทคนิคขอนแก่นแผนกวิชาเทคโนโลยีสารสนเทศ.</p>
            </div>
        </header> 
    
    <!-- Section Blog -->
    
    <div class="container">

    
    <!-- Main content -->
        <section class="content">
                    <h1 class="border-short-bottom text-center">นักศึกษาแผนกวิชาเทคโนโลยีสารสนเทศวิทยาลัยเทคนิคขอนแก่น</h1>

            <!-- Default box -->
            <div class="card">
                    <div class="card-header py-4 ">
                        <h3 class="card-title text-center">นักศึกษาระดับชั้น ปวส.</h3>
                    </div>

            <!-- ค้นหา -->
            <h2 class="text-center py-4"><i class="fas fa-user-graduate"></i> เลือกระดับชั้น</h2>

            <div class="row justify-content-center">
                    <div class="col-md-4">
                            <div class="form-group my-3 mx-5">
                                <h4 class="text-center">ปวส</h4>
                                <select class="form-control" id="sortBy" name="status">
                                        <option value="" disabled selected>--ปวส--</option>
                                        <option value="สทท.1/1">สทท.1/1</option>
                                        <option value="สทท.2/1">สทท.2/1</option>
                                </select>
                            </div>
                    </div>
            </div>

            <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive">
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
                            </tr>
                        </thead>
                    </table>
                </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
    <!-- /.content -->
    </div>
        

    



    <!-- Section Footer -->
        <?php include_once('includes/footer.php'); ?>

        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="node_modules/jarallax/dist/jarallax.js"></script>
        <script src="assets/js/main.js"></script>
    <!-- DataTables -->
        <script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
        <script src="./admin/plugins/datatables/dataTables.bootstrap4.min.js"></script>


<script>
    // const initFilter = 'สทท.1/1';
    const table = $('#dataTable').DataTable({
        dom: 'Bfrtip',
        buttons: [ 'excel', 'print' ],
        order: [[ 0, "asc" ]] ,
        "paging": true,
        "lengthChange": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "searching": false,
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "./php/student-json.php",
            "type": "POST",
            "data": function ( d ) {
                // d.filter_option = $("#sortBy").val() || initFilter;
                d.filter_option = $("#sortBy").val();
            }
        }
    });

    $(document).ready(function(){
        // Redraw the table
        table.draw();
        
        // Redraw the table based on the custom input
        $('#sortBy').on("change", () =>{
            table.draw();
        });
    });

</script>

</body>
</html>