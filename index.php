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
          <nav class="menu-programa">
            <a href="#talleres"><i class="fa-solid fa-code"></i> Talleres</a>
            <a href="#conferencias"><i class="fa-solid fa-comment"></i> Conferencias</a>
            <a href="#seminarios"><i class="fa-solid fa-university"></i> Seminarios</a>
          </nav>

          <div id="talleres" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>HTML5, CSS3 y JavaScript</h3>
              <p><i class="fa-solid fa-clock"></i> 17:00hs</p>
              <p><i class="fa-solid fa-calendar"></i> 10 Enero</p>
              <p><i class="fa-solid fa-user"></i> Matías</p>
            </div>
            <div class="detalle-evento">
              <h3>Responsive Web Design</h3>
              <p><i class="fa-solid fa-clock"></i> 21:00hs</p>
              <p><i class="fa-solid fa-calendar"></i> 10 Enero</p>
              <p><i class="fa-solid fa-user"></i> Matías</p>
            </div>
            <a href="#" class="boton float-right">Ver Todos</a>
          </div><!--#talleres-->


            <div id="conferencias" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>Como ser freelancer</h3>
                <p><i class="fa-solid fa-clock"></i> 10:00hs</p>
                <p><i class="fa-solid fa-calendar"></i> 10 Enero</p>
                <p><i class="fa-solid fa-user"></i> Gregorio</p>
              </div>
              <div class="detalle-evento">
                <h3>Tecnologías del futuro</h3>
                <p><i class="fa-solid fa-clock"></i> 17:00hs</p>
                <p><i class="fa-solid fa-calendar"></i> 10 Enero</p>
                <p><i class="fa-solid fa-user"></i> Susan</p>
              </div>
              <a href="#" class="boton float-right">Ver Todos</a>
            </div> <!--#conferencias-->

            <div id="seminarios" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>Diseño UI/UX para móviles</h3>
                <p><i class="fa-solid fa-clock"></i> 7:00hs</p>
                <p><i class="fa-solid fa-calendar"></i> 11 Enero</p>
                <p><i class="fa-solid fa-user"></i> Halorld</p>
              </div>
              <div class="detalle-evento">
                <h3>Tecnologías del futuro</h3>
                <p><i class="fa-solid fa-clock"></i> 10:00hs</p>
                <p><i class="fa-solid fa-calendar"></i> 11 Enero</p>
                <p><i class="fa-solid fa-user"></i> Susana</p>
              </div>
              <a href="#" class="boton float-right">Ver Todos</a>
            </div> <!--#seminarios-->
        </div> <!--.programa-evento-->
      </div><!--.contenedor-->
    </div><!--.contenido-programa-->
  </section><!--.programa-->

  <section class="invitados contenedor seccion">
    <h2>Invitados</h2>
    <ul class="lista-invitados clearfix">
      <li>
        <div class="invitado">
          <img src="img/invitado1.jpg" alt="imagen invitado">
          <p>Rafael Bautista</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado2.jpg" alt="imagen invitado">
          <p>Shari Herrera</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado3.jpg" alt="imagen invitado">
          <p>Gregorio Sanchez</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado4.jpg" alt="imagen invitado">
          <p>Susana Rivera</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado5.jpg" alt="imagen invitado">
          <p>Harold Garcia</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado6.jpg" alt="imagen invitado">
          <p>Susan Sanchez</p>
        </div>
      </li>
    </ul>
  </section>

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
            <a href="#" class="boton hollow">Comprar </a>
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
            <a href="#" class="boton">Comprar </a>
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
            <a href="#" class="boton hollow">Comprar </a>
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
