<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>

     <?php 
	include "config.php";
	include "messages.php";
?>

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

</select>
	<button>DELETE</button>
</form>


     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
