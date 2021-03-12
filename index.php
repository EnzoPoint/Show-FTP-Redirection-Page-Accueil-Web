<?php

    function RedirectionURL($file) {
        echo $file;
        header("Location: https://$file");
    }
  
    if (isset($_GET['redirection'])) {
        $file = $_GET['redirection'];
        RedirectionURL($file);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Acceuil</title>
</head>
<body>
<center> 
<h1> FLEMME DE FAIRE LE CSS MTN </h1> 
<br>
<?php
/* Acces File */
    
include_once('./config/settings.php');
global $conn;
    
$file_list = ftp_nlist($conn, "");
    foreach ($file_list as $file): 
    if ($file != "." && $file != ".." && $file != "index.php" && $file != "css" && $file != ".htaccess" && $file != "config" && $file != "img" && $file != "phpinfolws.php") {?>
    <br>
    <p> <a href='index.php?redirection=<?php echo $file ?>'><?php echo $file ?></a> </p>
<?php } endforeach; 


/* Close FTP */

ftp_close($conn);
?>
</center>
</body>
</html>



