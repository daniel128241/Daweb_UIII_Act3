<?php 

include("con_db.php");

if (isset($_POST['Cliente'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['lastname']) >= 1 && strlen($_POST['email']) >= 1 
	    && strlen($_POST['years']) >= 1 && strlen($_POST['cel']) >= 1) {
	    $name = trim($_POST['name']);
		$lastname = trim($_POST['lastname']);
	    $email = trim($_POST['email']);
		$years = trim($_POST['years']);
		$cel = trim($_POST['cel']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO cliente(nombre, apellido, correo, edad, telefono, fecha_resg) 
		VALUES ('$name','$lastname','$email','$years','$cel','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡TU REGISTRO SE AH ENVIADO CON EXITO!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡AH OCUURIDO UN ERROR!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡REVISA QUE LOS CAMPOS HALLAN SIDO COMPLETADOS!</h3>
           <?php
    }
}

?>