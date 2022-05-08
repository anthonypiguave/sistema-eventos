<?php include_once 'includes/templates/header.php'; ?>

        <section class="seccion contenedor">
            <h2>La mejor conferencia  de diseño web en español</h2>
            <p style="text-align: justify;">
                Las conferencias, ponentes, categorías serán 100% administrables desde un Panel de Administración donde el administrador del sitio web deberá iniciar sesión para poder administrar la información. Los visitantes podrán comprar sus boletos, inscribirse a las conferencias, elegir un regalo y algunos otros artículos en venta. Los pagos se procesarán por medio de PayPal y una vez que el pago es exitoso se almacenará en la base de datos y la persona estará inscrita a la conferencia.
            </p>
        </section> <!--seccion-->

        <section class="programa">
            <div class="contenedor-video">
                <video autoplay loop muted poster="img/bg-talleres.jpg">
                    <source src="video/video.mp4" type="video/mp4">
                    <source src="video/video.webm" type="video/webm">
                    <source src="video/video.ogv" type="video/ogg">
                </video>
            </div> <!--.contenedor-video-->
            <div class="contenido-programa">
                <div class="contenedor">
                    <div class="programa-evento">
                        <div class="section-header">
                            <h2>Programas del Evento</h2>
                        </div>

                        <?php
                            try {
                              require_once('includes/funciones/bd_conexion.php');
                              $sql = "SELECT * FROM `categoria_evento` ";
                              $resultado = $conn->query($sql);
                            } catch (Exception $e) {
                              $error = $e->getMessage();
                            }
                         ?>
                        <nav class="menu-programa">
                          <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                            <?php $categoria = $cat['cat_evento']; ?>
                                <a href="#<?php echo strtolower($categoria) ?>">
                                      <i class="fa <?php echo $cat['icono'] ?>" aria-hidden="true"></i> <?php echo $categoria ?>
                                </a>
                          <?php } ?>
                        </nav>

                        <?php
                            try {
                              require_once('includes/funciones/bd_conexion.php');
                              $sql = "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `nombre_invitado`, `apellido_invitado` ";
                              $sql .= "FROM `eventos` ";
                              $sql .= "INNER JOIN `categoria_evento` ";
                              $sql .= "ON eventos.id_cat_evento=categoria_evento.id_categoria ";
                              $sql .= "INNER JOIN `invitados` ";
                              $sql .= "ON eventos.id_inv=invitados.invitado_id ";
                              $sql .= "AND eventos.id_cat_evento = 1 ";
                              $sql .= "ORDER BY `evento_id` LIMIT 2;";
                              $sql .= "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `nombre_invitado`, `apellido_invitado` ";
                              $sql .= "FROM `eventos` ";
                              $sql .= "INNER JOIN `categoria_evento` ";
                              $sql .= "ON eventos.id_cat_evento=categoria_evento.id_categoria ";
                              $sql .= "INNER JOIN `invitados` ";
                              $sql .= "ON eventos.id_inv=invitados.invitado_id ";
                              $sql .= "AND eventos.id_cat_evento = 2 ";
                              $sql .= "ORDER BY `evento_id` LIMIT 2;";
                              $sql .= "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `nombre_invitado`, `apellido_invitado` ";
                              $sql .= "FROM `eventos` ";
                              $sql .= "INNER JOIN `categoria_evento` ";
                              $sql .= "ON eventos.id_cat_evento=categoria_evento.id_categoria ";
                              $sql .= "INNER JOIN `invitados` ";
                              $sql .= "ON eventos.id_inv=invitados.invitado_id ";
                              $sql .= "AND eventos.id_cat_evento = 3 ";
                              $sql .= "ORDER BY `evento_id` LIMIT 2;";
                            } catch (Exception $e) {
                              $error = $e->getMessage();
                            }
                         ?>

                        <?php $conn->multi_query($sql); ?>

                        <?php
                            do {
                                $resultado = $conn->store_result();
                                $row = $resultado->fetch_all(MYSQLI_ASSOC);    ?>

                                <?php $i = 0; ?>
                                <?php foreach($row as $evento): ?>
                                  <?php if($i % 2 == 0) { ?>
                                    <div id="<?php echo strtolower($evento['cat_evento']) ?>" class="info-curso ocultar clearfix">
                                  <?php } ?>
                                          <div class="detalle-evento">
                                              <h3><?php echo html_entity_decode($evento['nombre_evento']) ?></h3>
                                              <p><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $evento['hora_evento']; ?></p>
                                              <p><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $evento['fecha_evento']; ?></p>
                                              <p><i class="fa fa-user" aria-hidden="true"></i> <?php echo $evento['nombre_invitado'] . " " .  $evento['apellido_invitado']; ?></p>
                                          </div>
                                  <?php if($i % 2 == 1): ?>
                                        <a href="calendario.php" class="button float-right">Ver todos</a>
                                    </div> <!--#talleres-->
                                  <?php endif; ?>
                                <?php $i++; ?>
                                <?php endforeach; ?>
                                <?php $resultado->free(); ?>
                          <?php  } while ($conn->more_results() && $conn->next_result());?>



                    </div> <!--.programa-evento-->
                </div> <!--.contenedor-->
            </div><!--.contenido-programa-->
        </section> <!--.programa-->


