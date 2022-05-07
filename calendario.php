<?php include_once 'includes/templates/header.php'; ?>
<section id="schedule" class="section-with-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Calendario de Eventos</h2>
        </div>
        <?php
        header('Content-Type: text/html; utf8');
        ?>
        <?php

        try {
            require_once('includes/funciones/bd_conexion.php');
            $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado, url_imagen ";
            $sql .= " FROM eventos ";
            $sql .= " INNER JOIN categoria_evento ";
            $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
            $sql .= " INNER JOIN invitados ";
            $sql .= " ON eventos.id_inv = invitados.invitado_id ";
            $sql .= " ORDER BY evento_id ";
            $resultado = $conn->query($sql);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }


        ?>
        <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <?php
                $calendario = array();
                while ($eventos = $resultado->fetch_assoc()) {
                    // obtiene la fecha del evento
                    $fecha = $eventos['fecha_evento'];
                    $evento = array(
                        'titulo' => $eventos['nombre_evento'],
                        'fecha' => $eventos['fecha_evento'],
                        'hora' => $eventos['hora_evento'],
                        'categoria' => $eventos['cat_evento'],
                        'icono' => $eventos['icono'],
                        'url_imagen' => $eventos['url_imagen'],
                        'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']
                    );

                    $calendario[$fecha][] = $evento;
                    ?>
                <?php } // while de fetch_assoc()  ?>

                <?php
                // Imprime todos los eventos
                foreach ($calendario as $dia => $lista_eventos) { ?>
                    <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
                        <li class="nav-item">
                            <a class="nav-link active" role="tab" data-bs-toggle="tab">
                                <?php
                                // Unix
                                setlocale(LC_TIME, 'es_ES.UTF-8');
                                // Windows
                                setlocale(LC_TIME, 'spanish');
                                echo strftime("%A, %d de %B del %Y", strtotime($dia)); ?>

                            </a>
                        </li>
                    </ul>
                    <?php foreach ($lista_eventos as $evento) { ?>
                        <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day">
                            <div class="row schedule-item">
                                <div class="col-md-2">
                                    <p class="hora">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <?php echo $evento['fecha'] . " " . $evento['hora']; ?>
                                    </p>

                                </div>

                                <div class="col-md-10">
                                    <div class="speaker">
                                        <img src="img/invitados/<?php echo $evento['url_imagen']; ?>" alt="Brenden Legros">
                                    </div>
                                    <h3><?php header('Content-Type: text/html; utf8'); echo $evento['titulo']; ?></h3>
                                    <p><?php echo $evento['categoria']. ' / '.$evento['invitado'];?></p>

                                </div>
                            </div>
                        </div>
                        <!--                --><?php //foreach($lista_eventos as $evento) { ?>
                        <!--                    <div class="dia">-->
                        <!--                        <p class="titulo_calendar">--><?php //echo $evento['titulo']; ?><!--</p>-->
                        <!--                        <p class="hora">-->
                        <!--                            <i class="fa fa-clock-o" aria-hidden="true"></i>-->
                        <!--                            --><?php //echo $evento['fecha'] . " " . $evento['hora']; ?>
                        <!--                        </p>-->
                        <!--                        <p>-->
                        <!--                            <i class="fa --><?php //echo $evento['icono']; ?><!--" aria-hidden="true"></i>-->
                        <!--                            --><?php //echo $evento['categoria']; ?><!--</p>-->
                        <!--                        <p>-->
                        <!--                            <i class="fa fa-user" aria-hidden="true"></i>-->
                        <!--                            --><?php //echo $evento['invitado']; ?><!--</p>-->
                        <!--                        </p>-->
                        <!---->
                        <!--                    </div>-->
                        <!---->
                    <?php } ?>
                <?php } // fin foreach de dias ?>

            </div>


    </div>
</section>


<?php include_once 'includes/templates/footer.php'; ?>
