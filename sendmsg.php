<html>
	<head>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
<div id="warning">
<?php
	include "config.php";
	
	if (isset($_POST['name']))
	{
		$sender = $_POST['name'];
		$message = $_POST['message'];
		$data = date('Y-m-d H:i');

		if (!empty($sender) == "")
		{ 
		echo 'Nie bądź anonimowy, podaj swoje Imię';
		}
		elseif(!empty($message) == "")
		{ 
			echo 'Napisz nam coś :(';
		}
		else{
		echo $sender . " " . $message . "<br>";

		$sql_statement = "INSERT INTO messages(sender,message,data) VALUES ('$sender','$message','$data')";
		$result = mysqli_query($db, $sql_statement);

		header ("Location: index.php");
		}
	}
	else
	{
		echo "The form is not set.";
	}
?>
</div>

<a id="back-link" href="index.php"><img src="icons/back.png"></a>
</body>
</html>