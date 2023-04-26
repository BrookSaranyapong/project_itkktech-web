<?php $file_name = basename($_SERVER['SCRIPT_FILENAME'],".php"); 
require_once('php/connect.php');?>
    <!-- Section About -->
    <section class="jarallax" data-speed="0.5" style="background-image: url(./assets/images/maxresdefault.jpg);">
            <div class="page-image-about">
                <img class="img-fluid" width="140" src="assets/images/logo/it.png" alt="" ><br>
                <h1 class="text-white display-6 font-weight-bold p-3 animate__animated animate__pulse">เว็บไซต์หลักวิทยาลัยเทคนิคขอนแก่น</h1><br>
                <a class="btn btn-warning"href="http://www.kktech.ac.th" target="_blank">เข้าเว็บไซต์</a>
            </div>
    </section>

        
    <!-- Section Footer -->
    <footer class="semi-footer p-5 text-center text-md-left">
            <div class="row">
                <div class="col-md-4">
                    <a class="navbar-brand text-center text-white" href="#">
                    <img class="mt-2 mr-1" src="assets/images/logo/it.png" width="60" height="60" class="d-inline-block align-top" alt="">
                    <br>
                            IT KKTECH
                    <br>
                    วิทยาลัยเทคนิคขอนแก่น
                    </a>

                    <p>
                    <i class="text-success fas fa-phone-square-alt py-1 mr-1 fa-2x"></i>  
                    โทรศัพท์ 043 - 221290 , 043 - 222738
                    </p>

                    <p>
                        <i class="light-blue fas fa-envelope py-1 mr-1 fa-2x "></i>  
                        khonkaen01@vec.mail.go.th
                    </p>
                    
                    <p>
                        <i class="text-danger fas fa-map-marker-alt py-1 mr-1 fa-2x "></i> 
                        วิทยาลัยเทคนิคขอนแก่น เลขที่  67  ถ.ศรีจันทร์  ต.ในเมือง อ.เมือง รหัสไปรษณีย์ 40000

                    </p>
                    <a href="https://www.facebook.com/%E0%B8%AA%E0%B8%B2%E0%B8%82%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%8A%E0%B8%B2%E0%B9%80%E0%B8%97%E0%B8%84%E0%B9%82%E0%B8%99%E0%B9%82%E0%B8%A5%E0%B8%A2%E0%B8%B5%E0%B8%AA%E0%B8%B2%E0%B8%A3%E0%B8%AA%E0%B8%99%E0%B9%80%E0%B8%97%E0%B8%A8-%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A5%E0%B8%B1%E0%B8%A2%E0%B9%80%E0%B8%97%E0%B8%84%E0%B8%99%E0%B8%B4%E0%B8%84%E0%B8%82%E0%B8%AD%E0%B8%99%E0%B9%81%E0%B8%81%E0%B9%88%E0%B8%99-107946327437705" target="_blank">
                        <i class="fab fa-facebook-square fa-2x"></i>
                    </a>

                    <a href="https://www.youtube.com/watch?v=jReaN6ysx7o&t=1s" target="_blank">
                        <i class="fab fa-youtube-square fa-2x"></i>
                    </a>
                    <h5 class="py-3">จำนวนผู้เช้าชมเว็บไซต์ : <?php $sql = "SELECT * FROM userlogs ORDER BY id DESC";
                                                        $result = $conn->query($sql); 
                                                        $res = $result->num_rows;
                                                        echo $res; ?> ครั้ง
                    </h5>
                </div>
                <div class="col-md-4">
                    <h4 >เมนู</h4>
                    <ul class="navbar-nav">
                        <li class="nav-item <?php echo $file_name == 'index' ? 'active' : '' ?>">
                            <a class="nav-link" href="index.php">หน้าแรก <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $file_name == 'about' ? 'active' : '' ?>" href="about.php">เกี่ยวกับ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $file_name == 'blog' || $file_name == 'blog-detail' ? 'active' : '' ?>" href="blog.php">ข่าวสาร</a>
                        </li>
                        
                        <li class="nav-item dropdown <?php echo $file_name == 'personnel' || $file_name == 'student-detail' || $file_name == 'student-detail2' ? 'active' : '' ?>">
                            <a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown">
                                บุคลากร
                            </a>
                            <div class="dropdown-menu">
                                <a class="text-black-50 dropdown-item" href="personnel.php">บุคลากรอาจารย์</a>
                                <a class="text-black-50 dropdown-item" href="student-detail.php">นักศึกษาชั้น ปวช.</a>
                                <a class="text-black-50 dropdown-item" href="student-detail2.php">นักศึกษาชั้น ปวส.</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php echo $file_name == 'Contact' ? 'active' : '' ?>" href="Contact.php">ติดต่อเรา</a>
                        </li>

                        <li class="nav-item" <?php echo $file_name == 'login' ? 'active' : '' ?>>
                            <a class="nav-link" target="_blank" href="admin/login.php">เข้าสู่ระบบ</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>แผนที่</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2086.645948692537!2d102.84716988759138!3d16.428611447280577!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228a2dcad85239%3A0x74fd60abd4ccde3c!2z4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LmA4LiX4LiE4LiZ4Li04LiE4LiC4Lit4LiZ4LmB4LiB4LmI4LiZ!5e0!3m2!1sth!2sth!4v1641400248006!5m2!1sth!2sth" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
    </footer>
    <footer class="footer">
        <span>COPYRIGHT @ 2021 <a href="https://www.facebook.com/" target="_blank">Brook Saranyapong</a></span>
        All Right Reserved
    </footer>
    <!-- Section On to Top -->
    <div class="to-top">
        <i class="my-1 fa fa-angle-up" aria-hidden="true"></i>
    </div>