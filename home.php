<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="style-admin.css">
</head>
<body>
	<div id="welcome">
     <h1 >Witaj, <?php echo $_SESSION['name']; ?></h1>
	</div>
     <?php 
	include "config.php";
	include "messages_admin.php";
?>
<div id="delete-container">
<a id="delete-text">Wybierz id komentarza który chcesz usunąć </a>
<form action="sendadmin.php" method="POST">
<select name="ids">

<?php
	$sql_command = "SELECT id FROM messages";
	$myresult = mysqli_query($db, $sql_command);

	while($id_rows = mysqli_fetch_assoc($myresult))
	{
		$id = $id_rows['id'];
		echo "<option value=$id>".$id."</option>";
	}
?>
<!--
<div id="edit-container">
<a id="edit-text">Wybierz id komentarza który chcesz edytować </a>
<form action="" method="POST">
<select name="eds">
/*

-->
</select></br>
	<button id="delete-butt">DELETE</button>
</form>
</div>
<div id="lock">
	 <a href="logout.php"><img id ="lock-icon" src="icons/lock.png"></a>
	</div>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
