<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>JS Bin</title>
	</head>
<body>

<form action="login.php?nama=<?php echo $user; ?>" method="post">
	<input type="text" placeholder="username" name="user">
	<input type="password" placeholder="password" name="password">
	<input type="submit" value="login" name="login">
</form>
</body>
</html>