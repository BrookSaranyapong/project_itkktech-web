<?php 
$uri = $_SERVER['REQUEST_URI'];
$array = explode('/',$uri); 
$key = array_search("pages",$array);
$name = $array[$key+1];
?>

<nav class="main-header navbar navbar-expand border-bottom navbar-dark bg-info">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          Last login: <?= date_format(new DateTIme($_SESSION['last_login']), "j F Y H:i:s" );?>
          <i class="fa fa-th-large"></i>
        </a>
      </li>
    </ul>
</nav>
  <!-- /.navbar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light text-center d-block">Admin Management</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../../assets/images/imageMember/<?= $_SESSION['image']; ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $_SESSION['first_name'] .' '.$_SESSION['last_name']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
          <li class="nav-item">
              <a href="../dashboard" class="nav-link <?php echo $name == 'dashboard' ? 'active': '' ?>">
                <i class="fas fa-chart-line nav-icon"></i>
                <p>Dashboard</p>
              </a>
          </li>
  
          <li class="nav-item">
            <a href="../information" class="nav-link <?php echo $name == 'information' ? 'active': '' ?>">
              <i class="fas fa-user nav-icon"></i>
              <p>ข้อมูลส่วนตัว</p>
            </a>
          </li>
        <?php if($_SESSION['status'] == 'superadmin') { ?>
          <li class="nav-item">
            <a href="../admin" class="nav-link <?php echo $name == 'admin' ? 'active': '' ?>">
              <i class="fas fa-users-cog nav-icon"></i>
              <p>ระบบจัดการข้อมูลผู้ใช้งาน</p>
            </a>
          </li>
        <?php } ?>
        <?php if($_SESSION['status'] != 'user') { ?>
          <li class="nav-item">
            <a href="../personnel" class="nav-link <?php echo $name == 'personnel' ? 'active': '' ?>">
              <i class="fas fa-glasses nav-icon"></i>
              <p>ระบบจัดการบุคลากรอาจารย์</p>
            </a>
          </li>
        <?php } ?>


        <?php if($_SESSION['status'] != 'user') { ?>   
          <li class="nav-item">
            <a href="../student/index.php" class="nav-link <?php echo $name == 'student' ? 'active': '' ?>">
              <i class="fas fa-user-graduate nav-icon"></i>
              <p>ระบบจัดการนักศึกษา</p>
            </a>
          </li> 
          <?php } ?>
       

        <?php if($_SESSION['status'] != 'user') { ?>
          <li class="nav-item">
            <a href="../articles" class="nav-link <?php echo $name == 'articles' ? 'active': '' ?>">
              <i class="fas fa-wrench nav-icon"></i>
              <p>ระบบจัดการข่าวสาร</p>
            </a>
          </li>
        <?php } ?>
        <?php if($_SESSION['status'] != 'user') { ?>
          <li class="nav-item">
            <a href="../contacts" class="nav-link <?php echo $name == 'contacts' ? 'active': '' ?>">
              <i class="fas fa-phone nav-icon"></i>
              <p>รายงานแบบฟอร์มติดต่อเรา</p>
            </a>
          </li>
          <?php } ?>
          <?php if($_SESSION['status'] != 'user') { ?>
          <li class="nav-item">
            <a href="../logs" class="nav-link <?php echo $name == 'logs' ? 'active': '' ?>">
              <i class="fas fa-chart-bar nav-icon"></i>
              <!-- <i class="fa fa-bar-chart" aria-hidden="true"></i> -->
              <p>รายงานผู้เข้าชมเว็บไซต์</p>
            </a>
          </li>
          <?php } ?>

          <li class="nav-item">
            <a href="../news" class="nav-link <?php echo $name == 'news' ? 'active': '' ?>">
              <i class="fas fa-newspaper nav-icon"></i>
              <!-- <i class="fa fa-bar-chart" aria-hidden="true"></i> -->
              <p>ข่าวสาร/กิจกรรม ย้อนหลัง</p>
            </a>
          </li>
          
          <li class="nav-header">Account Settings</li>
          <li class="nav-item">
            <a href="../../logout.php" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
