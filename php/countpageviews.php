<?php

require_once("connect.php");
    $sql = "SELECT * FROM userlogs ORDER BY id DESC";
    $result = $conn->query($sql); 
    $res = $result->num_rows;
    echo $res;
?>