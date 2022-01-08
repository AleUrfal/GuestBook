<!DOCTYPE html lang="pl-PL">
<html>
<head>
	<meta charset="UTF-8">
	<title>Księga Gości</title>
	<link rel="stylesheet" href="style.css"/>

</head>

<body>
		<h1><b>Witaj w naszej Księdze Gości</b></h1>
		<br>
		<h2>Pozostaw po sobie wiadomość</h2>

		<form action="sendmsg.php" method="POST">
			<input type="text" name="name" placeholder="Imię"><br>
			<input type="text" name="message" placeholder="Wiadomość" rows="5" width="90%"></textarea><br>
			<button class="postButton">DODAJ</button>
		</form>

	

		<br>
		<br>
		<h2>Tutaj możesz przeczytać wszystkie wpisy:</h2>
		<!-- Poczatek ksiazki html -->

		<div class="center">
            <div class="page">
                <h1>Księga Gości</h1>
       

		<!-- Tabel zostawiam echo "<tr>" . "<th>" . $mysender . "<hr>" . "</th>" . "<th>" . $message . "<hr>" . "</th>"  . "<th>" . $data . "<hr>" . "</th>" . "</tr>";-->
		<table>
		<tr> <th style="width:3%;"> Autor </th> <th style="width:10%"> Wiadomość </th> <th style="width:5%;">Data</th> </tr> 

		<?php
			include "config.php";
			$sql_statement = "SELECT * FROM messages";

			$result = mysqli_query($db, $sql_statement);

			
			while($row = mysqli_fetch_assoc($result))
			{
				$id = $row['id'];
				$mysender = $row['sender'];
				$message = $row['message'];
				$data = $row['data'];
				

				
				echo "<tr>" . "<th>" . $mysender . "</th>" . "<th>" . $message . "</th>"  . "<th>" . $data . "</th>" . "</tr>";
				
				}
			
		?>
	</table>
	<!-- Tabel zostawiam -->

	   </div>
        </div>

	<!-- koniec ksiazki html -->

</body>
</html>