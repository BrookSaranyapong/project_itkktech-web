<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<?php include_once('../authen.php') ?>
<?php
    if (isset($_POST['submit'])) {
            $temp = explode('.',$_FILES['file']['name']); //explode ฟังค์ชั่นเป็น การแยก จุด ระหว่าง ชื่อไฟล์.นามสกุล ตาม index[0=ชื่อไฟล์][1=นามสกุล]
            $new_name = round(microtime(true)*9999) . '.' . end($temp); //ใช้ end() เป็นการเลือก index[] ตัวสุดท้าย เพื่อเลือกนามสกุล
            $url = '../../../assets/images/personnel/'.$new_name;
            
            if(move_uploaded_file($_FILES['file']['tmp_name'], $url)){
                $sql = "INSERT INTO `teacher` (`t_sex`, `t_first_name`, `t_lastname`, `t_image`, `t_position`) 
                            VALUES ('" . $_POST['sex'] . "', 
                                    '" . $_POST['first_name'] . "', 
                                    '" . $_POST['last_name'] . "', 
                                    '" . $new_name . "', 
                                    '" . $_POST['status'] . "');";
                $result = $conn->query($sql);
                if ($result) {
                    echo '<script> alert("Finished Creating!")</script>';
                    header('Refresh:0; url=index.php');
                } else {
                    echo '<script> alert("Creating Error!")</script>';
                    header('Refresh:0; url=index.php');
                }
            }else{

            }
    } else {
        header('Refresh:0; url=index.php');
    }

?>