<?php
//echo $_SERVER["REMOTE_ADDR"];

    $dbServername = "HOSTNAME";
    $dbUsername = "DATABASE_USERNAME";
    $dbPassword = "DATABASE_PASSWORD";
    $db = "DATABASE_NAME";
    
    
    $conn = new mysqli($dbServername, $dbUsername, $dbPassword, $db);
    
    $ip = $_SERVER["REMOTE_ADDR"];
    
    $sql = "INSERT INTO ips (ipaddr) VALUES ('$ip')";
    
    if ($conn->query($sql)) {
        echo $_SERVER["REMOTE_ADDR"];
    } else {
        echo "SQL ERROR: $conn->error()";
    }
?>
