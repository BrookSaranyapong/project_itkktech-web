<?php //   UPDATE views
      require_once('connect.php');
      
      if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = $_GET['id'];
            $views = $row['views']+1;
            $count = "UPDATE `articles` SET `views` = '".$views."' WHERE ar_id = '".$id."' ";
            $query_count = $conn->query($count);
      }else{
            $id = null;
            echo "fail hitcounter"; 
      }
?>