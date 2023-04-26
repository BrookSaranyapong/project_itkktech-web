<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<?php include_once('../authen.php') ?>
<?php
    if (isset($_POST['submit'])) {
                $sql = "INSERT INTO `student` (`std_id`, `std_first_name`, `std_last_name`, `std_department`, `std_program`, `std_class`) 
                            VALUES ('" . $_POST['stdid'] . "', 
                                    '" . $_POST['first_name'] . "', 
                                    '" . $_POST['last_name'] . "', 
                                    '" . $_POST['selectdepartment'] . "',
                                    '" . $_POST['selectprogram'] . "', 
                                    '" . $_POST['selectclass'] . "');";
                $result = $conn->query($sql);
                if ($result) {
                    echo '<script> alert("Finished Creating!")</script>';
                    header('Refresh:0; url=index.php');
                } else {
                    echo '<script> alert("Creating Error!")</script>';
                    header('Refresh:0; url=index.php');
                }
    } else {
        header('Refresh:0; url=index.php');
    }

?>