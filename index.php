<!DOCTYPE html>
<html>
<head>
	<title>Cliente</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Registro de cliente</h1>
    	<input type="text" name="name" placeholder="nombre">
    	<input type="text" name="lastname" placeholder="apellido">
		<input type="email" name="email" placeholder="correo">
		<input type="text" name="years" placeholder="edad">
		<input type="text" name="cel" placeholder="telefono">
    	<input type="submit" name="Cliente">
    </form>
        <?php 
        include("cliente.php");
        ?>
</body>
</html>