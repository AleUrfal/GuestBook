<?php 
	include "config.php";

	if (isset($_POST['eds']))
	{
        $new_message = $_POST[''];
		$selection_id = $_POST['eds'];
		$sql_statement = "INSERT INTO messages(message) Values ('$zmienna') WHERE id = $selection_id";
		$result = mysqli_query($db, $sql_statement);

		header ("Location: home.php");
	}
	else
	{
		echo "The form is not set.";
	}
?>