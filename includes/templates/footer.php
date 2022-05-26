<!--<footer class="site-footer">-->
<!--    <div class="contenedor clearfix">-->
<!--          <div class="footer-informacion">-->
<!--              <h3>Sobre <span>xenturionit</span></h3>-->
<!--              <p>XenturionIT está conformado por un equipo de profesionales especializados en diferentes campos de TI cuyo propósito es generar valor agregado a nuestros socios estratégicos poniendo a su disposición toda la experiencia adquirida durante la dilatada trayectoria profesional de sus colaboradores y la constante capacitación del personal interno.</p>-->
<!--          </div>-->
<!--          <div class="menu">-->
<!--              <h3>Redes <span>sociales</span></h3>-->
<!--              <nav class="redes-sociales">-->
<!--                  <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>-->
<!--                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>-->
<!--              </nav>-->
<!--          </div>-->
<!--    </div>-->
<!---->
<!--    <p class="copyright">-->
<!--      Todos los derechos Reservados XENTURIONIT 2022.-->
<!--    </p>-->
<!---->
<!--    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">-->
<!--      <style type="text/css">-->
<!--        #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }-->
<!--      </style>-->
<!--      <div style="display:none;">-->
<!--          <div id="mc_embed_signup">-->
<!--          <form action="//easy-webdev.us11.list-manage.com/subscribe/post?u=b3bb37039b6fbf3db0c1a8331&amp;id=20463b69f2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>-->
<!--              <div id="mc_embed_signup_scroll">-->
<!--          	<h2>Suscribete al Newsletter y no te pierdas nada de este evento</h2>-->
<!--          <div class="indicates-required"><span class="asterisk">*</span> es obligatorio</div>-->
<!--          <div class="mc-field-group">-->
<!--          	<label for="mce-EMAIL">Correo Electrónico  <span class="asterisk">*</span>-->
<!--          </label>-->
<!--          	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">-->
<!--          </div>-->
<!--          	<div id="mce-responses" class="clear">-->
<!--          		<div class="response" id="mce-error-response" style="display:none"></div>-->
<!--          		<div class="response" id="mce-success-response" style="display:none"></div>-->
<!--          	</div>-->
<!--              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b3bb37039b6fbf3db0c1a8331_20463b69f2" tabindex="-1" value=""></div>-->
<!--              <div class="clear"><input type="submit" value="Suscribirse" name="subscribe" id="mc-embedded-subscribe" class="button"></div>-->
<!--              </div>-->
<!--          </form>-->
<!--          </div>-->
<!--          <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>-->
<!--        </div>-->
<!--</footer>-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 footer-info">
<!--                    <img src="../../img/logo.png" alt="">-->
                    <p>XenturionIT está conformado por un equipo de profesionales especializados en diferentes campos de TI cuyo propósito es generar valor agregado a nuestros socios estratégicos poniendo a su disposición toda la experiencia adquirida durante la dilatada trayectoria profesional de sus colaboradores y la constante capacitación del personal interno.</p>
                </div>

                <div class="col-lg-3 col-md-8 footer-links">
                    <h4>Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="index.php">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="calendario.php">Calendario</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="invitados.php">Invitados</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="registro.php">Reservaciones</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="contacto.php">Contacto</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contactanos</h4>
                    <p>
                        Pichincha 334 y Elizalde
                        Edificio El Comercio
                        Piso 6 – Oficina 601
                        <br>
                        Guayaquil, Ecuador<br>
                        <strong>Phone:</strong> (04) 232-8580<br>
                        <strong>Email:</strong> solucionesit@xenturionit.com<br>
                    </p>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>XenturionIT</strong>. All Rights Reserved
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.lettering.js"></script>

<?php
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    if($pagina == 'invitados' || $pagina == 'index'){
      echo '<script src="js/jquery.colorbox-min.js"></script>';
      echo '<script src="js/jquery.waypoints.min.js"></script>';
      echo '<script src="js/leaflet.js"></script>';

    } else if($pagina == 'conferencia') {
      echo '<script src="js/lightbox.js"></script>';
      echo '<script src="js/glightbox.min.js"></script>';
      echo '<script src="js/swiper-bundle.min.js"></script>';
    } else if($pagina == 'contacto') {
        echo '<script src="https://www.google.com/recaptcha/api.js?hl=es" async defer></script>';
    }
?>
<script src="js/main.js"></script>
<script src="js/main2.js"></script>
<script src="js/cotizador.js"></script>
<script src="js/aos.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='https://www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>

<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us11.list-manage.com","uuid":"b3bb37039b6fbf3db0c1a8331","lid":"20463b69f2"}) })</script>
</body>
</html>
