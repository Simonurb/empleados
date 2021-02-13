<html>


<head><title>CALCULO DEL AREA DE UN OCTAGONO REGULAR</title></head>

<body>

<?php


//Registrar información arreglo
 if(isset($_POST['btn']) && $_POST['btn'] == 'Enviar') {

//Recibe los datos
 $arrayEmpleado1 = array('Nombre'=>$_POST['nombre1'], 'Apellido'=>$_POST['apellido1'], 'Cedula'=>$_POST['cedula1'], 'Sueldo'=>$_POST['sueldo1'],'Profesion'=>$_POST['profesion1'], 'Pais'=>$_POST['pais1']);

 $arrayEmpleado2 = array('Nombre'=>$_POST['nombre2'], 'Apellido'=>$_POST['apellido2'], 'Cedula'=>$_POST['cedula2'], 'Sueldo'=>$_POST['sueldo2'],'Profesion'=>$_POST['profesion2'], 'Pais'=>$_POST['pais2']);

 $arrayEmpleado3 = array('Nombre'=>$_POST['nombre3'], 'Apellido'=>$_POST['apellido3'], 'Cedula'=>$_POST['cedula3'], 'Sueldo'=>$_POST['sueldo3'],'Profesion'=>$_POST['profesion3'], 'Pais'=>$_POST['pais3']);


//Mostrar arreglo
 if(!empty($arrayEmpleado1) or !empty($arrayEmpleado2) or !empty($arrayEmpleado3)) {


 	echo "<h2 align='center'>Empleado 1</h2>";
 	echo "<br/>";

	foreach($arrayEmpleado1 as $dato=>$info)
	{
	echo "<center>";
	echo "<strong>" . $dato . ":</strong> " . $info;
	echo "<br>";
	echo "</center>";
	}

	echo "<h2 align='center'>Empleado 2</h2>";
 	echo "<br/>";

	foreach($arrayEmpleado2 as $dato=>$info)
	{
	echo "<center>";
	echo "<strong>" . $dato . ":</strong> " . $info;
	echo "<br>";
	echo "</center>";
	}

	echo "<h2 align='center'>Empleado 3</h2>";
 	echo "<br/>";

	foreach($arrayEmpleado3 as $dato=>$info)
	{
	echo "<center>";
	echo "<strong>" . $dato . ":</strong> " . $info;
	echo "<br>";
	echo "</center>";
	}


 
 echo "<br/><br/>";
 echo "<a href='datos.html'>Regresar</a>";
 }
 }
?>

</body>
</html>