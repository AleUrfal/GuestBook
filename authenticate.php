<?php
session_start();
// Change this connection setting to your preference.
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'guestbook';
// Try and connect using the info above.
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if ( mysqli_connect_errno() ) 
{
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
if ( !isset($_POST['username'], $_POST['password']) ) 
{    
    exit('Please make sure you filled both the username and password form fields!');
}
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    // Store or preserve the results. It helps counter-check if the  user account exists within our database.
    $stmt->store_result();
    $stmt->close();
    }
?>