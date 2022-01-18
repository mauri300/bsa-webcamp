<?php if(isset($_POST['submit'])):  // Se comprueba que se reciba de un boton submit
        var_dump($_POST);
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $regalo = $_POST['regalo'];
        $total = $_POST['total_pedido'];
        $fecha = date('Y-m-d H:i:s');
        echo $total;
        // Pedidos
        $camisas = $_POST['pedido_camisas'];
        $etiquetas = $_POST['pedido_etiquetas'];
        $boletos = $_POST['boletos'];
        include_once 'includes/funciones/funciones.php';
        $pedido = productos_json($boletos, $camisas, $etiquetas);
        $eventos = $_POST['registro'];
        $registro = eventos_json($eventos);
        try{
            require_once('includes/funciones/bd_conexion.php'); //Se crea la conexion
            $stmt = $conn->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, email_registrado, fecha_registro, pases_articulos, talleres_registrados, regalo, total_pagado) VALUES (?,?,?,?,?,?,?,?)"); // Prepare para la insercion en base de datos
            $stmt->bind_param("ssssssis", $nombre, $apellido, $email, $fecha, $pedido, $registro, $regalo, $total);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            header('Location: validar_registro.php?exitoso=1'); // Se asegura que datos no se vuelvan a reincertar en bd cuando se actualiza pagina
        } catch(\Exception $e){
            echo $e->getMessage();
        }  
        
    ?>
<?php endif; ?>
<?php include_once 'includes/templates/header.php'; ?>
    <section class="seccion contenedor">
        <h2>Resumen Registro</h2>  
        <?php if(isset($_GET['exitoso'])):
            if($_GET['exitoso'] == "1"):
                echo "Registro exitoso";
            endif;
        endif; ?>
        

    </section>
<?php include_once 'includes/templates/footer.php'; ?>