    <?php $file_name = basename($_SERVER['SCRIPT_FILENAME'],".php"); ?>
    <!-- Section: Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark bg-alpha">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="../index.php">
                <img class="mr-2" src="assets/images/logo/it.png" width="60" height="60" class="d-inline-block align-top" alt="">
                IT KKTECH
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarKey" aria-controls="navbarKey" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarKey">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item <?php echo $file_name == 'index' ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php">หน้าแรก <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?php echo $file_name == 'about' ? 'active' : '' ?>">
                        <a class="nav-link" href="about.php">เกี่ยวกับ</a>
                    </li>
                    <li class="nav-item <?php echo $file_name == 'blog' || $file_name == 'blog-detail' ? 'active' : '' ?>">
                        <a class="nav-link" href="blog.php">ข่าวสาร</a>
                    </li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown <?php echo $file_name == 'personnel' || $file_name == 'student-detail' || $file_name == 'student-detail2' ? 'active' : '' ?>">
                        <a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown">
                            บุคลากร
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="personnel.php">บุคลากรอาจารย์</a>
                            <a class="dropdown-item" href="student-detail.php">นักศึกษาชั้น ปวช.</a>
                            <a class="dropdown-item" href="student-detail2.php">นักศึกษาชั้น ปวส.</a>
                        </div>
                    </li>

                    <li class="nav-item <?php echo $file_name == 'contact' ? 'active' : '' ?>">
                        <a class="nav-link" href="contact.php">ติดต่อเรา</a>
                    </li>
                    <li class="nav-item" <?php echo $file_name == 'login' ? 'active' : '' ?>>
                        <a class="nav-link" target="_blank" href="admin/login.php">เข้าสู่ระบบ</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

