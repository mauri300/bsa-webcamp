<?php include_once 'includes/templates/header.php'; ?>


  <section class="seccion contenedor">

 
  
    <?php
        try{
            require_once('includes/funciones/bd_conexion.php'); //Se crea la conexion
            $sql = " SELECT evento_id, nombre, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado "; //Se hace la consulta
            $sql .= " FROM eventos ";
            $sql .= " INNER JOIN categoria_evento ";
            $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
            $sql .= " INNER JOIN invitados ";
            $sql .= " ON eventos.id_cat_evento = invitados.invitado_id ";
            $sql .= " ORDER BY evento_id ";
            $resultado = $conn->query($sql); //Se consulta la base de datos
        } catch(\Exception $e){
            echo $e->getMessage();
        }

    ?>

    <div class="calendario">
        <?php
            $calendario = array();
            while( $eventos = $resultado->fetch_assoc()){ 
               
                $fecha = $eventos['fecha_evento']; // Se obtiene la fecha del evento en la iteracion actual
                $evento = array(
                    'titulo' => $eventos['nombre'],
                    'fecha' => $eventos['fecha_evento'],
                    'hora' => $eventos['hora_evento'],
                    'categoria' => $eventos['cat_evento'],
                    'icono' => $eventos['icono'],
                    'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']

                );
                $calendario[$fecha][] = $evento; // Se agrupa por fecha
                ?>

                
                
            <?php   }     //while de fetch_assoc() ?>

            <?php 
                // Se imprimen tods los eventos 
                foreach($calendario as $dia => $lista_eventos){ // Se accede a las llaves con $dia ?>
                    <h3>
                        <i class="fa fa-calendar"></i>
                        <?php 
                            setlocale(LC_TIME, 'spanish');
                            echo strftime("%d de %B del %Y", strtotime($dia)); 
                        ?>
                    </h3>
                    
                    <?php 
                        foreach($lista_eventos as $evento){ ?>
                            <div class="dia">
                                <p class="titulo"><?php echo $evento['titulo']; ?></p>
                                <p class="hora"> 
                                    <i class="fa fa-clock" aria-hidden="true"></i>  
                                    <?php echo $evento['hora']; ?>
                                </p>
                                <p>
                                    <i class="fa <?php echo $evento['icono']; ?>" aria-hidden="true"></i> 
                                    <?php echo $evento['categoria']; ?>
                                </p>
                                <p> 
                                    <i class="fa fa-user" aria-hidden="true"></i>  
                                    <?php echo $evento['invitado']; ?>
                                </p>
                         
                            </div>

                    <?php } ?>
                    
            <?php } ?>
            

    </div><!--Calendario-->

    <?php
        $conn->close(); //Se cierra la base de datos
    ?>
  </section>

  
 



  <?php include_once 'includes/templates/footer.php'; ?>
