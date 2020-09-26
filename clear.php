<?php

    $dbServername = "HOSTNAME";
    $dbUsername = "DATABASE_USERNAME";
    $dbPassword = "DATABASE_PASSWORD";
    $db = "DATABASE_NAME";
    
    
    $conn = new mysqli($dbServername, $dbUsername, $dbPassword, $db);
    
    $ip = $_SERVER["REMOTE_ADDR"];
    
    $sql = "DELETE FROM ips WHERE ipaddr = '$ip'";
    
    if ($conn->query($sql)) {
        echo "Your ip has been logged: <br>" . $_SERVER["REMOTE_ADDR"]; "<br> <a href='https://ipapi.neon-is.fun'>Clear My Data</a>";
    } else {
        echo "SQL ERROR: '$conn->error'";
    }

?>
