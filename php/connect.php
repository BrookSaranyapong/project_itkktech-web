<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<?php 
        error_reporting(0);
        // create connection php mysqli class
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'itkktech';
        $conn = new mysqli($servername, $username, $password, $dbname);
        // ตั้งค่า ให้รองรับภาษาไทย
        $conn->set_charset("utf8");
        // check connection
        if ($conn->connect_error) 
            { die("Connection failed: " . $conn->connect_error); }
        $base_path_blog = './assets/images/blog/';
        $base_path_personnel = './assets/images/personnel/';
        $base_path_news = '../../../assets/images/blog/';
        // ตั้งค่า timezone 
        date_default_timezone_set('Asia/bangkok');

?>