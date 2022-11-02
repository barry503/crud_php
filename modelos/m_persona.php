<?php 
/***********************************
*version: 1                        *
*fecha: 01-11-2022                 *
*Dev: https://github.com/barry503  *
**********************************/
//incluimos inicialmente la conexion ala base de datos
require '../config/conection.php';

class Persona
{

// inplementamos nuestro constructor
	public function __construct()
	{
      


	}





 //inplementar un metodo para insertar
  public function insertar($nombres,$email,$edad)
  {
         $sql = "INSERT INTO persona (nombres,email,edad)
         VALUES('$nombres','$email','$edad')";
             return ejecutarConsulta($sql);

  }


   //inplementar un metodo para editar registros
public function editar($id,$nombres,$email,$edad)
	{
         $sql = "UPDATE persona SET nombres='$nombres',email='$email',edad='$edad'
         WHERE id='$id' ";
             return ejecutarConsulta($sql);
	}


//inplementar un metodo para eliminar permiso
public function eliminar($id)
{
  $sql = "DELETE FROM persona WHERE id='$id'";
    return ejecutarConsulta($sql);

}




//inplementar un metodo para mostrar  registros a modificar
public function mostrar($id)
{
	$sql= "SELECT * FROM persona WHERE id='$id'";
	return mostrarData($sql);
}








   
//inplementar un metodo para listar  registros 
public function listar()
{
	$sql="SELECT * FROM persona";
	return ejecutarConsultaSimpleFila($sql);

}



}






 ?>

