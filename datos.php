<?php
include_once 'includes/templates/header.php';
?>
<section class="seccion contenedor">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            table {
                border-collapse: collapse;
                border-spacing: 0;
                width: 100%;
                border: 1px solid #ddd;

            }
            th, td {
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even){
                background-color: #f2f2f2
            }
        </style>
    </head>
    <body>
    <h2>Datos para Realizar Transferencias Bancarias o Depósitos</h2>
<!--    <table id="registros" class="table table-bordered table-hover">-->
<!--        <thead>-->
<!--        <tr>-->
<!--            <th>#</th>-->
<!--            <th>Nombre</th>-->
<!--            <th>Tipo</th>-->
<!--            <th>Nro de Cuenta</th>-->
<!--            <th>Correo Electrónico</th>-->
<!--            <th>Identificación</th>-->
<!--            <th>Descripción</th>-->
<!--        </tr>-->
<!--        </thead>-->
<!---->
<!--        <tbody>-->
<!--        --><?php
//
//        try {
//            require_once('includes/funciones/bd_conexion.php');
//
//            $sql = "SELECT * FROM cuentas_bancarias"; //Crea consulta SQL
//
//            $respuesta = $conn->query($sql); //Ejecuta consulta SQL
//
//        } catch(Exception $e){
//            $error = $e->getMessage();
//            echo $error;
//        }
//
//        $numero = 1;
//        while($resultado = $respuesta->fetch_assoc()){
//            ?>
<!--            <tr>-->
<!--                <td> --><?php //echo $numero; ?><!-- </td>-->
<!--                <td> --><?php //echo $resultado['nombre_banco']; ?><!-- </td>-->
<!--                <td> --><?php //echo $resultado['tipo_cuenta']; ?><!-- </td>-->
<!--                <td> --><?php //echo $resultado['nro_cuenta']; ?><!-- </td>-->
<!--                <td> --><?php //echo $resultado['email']; ?><!-- </td>-->
<!--                <td> --><?php //echo $resultado['ced_ruc']; ?><!-- </td>-->
<!--                <td> --><?php //echo $resultado['descripcion']; ?><!-- </td>-->
<!--            </tr>-->
<!---->
<!--            --><?php
//            $numero++;
//        }
//        ?>
<!---->
<!--        </tbody>-->
<!--        <tfoot>-->
<!--        </tfoot>-->
<!--    </table>-->

    <div id="registros" style="overflow-x:auto;">
        <div>
            <strong>1. Puede realizar su pago por medio de:</strong> <br/>
            - Efectivo<br/>
            - Depósitos<br/>
            - Transferencias<br/>
            <br/>
            <strong>2. Envio del comprobante:</strong><br/>
            Nos ayuda enviando el comprobante al whatsapp 0978873600 o al correo: solucionesit@xenturionit.com<br/><br/>

            <strong>3. Una vez confirmado el pago se procederá con la validación de su registro.</strong><br/>

        </div><br/><br/>
        <table>
            <thead>
            <tr style="background-color: #0d6efd;color: white">
                <th style="text-align: center; ">#</th>
                <th style="text-align: center">Nombre</th>
                <th style="text-align: center">Tipo</th>
                <th style="text-align: center">Nro de Cuenta</th>
                <th style="text-align: center">Correo Electrónico</th>
                <th style="text-align: center">Identificación</th>
                <th style="text-align: center">Descripción</th>
            </tr>
            </thead>
            <tbody>
            <?php

            try {
                require_once('includes/funciones/bd_conexion.php');

                $sql = "SELECT * FROM cuentas_bancarias"; //Crea consulta SQL

                $respuesta = $conn->query($sql); //Ejecuta consulta SQL

            } catch(Exception $e){
                $error = $e->getMessage();
                echo $error;
            }

            $numero = 1;
            while($resultado = $respuesta->fetch_assoc()){
                ?>
                <tr>
                    <td> <?php echo $numero; ?> </td>
                    <td> <?php echo $resultado['nombre_banco']; ?> </td>
                    <td> <?php echo $resultado['tipo_cuenta']; ?> </td>
                    <td> <?php echo $resultado['nro_cuenta']; ?> </td>
                    <td> <?php echo $resultado['email']; ?> </td>
                    <td> <?php echo $resultado['ced_ruc']; ?> </td>
                    <td> <?php echo $resultado['descripcion']; ?> </td>
                </tr>

                <?php
                $numero++;
            }
            ?>

            </tbody>
        </table><br/>
        <strong>Nuestro Horario de atención:</strong> Lunes a Viernes de 09:00 a 18:00 Cualquier duda Contáctanos al  (04) 232-8580<br/>
        Puede visitarnos con total confianza en Pichincha 334 y Elizalde Edificio El Comercio Piso 6 – Oficina 601

    </div>
</section>


<?php include_once 'includes/templates/footer.php'; ?>
