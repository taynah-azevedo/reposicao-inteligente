<?php
session_start();
$endereco = "localhost";
$usuario = "root";
$senha = "usbw";
$banco = "db_reposicaointeligente";
$MySQLi = new mysqli($endereco, $usuario, $senha, $banco, 3306);
if (mysqli_connect_error()) {
  die(mysqli_connect_error());
  exit();
}
?>