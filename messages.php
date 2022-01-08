<table>
		<tr> <th style="width:10%;"> Autor </th> <th>Wiadomość</th> <th style="width:10%;">Data</th> </tr> 

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

				echo "<tr>". "<th>" . $id . "<th>" . $mysender . "</th>" . "<th>" . $message . "</th>"  . "<th>" . $data . "</th>" . "</tr>";
			}
			
		?>
	</table>
