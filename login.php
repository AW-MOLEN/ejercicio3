<?php
require_once __DIR__.'/includes/config.php';
require_once __DIR__.'/includes/Usuario.php';
require_once __DIR__.'/includes/FormularioLogin.php';



/*if (! isset($_POST['login']) ) {
	header('Location: login.php');
	exit();
}
*/

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/estilo.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Login</title>
</head>

<body>

<div id="contenedor">

<?php
	require("./includes/comun/cabecera.php");
	require("./includes/comun/sidebarIzq.php");
?>

	<div id="contenido">
		<h1>Acceso al sistema</h1>

			<?php
			$opciones = array();

			$formulario = new FormularioLogin("formLogin", $opciones);
			$formulario->gestiona();
		
			?>

	</div>

<?php
	require("./includes/comun/sidebarDer.php");
	require("./includes/comun/pie.php");
?>


</div>

</body>
</html>