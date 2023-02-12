<?php
    $host = 'subbu.mysql.database.azure.com';
    $username = 'groot@subbu';
    $password = 'Diesel123@';
    $db_name = 'ripple';
    
    //Initializes MySQLi
    $conn = mysqli_init();
    
    mysqli_ssl_set($conn,NULL,NULL, "backend/ssl/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
    
    // Establish the connection
    mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306, NULL, MYSQLI_CLIENT_SSL);
    
    //If connection failed, show the error
    if (mysqli_connect_errno())
    {
        die('Failed to connect to MySQL: '.mysqli_connect_error());
    }
?>