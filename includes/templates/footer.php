<footer class="site-footer">
    <div class="contenedor clearfix">
      <div class="footer-informacion">
        <h3>Sobre <span>BSAWebCamp</span></h3>
        <p>Aliquam erat volutpat. Vestibulum rhoncus tortor eu dui ornare, a gravida justo aliquam. Pellentesque eleifend lacinia ipsum vel ullamcorper. Proin mollis hendrerit condimentum.</p>
          
      </div>
      <div class="ultimos-tweets">
        <h3>Ultimos <span>tweets</span></h3>
        <ul>
          <li>Aliquam erat volutpat. Vestibulum rhoncus tortor eu dui ornare, a gravida justo aliquam.</li>
          <li>Aliquam erat volutpat. Vestibulum rhoncus tortor eu dui ornare, a gravida justo aliquam.</li>
          <li>Aliquam erat volutpat. Vestibulum rhoncus tortor eu dui ornare, a gravida justo aliquam.</li>

        </ul>
      </div>
      <div class="menu">
        <h3>Redes <span>sociales</span></h3>
        <nav class="redes-sociales">
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </nav>
      </div>
    </div>
  </footer>

  <p class="copyright">
    Todos los derechos reservados BSAWEBCAMP 2022
  </p>

  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.lettering.js"></script>
  
  <?php
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    if($pagina == 'index'){
      echo '<script src="js/jquery.waypoints.js"></script>';
    } else if($pagina == 'conferencias'){
      echo '<script src="js/lightbox.js"></script>';
    }
  ?>

  <script src="js/main.js"></script>
  

  

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
