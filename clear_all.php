<?php
//THIS CLEARS ALL IPS FROM THE IP LOGGER

    $dbServername = "HOSTNAME";
    $dbUsername = "DATABASE_USERNAME";
    $dbPassword = "DATABASE_PASSWORD";
    $db = "DATABASE_NAME";
    
    
    $conn = new mysqli($dbServername, $dbUsername, $dbPassword, $db);
    
    $ip = $_SERVER["REMOTE_ADDR"];
    
    $sql = "DELETE FROM ips WHERE ipaddr != 'aids'";
    
    if ($conn->query($sql)) {
        echo "Cleared all ips successfully!";
    } else {
        echo "SQL ERROR: '$conn->error'";
    }

?>
