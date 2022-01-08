<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $mysqli = new mysqli($dbhost, $dbuser, $dbpass);
    $db = null;
         
    if($mysqli->connect_errno ) {
       printf("Połączenie nie udane !}: %s<br />", $mysqli→connect_error);
       exit();
    }

    if ($mysqli->query("CREATE DATABASE IF NOT EXISTS guestbook")) {
        $db = mysqli_connect($dbhost, $dbuser, $dbpass, 'guestbook');
        if($db->query("CREATE TABLE IF NOT EXISTS messages (
	        id INTEGER NOT NULL AUTO_INCREMENT,
            sender VARCHAR(50),
            message VARCHAR(300),
            data DATETIME,
            PRIMARY KEY (id))"))
        {
            //printf("Stworzono tabele wiadomości .<br />");
        }

    
        else {
            printf("Nie stworzono tabeli wiadomości.<br />");
            exit();
        }
    }

    $mysqli->close();
?>