<?php include_once 'includes/templates/invitados.php'; ?>


        <div class="contador parallax">
            <div class="contenedor">
                <ul class="resumen-evento clearfix">
                    <li><p class="numero">0</p> Invitados</li>
                    <li><p class="numero">0</p> Talleres</li>
                    <li><p class="numero">0</p> Días</li>
                    <li><p class="numero">0</p> Conferencias</li>

                </ul>
            </div>
        </div>

<!--        <section class="precios seccion">-->
<!--            <h2>Precios</h2>-->
<!--            <div class="contenedor">-->
<!--                  <ul class="lista-precios clearfix">-->
<!--                      <li>-->
<!--                            <div class="tabla-precio">-->
<!--                                <h3>Pase por día</h3>-->
<!--                                <p class="numero">$30</p>-->
<!--                                <ul>-->
<!--                                  <li>Bocadillos Gratis</li>-->
<!--                                  <li>Todas las conferencias</li>-->
<!--                                  <li>Todos los talleres</li>-->
<!--                                </ul>-->
<!--                                <a href="#" class="button hollow">Comprar</a>-->
<!--                            </div>-->
<!--                      </li>-->
<!--                      <li>-->
<!--                            <div class="tabla-precio">-->
<!--                                <h3>Todos los días</h3>-->
<!--                                <p class="numero">$50</p>-->
<!--                                <ul>-->
<!--                                  <li>Bocadillos Gratis</li>-->
<!--                                  <li>Todas las conferencias</li>-->
<!--                                  <li>Todos los talleres</li>-->
<!--                                </ul>-->
<!--                                <a href="#" class="button">Comprar</a>-->
<!--                            </div>-->
<!--                      </li>-->
<!---->
<!--                      <li>-->
<!--                            <div class="tabla-precio">-->
<!--                                <h3>Pase por 2 días</h3>-->
<!--                                <p class="numero">$45</p>-->
<!--                                <ul>-->
<!--                                  <li>Bocadillos Gratis</li>-->
<!--                                  <li>Todas las conferencias</li>-->
<!--                                  <li>Todos los talleres</li>-->
<!--                                </ul>-->
<!--                                <a href="#" class="button hollow">Comprar</a>-->
<!--                            </div>-->
<!--                      </li>-->
<!--                  </ul>-->
<!--            </div>-->
<!--        </section>-->
    <section id="buy-tickets" class="section-with-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Precios</h2>
                <p>Compra Tickets</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">Pase por 1 dia</h5>
                            <h6 class="card-price text-center">$30</h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Asientos regulares</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Bocadillos Gratis</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Todos los eventos</li>
                                <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Insignia personalizada</li>
                            </ul>
                            <hr>
                            <div class="text-center">
                                <a href="registro.php" class="btn">Comprar Ahora!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pro Tier -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">Todos los dias</h5>
                            <h6 class="card-price text-center">$50</h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Asientos regulares</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Bocadillos Gratis</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Todos los eventos</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Insignia personalizada</li>
                            </ul>
                            <hr>
                            <div class="text-center">
                                <a href="registro.php" class="btn">Comprar Ahora!</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">Pase por 2 Dias</h5>
                            <h6 class="card-price text-center">$45</h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Asientos regulares</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Bocadillos Gratis</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Todos los eventos</li>
                                <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Insignia personalizada</li>
                            </ul>
                            <hr>
                            <div class="text-center">
                                <a href="registro.php" class="btn">Comprar Ahora!</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <div id="mapa" class="mapa"></div>
<!--<section id="faq">-->
<!--    <div class="container" data-aos="fade-up">-->
<!--        <div class="section-header">-->
<!--            <h2>F.A.Q </h2>-->
<!--        </div>-->
<!--        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">-->
<!--            <div class="col-lg-9">-->
<!--                <ul class="faq-list">-->
<!--                    <li>-->
<!--                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>-->
<!--                        <div id="faq1" class="collapse" data-bs-parent=".faq-list">-->
<!--                            <p>-->
<!--                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </div>-->
<!---->
<!--</section>-->

<section id="subscribe">
    <div class="container" data-aos="zoom-in">
        <div class="section-header">
            <h2>Newsletter</h2>
            <p>Suscribete a nuestro Newsletter, mantente informado y no te pierdas de nada.</p>
        </div>

        <form method="POST" action="#">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10 d-flex">
                    <input type="text" class="form-control" placeholder="Enter your Email">
                    <button type="submit" class="ms-2">Subscribe</button>
                </div>
            </div>
        </form>

    </div>
</section>

        <section class="seccion">
            <h2>Faltan</h2>
            <div class="cuenta-regresiva contenedor">
                <ul class="clearfix">
                    <li><p id="dias" class="numero_contador"></p> días</li>
                    <li><p id="horas" class="numero_contador"></p> horas</li>
                    <li><p id="minutos" class="numero_contador"></p> minutos</li>
                    <li><p id="segundos" class="numero_contador"></p> segundos</li>
                </ul>
            </div>
        </section>
  <?php include_once 'includes/templates/footer.php'; ?>
