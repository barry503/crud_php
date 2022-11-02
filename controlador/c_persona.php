<?php 
/***********************************
*version: 1                        *
*fecha: 01-11-2022                 *
*Dev: https://github.com/barry503  *
**********************************/
require_once "../modelos/m_persona.php";

// se crea la istancia $persona
$persona= new Persona();


// si existe el id
$id =isset($_POST["id"])? limpiarCadena($_POST["id"]):"";
$nombres = isset($_POST["nombres"])? limpiarCadena($_POST["nombres"]):"";
$email = isset($_POST["email"])? limpiarCadena($_POST["email"]):"";
$edad = isset($_POST["edad"])? limpiarCadena($_POST["edad"]):"";


switch($_GET["op"]){

  case 'guardaryeditar':
       if($id==0){
             $respuesta=$persona->insertar($nombres,$email,$edad);
             echo $respuesta ? "persona registrada" : "La persona no se pudo registrar";
       }
         else {
               $respuesta=$persona->editar($id,$nombres,$email,$edad);
             echo $respuesta ? "Datos de la persona actualizada" : "persona no se pudo actualizar";

         }
  break;


case 'eliminar':
           $respuesta=$persona->eliminar($id);
             echo $respuesta ? "persona eliminada" : "persona no se pudo eliminar";

  break;




    case'mostrar':
              $respuesta=$persona->mostrar($id);
              //codificar el resultado json
             echo json_encode($respuesta); 
    break;




     case'listar':
      $respuesta=$persona->listar();
      // vamos a declarar un array o arreglo
       $data= Array(); 


       foreach($respuesta as $reg){
           $data[]=array(
               "0" =>'<button title="Editar la persona" class="btn btn-sm m-1 btn-warning " onclick="mostrar('.$reg->id.')"><i class="fa fa-edit"></i></button>    '.'<button class="btn btn-sm m-1 btn-danger" title="Eliminar la persona por completo" onclick="eliminar('.$reg->id.')"><i class="fas fa-trash"></i></button>',
               "1"=>$reg->id,
               "2" =>$reg->nombres,
                "3" =>$reg->email,
                "4" =>$reg->edad
                
              );

       }

       $results = array(
         "sEcho" =>1, //informacion para el datatables
          "iTotalRecords" =>count($data), //enviamos el total registros al datatable
           "iTotalDisplayRecords" =>count($data), //enviamos el total registros a           visualizar
           "aaData"=>$data);

       echo json_encode($results);
    break;
    

}





 ?>
