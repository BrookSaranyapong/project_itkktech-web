<?php include_once('../authen.php');?>

<?php
    if(isset($_POST['submit'])){
        $sql = "UPDATE `student`
                    SET std_id = '".$_POST['stdid']."'                       ,
                        std_first_name = '".$_POST['first_name']."'        ,
                        std_last_name = '".$_POST['last_name']."'          ,
                        std_department = '".$_POST['selectdepartment']."'                 ,
                        std_program = '".$_POST['selectprogram']."'                    ,
                        std_class = '".$_POST['selectclass']."'
                  WHERE s_id = '".$_POST['id']."' ";
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