<?php
/***********************************
*version: 1                        *
*fecha: 01-11-2022                 *
*Dev: https://github.com/barry503  *
**********************************/
//incluimos las costantes de conection
#utilizamos require_once para no volver a incluir el archivo
require_once 'global.php';
#todo dentro de la variable 

try {
	//esta variable contiene la conection a la base de datos con las variables globales
	$conection =  new PDO("$tipo_base:host=$host_servidor;port=$port_servidor;dbname=$nom_db", $user_db, $pass_db);
	$conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);#
	#if ($conection): echo "conectado"; endif;//valida si existe la var de conection
} catch (Exception $e) {
	echo $e->getMessage();#esta linea imprime errores que puedan ocurrir
}

if(!function_exists('ejecutarConsulta'))
{
// servira para ejecutar crud
  function ejecutarConsulta($sql)
  {
   global $conection;
   $query = $conection->prepare($sql);
   $query->execute();
   return $query;
 
  }

// servira para ejecutar crud
  function mostrarData($sql)
  {
   	  global $conection;
   	  $query = $conection->prepare($sql);
   	  $query->execute();
    $row = $query->fetchAll(PDO::FETCH_ASSOC);
    return $row;
 
  }

// servira para mostrar datos
  function ejecutarConsultaSimpleFila($sql)
  {
  	  global $conection;
  	  $query = $conection->prepare($sql);
  	  $query->execute();
   $query = $query->fetchAll(PDO::FETCH_OBJ);
   return $query;

  }

function limpiarCadena($str)
{
	global $conexion;
	$str = trim($str);
	return htmlspecialchars($str);
}

}

 ?>
