<?php include_once 'includes/templates/header.php'; ?>
<!-- ======= Contact Section ======= -->
<section id="contact" class="section-bg">
    <div class="container" data-aos="fade-up">
        <div class="container_contact">
            <span class="big-circle"></span>
            <img src="img/shape.png" class="square" alt=""/>
            <div class="form">
                <div class="contact-info">
                    <div>
                        <div class="contact-address">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Dirección</h3>
                            <address>Pichincha 334 y Elizalde
                                Edificio El Comercio
                                Piso 6 – Oficina 601 <br/>Guayaquil, Ecuador.
                            </address>
                        </div>
                    </div>
                    <div>
                        <div class="contact-phone">
                            <i class="bi bi-phone"></i>
                            <h3>Teléfono</h3>
                            <p><a href="tel:(04) 232-8580">(04) 232-8580</a></p>
                        </div>
                    </div>

                </div>

                <div class="contact-form">
                    <span class="circle one"></span>
                    <span class="circle two"></span>

                    <form action="send_email.php" method="post">
                        <?php
                        $Msg = "";
                        if (isset($_GET['error'])) {
                            $Msg = " Porfavor complete todos los campos";
                            echo '<div style="margin-left: 35px; margin-right: 35px;" class="alert alert-danger">' . $Msg . '</div>';
                        }

                        if (isset($_GET['success'])) {
                            $Msg = " Tu mensaje fue enviado correctamente ";
                            echo '<div style="margin-left: 35px; margin-right: 35px;" class="alert alert-success">' . $Msg . '</div>';
                        }

                        ?>
                        <h3 class="title">Contact us</h3>
                        <div class="input-container_contact">
                            <input type="text" name="name" class="input"/>
                            <label for="">Nombre</label>
                            <span>Nombre</span>
                        </div>
                        <div class="input-container_contact">
                            <input type="email" name="email" class="input"/>
                            <label for="">Email</label>
                            <span>Email</span>
                        </div>
                        <div class="input-container_contact">
                            <input type="text" name="phone" class="input"/>
                            <label for="">Teléfono</label>
                            <span>Teléfono</span>
                        </div>
                        <div class="input-container_contact">
                            <input type="text" name="subject" class="input"/>
                            <label for="">Asunto</label>
                            <span>Asunto</span>
                        </div>
                        <div class="input-container_contact textarea">
                            <textarea name="message" class="input"></textarea>
                            <label for="">Mensaje</label>
                            <span>Mensaje</span>
                        </div>
                        <button class="btn btn-success" type="submit" name="sendmail">ENVIAR</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Contact Section -->
<script
    src="https://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous"
></script>
<script src="js/contact.js"></script>

<?php include_once 'includes/templates/footer.php'; ?>
