<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $mysqli = new mysqli($dbhost, $dbuser, $dbpass);
    $db = null;
         
    if($mysqli->connect_errno ) {
       printf("Connect failed: %s<br />", $mysqli→connect_error);
       exit();
    }
    //printf('Connected successfully.<br />');

    if ($mysqli->query("CREATE DATABASE IF NOT EXISTS guestbook")) {
        $db = mysqli_connect($dbhost, $dbuser, $dbpass, 'guestbook');
        //printf("Database guestbook created successfully.<br />");
        if($db->query("CREATE TABLE IF NOT EXISTS messages (
	        id INTEGER NOT NULL AUTO_INCREMENT,
            sender VARCHAR(50),
            message VARCHAR(300),
            data DATETIME,
            PRIMARY KEY (id))"))
        {
            //printf("Table messages created successfully.<br />");
        }

    
        else {
            printf("Could not create table messages.<br />");
            exit();
        }
    }

    $mysqli->close();
?>