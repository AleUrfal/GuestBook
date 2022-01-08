<!DOCTYPE html>
<html>
<head>
	<title>LOGIN System</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>Login System</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Login :</label>
     	<input type="text" name="uname" placeholder="User Name" required><br>

     	<label>Hasło:</label>
     	<input type="password" name="password" placeholder="Password" required><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>