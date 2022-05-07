<?php
include_once 'funciones/funciones.php';

// Leer los datos
if(isset($_POST['nombre_banco'])){
    $nombre_banco = $_POST['nombre_banco'];
}
if(isset($_POST['tipo_cuenta'])){
    $tipo_cuenta = $_POST['tipo_cuenta'];
}
if(isset($_POST['email'])){
    $email = $_POST['email'];
}
if (isset($_POST['ced_ruc'])) {
    $ced_ruc = $_POST['ced_ruc'];
}
if(isset($_POST['descripcion'])){
    $descripcion = $_POST['descripcion'];
}
if(isset($_POST['nro_cuenta'])){
    $nro_cuenta = $_POST['nro_cuenta'];
}


if($_POST['registro'] == 'nuevo') {
    try {
        $stmt = $conn->prepare("INSERT INTO cuentas_bancarias (nombre_banco, tipo_cuenta, nro_cuenta, email, ced_ruc, descripcion, creado)values(?, ?, ?, ?, ?, ?, now())");
        $stmt->bind_param("ssssss", $nombre_banco, $tipo_cuenta, $nro_cuenta, $email, $ced_ruc, $descripcion);
        $stmt->execute();
        if($stmt->affected_rows) {
            $respuesta = array(
                'respuesta' => 'correcto',
                'id_insertado' => $stmt->insert_id,
                'tipo' => 'cuentas'
            );

        } else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        $stmt->close();
        $conn->close();

    } catch(Exception $e) {
        $respuesta = array(
            'respuesta' =>  $e->getMessage()
        );
    }

    die(json_encode($respuesta));
}

if($_POST['registro'] == 'actualizar') {
    $id_registro = $_POST['id_registro'];
    $usuario = $_POST['usuario'];
    $nuevo_password = $_POST['nuevo_password'];
    try {
        $opciones = array(
            'cost' => 12,
        );
        if(empty($_POST['nuevo_password']) && empty($_POST['repetir_password'])) {
            $stmt = $conn->prepare("UPDATE admins SET usuario = ?, actualizado = NOW() WHERE ID_admin = ?  ");
            $stmt->bind_param("si", $usuario, $id_registro);

        } else {
            $hash_password = password_hash($nuevo_password, PASSWORD_BCRYPT, $opciones);
            $stmt = $conn->prepare("UPDATE admins SET usuario = ?,  hash_pass = ? WHERE ID_admin = ?  ");
            $stmt->bind_param("ssi", $usuario, $hash_password, $id_registro);

        }

        $stmt->execute();
        if($stmt->affected_rows) {
            $respuesta = array(
                'respuesta' => 'correcto',
                'id_actualizado' => $stmt->insert_id,
                'tipo' => 'cuentas'
            );

        } else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        $stmt->close();
        $conn->close();

    } catch(Exception $e) {
        $respuesta = array(
            'respuesta' =>  $e->getMessage()
        );
    }

    die(json_encode($respuesta));
}

if($_POST['registro'] == 'eliminar'){
    $id_borrar = $_POST['id'];

    try {
        $stmt = $conn->prepare("DELETE FROM cuentas_bancarias WHERE id = ? ");
        $stmt->bind_param("i", $id_borrar);
        $stmt->execute();
        if($stmt->affected_rows) {
            $respuesta = array(
                'respuesta' => 'correcto',
                'id_eliminado' => $id_borrar,
                'tipo'=>'cuentas'
            );

        } else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        $stmt->close();
        $conn->close();

    } catch(Exception $e) {
        $respuesta = array(
            'respuesta' =>  $e->getMessage()
        );
    }

    die(json_encode($respuesta));
}
