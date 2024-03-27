<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "chatbot";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
  echo "Error en la conexion de la base de datos" . mysqli_connect_error();
}
