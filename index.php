<?php

    include 'includes/header.php';

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "dbdogcareservices";
    
    $conn = new mysqli($server,$user,$pass,$db);
    
    $sql = "SELECT * FROM tblmedicalrecord";
    $result = mysqli_query($conn, $sql);
    
?>



