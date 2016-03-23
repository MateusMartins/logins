<html>
<head>
	<title></title>
</head>
<body>
<?php
	if (isset($msg)) {
		echo($msg);
	}
?>
<form method="post" action="sourc.php">
	<fieldset>
		<h1>Login</h1>
		Nome :<input type="text" name="name"><br>
		Senha :<input type="password" name="password">
		<input type="submit" value="Entrar" name="btn_send">
	</fieldset>
</form>
</body>
</html>