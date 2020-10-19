<!DOCTYPE html>
<html>
<head>
	<title>gmail</title>
</head>
<body>
	<form method="post" action="index.php">
		<input type="text" name="name" placeholder="nombre" required="">
		<input type="email" name="email"placeholder="correo"required="">
		<input type="text" name="asunto"placeholder="asunto"required="">
		<textarea placeholder="correo" name="msg"required=""></textarea>
		<input type="submit" name="enviar">

	

	</form>
		
	<?php 
	if(isset($_POST['enviar'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['msg'];
		$asunto=$_POST['asunto'];
		$header="From: rravehoyos@gmail.com"."\r\n";
		$header.="X-Mailer:PHP/".phpversion();
		mail($email,$asunto,$msg,$header);

	}

	 ?>


</body>
</html>
