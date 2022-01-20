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

</select></br>
	<button id="delete-butt">DELETE</button>
</form>
</br>
<!--
<div id="edit-container">
<a id="edit-text">Wybierz id komentarza który chcesz edytować </a>
<form action="sendadmin.php" method="POST">
<select name="eds">
<?php
	include "config.php";

	$sql_command = "SELECT id FROM messages";
	$myresult = mysqli_query($db, $sql_command);

	while($id_rows = mysqli_fetch_assoc($myresult))
	{
		$id1 = $id_rows['id'];
		echo "<option value=$id1>".$id1."</option>";
	}
?>
<?php
if (isset($_POST['eds']))
{
	$selection_id = $_POST['eds'];
	$newvalue=$_POST['wiadomosc'];
	$sql_statement = "INSERT INTO messages(messeage) VALUES = '$newvalue' WHERE id = $selection_id";
	$result = mysqli_query($db, $sql_statement);

	header ("Location: home.php");
}
else
{
	echo "NIE ZADZIAŁAŁO";
}
?>
</select></br>
<a id="edit-text">Wpisz tutaj swój tekst</a>
<input type="text" name="wiadomosc" placeholder="Tu wpisz swoja wiadomosc" require><br>
	<button id="edit-butt">Edit</button>
</form>
-->

</div>
</br>
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
