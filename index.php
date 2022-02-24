<?php include_once 'includes/templates/header.php'; ?>

  <section class="seccion contenedor">
    <h2>Conferencia de diseño web en español</h2>
    <p>Proin sodales tempor magna vitae molestie. Integer aliquam laoreet sapien a auctor. Ut efficitur ultricies metus, pellentesque tristique justo. Aenean consectetur felis sit amet risus pharetra, et aliquam nisi ultricies. Nulla nisi diam, viverra ut tellus in, varius fermentum dui. </p>
  </section>

  <section class="programa">
    <div class="contenedor-video">
      <video autoplay loop poster="img/bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.webm" type="video/webm">
        <source src="video/video.ogv" type="video/ogv">
      </video>
    </div> <!--Contenedor video-->

    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del evento</h2>

          <?php
            try{
                require_once('includes/funciones/bd_conexion.php'); //Se crea la conexion
                $sql = " SELECT * FROM `categoria_evento` "; //Se hace la consulta
                $resultado = $conn->query($sql); //Se consulta la base de datos
            } catch(\Exception $e){
                echo $e->getMessage();
            }

          ?>

          <nav class="menu-programa">
            <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
              <?php $categoria = $cat['cat_evento']; ?>
              <a href="#<?php echo strtolower($categoria); ?>">
                <i class="fa-solid <?php echo $cat['icono']; ?>"></i> <?php echo $categoria; ?> 
              </a>
            <?php } ?>
          </nav>

          <?php
            try{
                require_once('includes/funciones/bd_conexion.php'); //Se crea la conexion
                $sql = " SELECT evento_id, nombre, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado "; //Se hace la consulta
                $sql .= " FROM `eventos` ";
                $sql .= " INNER JOIN categoria_evento ";
                $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .= " INNER JOIN invitados ";
                $sql .= " ON eventos.id_cat_evento = invitados.invitado_id ";
                $sql .= " AND eventos.id_cat_evento = 1 ";
                $sql .= " ORDER BY evento_id LIMIT 2;";
                $sql .= " SELECT evento_id, nombre, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado "; //Se hace la consulta
                $sql .= " FROM `eventos` ";
                $sql .= " INNER JOIN categoria_evento ";
                $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .= " INNER JOIN invitados ";
                $sql .= " ON eventos.id_cat_evento = invitados.invitado_id ";
                $sql .= " AND eventos.id_cat_evento = 2 ";
                $sql .= " ORDER BY evento_id LIMIT 2;";
                $sql .= " SELECT evento_id, nombre, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado "; //Se hace la consulta
                $sql .= " FROM `eventos` ";
                $sql .= " INNER JOIN categoria_evento ";
                $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .= " INNER JOIN invitados ";
                $sql .= " ON eventos.id_cat_evento = invitados.invitado_id ";
                $sql .= " AND eventos.id_cat_evento = 3 ";
                $sql .= " ORDER BY evento_id LIMIT 2;";
              
                //$resultado = $conn->query($sql); //Se consulta la base de datos
            } catch(\Exception $e){
                echo $e->getMessage();
            }
          ?>

          <?php $conn->multi_query($sql); ?>
          <?php
            do{
              $resultado = $conn->store_result();
              $row = $resultado->fetch_all(MYSQLI_ASSOC); ?>
              <?php $i = 0; ?>

              <?php foreach($row as $evento): ?>
                <?php if($i % 2 == 0) { ?>
                  <div id="<?php echo strtolower($evento['cat_evento']); ?>" class="info-curso ocultar clearfix">
                <?php } ?>
                    <div class="detalle-evento">
                      <h3><?php echo $evento['nombre']; ?></h3>
                      <p><i class="fa-solid fa-clock"></i> <?php echo $evento['hora_evento'];?> </p>
                      <p><i class="fa-solid fa-calendar"></i> <?php echo $evento['fecha_evento'];?> </p>
                      <p><i class="fa-solid fa-user"></i> <?php echo $evento['nombre_invitado'] . " " . $evento['apellido_invitado'];?> </p>
                    </div>
                    
                <?php if($i % 2 == 1): ?>   
                  <a href="calendario.php" class="boton float-right">Ver Todos</a>
                  </div><!--#talleres-->
                <?php endif; ?>
                <?php $i++; ?>
              <?php endforeach; ?>
              <?php $resultado->free(); ?>
            <?php } while($conn->more_results() && $conn->next_result());?>   
        </div> <!--.programa-evento-->
      </div><!--.contenedor-->
    </div><!--.contenido-programa-->
  </section><!--.programa-->

  
  <?php include_once 'includes/templates/invitados.php'; ?>

  <div class="contador parallax">
    <div class="contenedor">
      <ul class="resumen-evento clearfix">
        <li><p class="numero"></p> Invitados</li>
        <li><p class="numero"></p> Talleres</li>
        <li><p class="numero"></p> Dias</li>
        <li><p class="numero"></p> Conferencias</li>
      </ul>
    </div>
  </div>

  <section class="precios seccion">
    <h2>Precios</h2>
    <div class="contenedor">
      <ul class="lista-precios clearfix">
        <li>
          <div class="tabla-precio">
            <h3>Pase por día</h3>
            <p class="numero">$30</p>
            <ul>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="registro.php" class="boton hollow">Comprar </a>
          </div>
        </li>

        <li>
          <div class="tabla-precio">
            <h3>Todos los días</h3>
            <p class="numero">$50</p>
            <ul>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="registro.php" class="boton">Comprar </a>
          </div>
        </li>

        <li>
          <div class="tabla-precio">
            <h3>Pase por 2 días</h3>
            <p class="numero">$45</p>
            <ul>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="registro.php" class="boton hollow">Comprar </a>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <div id="mapa" class="mapa"></div>

  <section class="seccion">
    <h2>Testimonios</h2>
    <div class="testimoniales contenedor clearfix">
      <div class="testimonial">
        <blockquote>
          <p>Aliquam erat volutpat. Vestibulum rhoncus tortor eu dui ornare, a gravida justo aliquam. Pellentesque eleifend lacinia ipsum vel ullamcorper. Proin mollis hendrerit condimentum.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="Imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div><!--Testimonio-->
      <div class="testimonial">
        <blockquote>
          <p>Aliquam erat volutpat. Vestibulum rhoncus tortor eu dui ornare, a gravida justo aliquam. Pellentesque eleifend lacinia ipsum vel ullamcorper. Proin mollis hendrerit condimentum.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="Imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div><!--Testimonio-->
      <div class="testimonial">
        <blockquote>
          <p>Aliquam erat volutpat. Vestibulum rhoncus tortor eu dui ornare, a gravida justo aliquam. Pellentesque eleifend lacinia ipsum vel ullamcorper. Proin mollis hendrerit condimentum.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="Imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div><!--Testimonio-->
    </div>
  </section>

  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>Registrate al newsletter</p>
      <h3>BSAWebCamp</h3>
      <a href="#" class="boton transparente">Registro</a>
    </div><!--Contenido-->
  </div><!--Newsletter-->

  <section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
      <ul class="clearfix">
        <li><p id="dias" class="numero"></p> días</li>
        <li><p id="horas" class="numero"></p> horas</li>
        <li><p id="minutos" class="numero"></p> minutos</li>
        <li><p id="segundos" class="numero"></p> segundos</li>
      </ul>
    </div>
    }
  </section>

  <?php include_once 'includes/templates/footer.php'; ?>
