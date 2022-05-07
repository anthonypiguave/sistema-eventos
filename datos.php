<?php
include_once 'includes/templates/header.php';
?>
<section class="seccion contenedor">
    <h2>Datos para Realizar Transferencias Bancarias o Depósitos</h2>
    <table id="registros" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Nro de Cuenta</th>
            <th>Correo Electrónico</th>
            <th>Identificación</th>
            <th>Descripción</th>
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
        <tfoot>
        </tfoot>
    </table>
</section>


<?php include_once 'includes/templates/footer.php'; ?>
