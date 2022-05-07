<?php
    define('XENTURIONIT_HOST', 'localhost');
    define('XENTURIONIT_DB_USUARIO', 'root');
    define('XENTURIONIT_DB_PASSWORD', '');
    define('XENTURIONIT_DB_DATABASE', 'xenturionit_respaldo');

    $conn = new mysqli(XENTURIONIT_HOST, XENTURIONIT_DB_USUARIO, XENTURIONIT_DB_PASSWORD, XENTURIONIT_DB_DATABASE);

    if($conn->connect_error) {
      echo $conn->connect_error;
    }
