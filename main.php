<!DOCTYPE html>
<html>
<head>
	<title>Admin Login System</title>
	<link rel="stylesheet" type="text/css" href="style-admin.css">
</head>
<body>
	<div id="logon">
     <form action="login.php" method="post">
		 <img id ="admin-icon" src="icons/admin.png">
		 <div id="div_login">
     	<h2>Admin Login System</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Login
		 </label></br>
     	<input id ="box" type="text" name="uname" placeholder="User Name" required></br>
		 </br>
     	<label>Hasło</label></br>
     	<input id ="box" type="password" name="password" placeholder="Password" required></br></br>

     	<button id="poszlo" type="submit">Login</button>
		 </div>
     </form>
	</div>

</body>
</html>