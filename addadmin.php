<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "guestbook";
   
   // Create connection
   $conn = mysqli_connect($servername, $username, $password, $dbname);
   // Check connection
   if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
   }
    $sql = "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    name VARCHAR(30) NOT NULL,
    password VARCHAR(20)
    )";
    
    if (mysqli_query($conn, $sql)) {
      echo "Table MyGuests created successfully </br>";
    } else {
      //echo "Error creating table: " . mysqli_error($conn);
    }

    $sql1 = "INSERT INTO users ( id,username,name,password) VALUES ('1','admin','admin','admin')";
        
        if (mysqli_query($conn, $sql1)) {
          echo "Admin created succesfull</br>";
        } else {
         // echo "Error creating admin: " . mysqli_error($conn);
        }
    
    mysqli_close($conn);
    ?>