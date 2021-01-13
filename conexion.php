<?php
$mysqli = new mysqli("localhost","root","","panaderia");

if (mysqli_connect_errno()) {
    echo 'error al conectar:', mysqli_connect_error();
    exit();
    }

?>