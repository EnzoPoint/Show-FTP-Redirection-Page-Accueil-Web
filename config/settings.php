<?php

    /* Info FTP */

$ftp_host = "FTP HOST";
$ftp_user = "FTP USER";
$ftp_password = "FTP PASSWORD";

/* Connection FTP */

$conn = ftp_connect($ftp_host);
$login = ftp_login($conn, $ftp_user, $ftp_password);

/* Succes log or not */

if ((!$conn) || (!$login)) {
    die("FTP connection has failed !");
 }

 global $conn;
?>
