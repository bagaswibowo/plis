<?php
$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "C:/ssl/BaltimoreCyberTrustRoot.crt.pem", NULL, NULL) ; 
mysqli_real_connect($conn, 'registerdbmysql.mysql.database.azure.com', 'bagaswibowo@registerdbmysql', 'Advan111', 'sederhana', 3306, MYSQLI_CLIENT_SSL, MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT);
if (!$conn){
        die("Connection Failed:".mysqli_connect_error());
    }
?>
