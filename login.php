<?php 
session_start(); 
include "db_config.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: main.php?error=Musisz podać login !");
	    exit();
	}else if(empty($pass)){
        header("Location: main.php?error=Musisz podać hasło !");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: main.php?error=Zły login bądź hasło !");
		        exit();
			}
		}else{
			header("Location: main.php?error=Zły login bądź hasło !");
	        exit();
		}
	}
	
}else{
	header("Location: main.php");
	exit();
}