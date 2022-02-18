<?php
include_once 'funciones/funciones.php';
$titulo = $_POST['titulo_evento'];
$categoria_id = $_POST['categoria_evento'];
$invitado_id = $_POST['invitado'];
$fecha_formateada = date('Y-m-d', strtotime($_POST['fecha_evento']));
$hora = date( "H:i", strtotime( $_POST['hora_evento']) );
$clave = '';
$id_registro = $_POST['id_registro'];


if($_POST['registro'] == 'nuevo'){
    //die(json_encode($_POST));
    try {
        
        $stmt = $conn->prepare("INSERT INTO `eventos`(`nombre`, `fecha_evento`, `hora_evento`, `id_cat_evento`, `invitado_id`, `clave`) VALUES (?, ?, ?, ?, ?, ?) ");
        $stmt->bind_param("sssiis", $titulo, $fecha_formateada, $hora, $categoria_id, $invitado_id, $clave);
        $stmt->execute();
        $id_insertado = $stmt->insert_id;
        //die(json_encode($id_registro));
        if($stmt->affected_rows){
            $respuesta = array(
                'respuesta' => 'exito',
                'id_insertado' => $id_insertado
            );
            
        } else {
            $respuesta = array(
                'respuesta' => 'error'
                
            ); 
        }

        $stmt->close();
        $conn->close();
    } catch(Exception $e){
        echo "ERROR: " . $e->getMessage();
    }

    die(json_encode($respuesta));
}

 



if($_POST['registro'] == 'actualizar'){
    //die(json_encode($fecha_formateada));
    try {
        $stmt = $conn->prepare('UPDATE eventos SET nombre = ?, fecha_evento = ?, hora_evento = ?, id_cat_evento = ?, invitado_id = ?, editado = NOW() WHERE evento_id = ? ');
        $stmt->bind_param('sssiii', $titulo, $fecha_formateada, $hora, $categoria_id, $invitado_id, $id_registro);
        $stmt->execute();
        if($stmt->affected_rows){
            $respuesta = array(
                'respuesta' => 'exito',
                'id_insertado' => $id_registro
            );
             
        } else {
            $respuesta = array(
                'respuesta' => 'error'
                
            ); 
        }

        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        $respuesta = array(
            'respuesta' => $e->getMessage()
            
        );  
    }
 
    die(json_encode($respuesta));
}


if($_POST['registro'] == 'eliminar'){
    $id_borrar = $_POST['id'];
    try {
        $stmt = $conn->prepare("DELETE FROM eventos WHERE evento_id = ?");
        $stmt->bind_param("i", $id_borrar);
        $stmt->execute();
        
        
        if($stmt->affected_rows){
            $respuesta = array(
                'respuesta' => 'exito',
                'id_eliminado' => $id_borrar
            );  
        } else {
            $respuesta = array(
                'respuesta' => 'error'
            );  
        }
        $stmt->close();
        $conn->close(); 

    } catch (Exception $e) {
        $respuesta = array(
            'respuesta' => $e->getMessage()
        );  
    }
    die(json_encode($respuesta));
}