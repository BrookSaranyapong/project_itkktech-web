<?php include_once('../authen.php') ?>
<?php
    if(isset($_POST['submit'])){
        $image_name = $_POST['data_file'];
        if( $_FILES['file']['error'] == 0){
            if( !getimagesize($_FILES['file']['tmp_name'])){
                echo '<script> alert(" ต้องอัพโหลดเป็นไฟล์ภาพเท่านั้น! ")</script>';
                header('Refresh:0; url=index.php');
            }
            $temp = explode('.',$_FILES['file']['name']);
            $image_name = round(microtime(true)*9999) . '.' . end($temp);
            $url_upload = '../../../assets/images/personnel/' . $image_name;
            if( !move_uploaded_file($_FILES['file']['tmp_name'], $url_upload)) {
                echo '<script> alert(" ไม่สามารถอัพโหลดรูปภาพใหม่ได้ โปรดลองอีกครั้ง! ")</script>';
                header('Refresh:0; url=index.php'); 
            }
        }$sql = "UPDATE `teacher`
                    SET t_sex = '".$_POST['sex']."'                 ,
                        t_first_name = '".$_POST['first_name']."'   ,
                        t_lastname = '".$_POST['last_name']."'      ,
                        t_image = '".$image_name."'                 ,
                        t_position = '".$_POST['status']."'
                  WHERE t_id = '".$_POST['id']."' ";
        $result = $conn->query($sql) or die($conn->error);
            if($result){
                echo '<script> alert("แก้ไขข้อมูลสำเร็จ!")</script>'; 
                header('Refresh:0; url=index.php');
            } else {
                echo '<script> alert("แก้ไขข้อมูลผิดพลาด!")</script>'; 
                header('Refresh:0; url=index.php');
            }

    }else{
    header('Refresh:0; url=index.php');
    }

?>