<?php
//echo $_SERVER["REMOTE_ADDR"];
$ini = parse_ini_file("config.ini");
    $dbServername = $ini.dbhost;
    $dbUsername = $ini.dbuser;
    $dbPassword = $ini.dbpassword;
    $db = $ini.dbname;
    
    
    $conn = new mysqli($dbServername, $dbUsername, $dbPassword, $db);
    
    $ip = $_SERVER["REMOTE_ADDR"];
    
    $sql = "INSERT INTO ips (ipaddr) VALUES ('$ip')";
    
    if ($conn->query($sql)) {
        echo $_SERVER["REMOTE_ADDR"];
    } else {
        echo "SQL ERROR: $conn->error()";
    }
?>
